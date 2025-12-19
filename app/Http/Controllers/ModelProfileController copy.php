<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\ModelProfile;
use App\Models\Asset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Mail\ModelVerificationMail;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Mail\ModelStatusChangedMail;
use Google\Client;
use Google\Service\Drive;
use Google\Service\Drive\DriveFile;
use App\Services\WhatsAppService;
use Google\Service\Drive\Permission;
use App\Services\GoogleDriveService;


use Illuminate\Support\Facades\Log;

class ModelProfileController extends Controller
{

    protected $whatsAppService;

    public function __construct(WhatsAppService $whatsAppService)
    {
        $this->whatsAppService = $whatsAppService;
    }

    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $models = ModelProfile::with('assets')->latest()->paginate(15);
    //     return view('models.index', compact('models'));
    // }
    public function newRequest()
    {
        $models = ModelProfile::with('assets')
            ->where('status', 'new-request')
            ->get(); // ✅ actually fetch the models

        return view('dashboard.pages.request.New_Request', compact('models'));
    }

    public function pendingRequest()
    {
        $models = ModelProfile::with('assets')
            ->where('status', 'pending')
            ->paginate(15);

        return view('dashboard.pages.request.Pending_Request', compact('models'));
    }

    public function onHoldRequest()
    {
        $models = ModelProfile::with('assets')
            ->where('status', 'on-hold')

            ->paginate(15);

        return view('dashboard.pages.request.Hold', compact('models'));
    }

    public function approvedRequest()
    {
        $models = ModelProfile::with('assets')
            ->where('status', 'approved')
            ->paginate(15);

        return view('dashboard.pages.request.Approved', compact('models'));
    }

    public function rejectedRequest()
    {
        $models = ModelProfile::with('assets')
            ->where('status', 'rejected')

            ->paginate(15);

        return view('dashboard.pages.request.Rejected', compact('models'));
    }


    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,new-request,on-hold,approved,rejected',
        ]);

        $model = ModelProfile::findOrFail($id);
        $oldStatus = $model->status;
        $newStatus = $request->status;

        $model->status = $newStatus;
        $model->save();

        $email = $model->email ?? null;

        Log::info('Status updated', [
            'old' => $oldStatus,
            'new' => $newStatus,
            'email' => $email ?? 'No email in model profile',
        ]);

        // ✅ Send email ONLY if status changed to "approved" and email exists
        if ($email && $oldStatus !== $newStatus && $newStatus === 'approved') {
            try {
                Mail::to($email)->send(new ModelStatusChangedMail($model, $newStatus));
                Log::info("Approval email sent successfully to {$email}");
            } catch (\Exception $e) {
                Log::error("Failed to send approval email: " . $e->getMessage());
            }
        }

        return response()->json([
            'success' => true,
            'message' => 'Status updated successfully!',
            'new_status' => $newStatus,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('models.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'dob' => 'nullable|date',
            'age' => 'nullable|integer',
            'gender' => 'nullable|string|max:50',
            'occupation' => 'nullable|string|max:255',
            'mobile_no' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:500',
            'email' => 'nullable|email|max:255',
            'facebook_id' => 'nullable|string|max:255',
            'instagram_id' => 'nullable|string|max:255',
            'snapchat_id' => 'nullable|string|max:255',
            'tiktok_id' => 'nullable|string|max:255',
            'youtube_id' => 'nullable|string|max:255',
            'passport_no' => 'nullable|string|max:100',
            'passport_expiry' => 'nullable|date',
            'nationality' => 'nullable|string|max:100',
            'country_of_passport' => 'nullable|string|max:100',
            'cnic' => 'nullable|string|max:100',
            'cnic_expiry' => 'nullable|date',
            'backup_contact_name' => 'nullable|string|max:255',
            'backup_number' => 'nullable|string|max:20',
            'languages' => 'nullable|array',
            'languages.*' => 'string|max:50',
            'other_languages' => 'nullable|string|max:255',
            'special_talent' => 'nullable|string|max:500',
            'measurements' => 'nullable|array',
            'measurements.*' => 'nullable|string|max:255',
            'signed_date' => 'nullable|date',
            'availability' => 'nullable|string|max:255',
            'name_as_per_cnic' => 'required|string|max:255',

            // files
            'close_up_image' => 'nullable|file|mimes:jpg,jpeg,png',
            'full_body_image' => 'nullable|file|mimes:jpg,jpeg,png',
            'half_body_image' => 'nullable|file|mimes:jpg,jpeg,png',
            'side_body_image' => 'nullable|file|mimes:jpg,jpeg,png',
            'video' => 'nullable|file|mimes:mp4,avi,mov',
            'cnic_front' => 'nullable|file|mimes:jpg,jpeg,png',
            'cnic_back' => 'nullable|file|mimes:jpg,jpeg,png',

        ]);

        if (isset($data['languages'])) {
            $data['languages'] = json_encode($data['languages']);
        }
        if (isset($data['measurements'])) {
            $data['measurements'] = json_encode($data['measurements']);
        }

        $modelData = collect($data)->except([
            'close_up_image',
            'full_body_image',
            'half_body_image',
            'side_body_image',
            'video',
        ])->toArray();

        $modelData['status'] = 'pending';
        $model = ModelProfile::create($modelData);
        if (!empty($model->mobile_no)) {
            $message = "Hello {$model->name}, your profile has been successfully created!";
            $this->whatsAppService->sendMessage($model->mobile_no, $message);
        }
        $driveService = new GoogleDriveService();
        $token = session('google_token');

        if (!$token) {
            $formData = $request->except(array_keys($request->allFiles()));
            $fileData = [];
            foreach ($request->allFiles() as $key => $file) {
                if ($file instanceof \Illuminate\Http\UploadedFile) {
                    $storedPath = $file->store('tmp', 'local'); // Stored in storage/app/tmp
                    $fileData[$key] = $storedPath;
                }
            }

            session([
                'pending_form_data' => $formData,
                'pending_files' => $fileData,
                'resume_upload' => true,
                'model_id' => $model->id
            ]);


            return redirect('/google/auth')->with('info', 'Please connect Google Drive to continue your upload.');
        }


        $fileFields = [
            'close_up_image',
            'full_body_image',
            'half_body_image',
            'side_body_image',
            'video',
            'cnic_front',
            'cnic_back',
        ];

        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);

                // Upload to Drive
                $publicUrl = $driveService->uploadToDrive($file, $token);

                // Determine file type
                $mime = $file->getClientMimeType();
                $type = str_starts_with($mime, 'video') ? 'video' : 'image';

                $model->assets()->create([
                    'name' => $field,
                    'url' => $publicUrl,
                    'path' => $publicUrl,
                    'type' => $type,
                    'mime_type' => $mime,
                    'size' => $file->getSize(),
                    'disk' => 'google_drive',
                    'original_name' => $file->getClientOriginalName(),
                ]);

            }
        }

        $otp = rand(10000, 99999);
        $email = $request->email;
        $name = $request->name;


        session(['model_otp' => $otp, 'model_email' => $email, 'model_id' => $model->id,]);

        // Send email
        Mail::to($email)->send(new ModelVerificationMail($name, $otp));

        // Redirect to OTP page
        return redirect()->route('verification.email')->with('success', 'A verification code was sent to your email.');
    }

    private function getClient()
    {
        $client = new Client();
        $client->setAuthConfig(storage_path('app/google/client_secret.json'));
        $client->addScope(Drive::DRIVE_FILE);
        $client->setAccessType('offline');
        $client->setPrompt('consent');
        $client->setRedirectUri(url('/google/callback'));
        return $client;
    }

    public function authenticate()
    {
        $client = $this->getClient();
        return redirect($client->createAuthUrl());
    }

    public function callback(Request $request)
    {
        $client = $this->getClient();
        $code = $request->get('code');

        if ($code) {
            $token = $client->fetchAccessTokenWithAuthCode($code);
            Log::info('Google token:', $token);
            if (isset($token['error'])) {
                Log::error('Google Auth Error: ' . $token['error']);
                return redirect('/google/auth')->with('error', 'Google authentication failed.');
            }
            session(['google_token' => $token]);

            // ✅ Resume pending upload if exists
            if (session('resume_upload')) {
                return redirect()->route('model.upload.resume');
            }

            return redirect('/google/upload-form')->with('success', 'Google Drive connected!');
        }

        return redirect('/google/auth')->with('error', 'Authorization failed.');
    }

    public function resumeUpload()
    {
        $formData = session('pending_form_data');
        $fileData = session('pending_files');
        $modelId = session('model_id');

        if (!$formData || !$fileData || !$modelId) {

            return redirect()->back()->with('error', 'Missing session data for upload.');
        }

        $request = new \Illuminate\Http\Request();
        $request->replace($formData);

        foreach ($fileData as $key => $path) {
            $absolutePath = storage_path('app/' . $path);

            if (!file_exists($absolutePath)) {
                return redirect()->back()->with('error', "File missing: {$absolutePath}");
            }

            $file = new \Illuminate\Http\UploadedFile(
                $absolutePath,
                basename($path),
                \Illuminate\Support\Facades\File::mimeType($absolutePath),
                null,
                true
            );

            $request->files->set($key, $file);
        }

        session()->forget(['pending_form_data', 'pending_files', 'resume_upload']);

        return $this->store($request);
    }

    /**
     * Display the specified resource.
     */
    // public function show(ModelProfile $model)
    // {
    //     $model->load('assets');
    //     return view('models.show', compact('model'));
    // }
    public function show($id)
    {
        $model = ModelProfile::with('assets')->findOrFail($id);
        return response()->json($model);
    }

    public function downloadPDF($id)
    {
        $model = ModelProfile::with('assets')->findOrFail($id);
        $userRole = Auth::user()->getRoleNames()->first(); // Or however your role is stored

        $pdf = PDF::loadView('dashboard.components.pdf', compact('model', 'userRole'))
            ->setPaper('a4', 'portrait');

        return $pdf->download($model->name . '_request.pdf');
    }

    public function getLatestModels()
    {
        $latestModels = ModelProfile::latest()->take(3)->get(['id', 'name', 'created_at']);

        return response()->json($latestModels);
    }

    public function edit(ModelProfile $model)
    {
        $model->load('assets');
        return view('models.edit', compact('model'));
    }

    public function update(Request $request, ModelProfile $model)
    {
        // Validate fields (adjust as needed)
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'phone' => 'nullable|string|max:50',
            'dob' => 'nullable|date',
            'gender' => 'nullable|string|max:50',
            'address' => 'nullable|string|max:500',
            // file fields optional
            'close_up_image' => 'nullable|file|mimes:jpg,jpeg,png',
            'full_body_image' => 'nullable|file|mimes:jpg,jpeg,png',
            'half_body_image' => 'nullable|file|mimes:jpg,jpeg,png',
            'side_body_image' => 'nullable|file|mimes:jpg,jpeg,png',
            'video' => 'nullable|file|mimes:mp4,avi,mov',
        ]);

        // Update profile data
        $model->update(collect($data)->except([
            'close_up_image',
            'full_body_image',
            'half_body_image',
            'side_body_image',
            'video'
        ])->toArray());

        // Handle asset replacement
        $fileFields = [
            'close_up_image',
            'full_body_image',
            'half_body_image',
            'side_body_image',
            'signature_image',
            'video',
        ];

        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {
                $file = $request->file($field);
                $relativePath = $file->store('models/' . now()->format('Y/n/j'), 'public');
                $url = \Storage::url($relativePath);

                $mime = $file->getClientMimeType();
                $type = str_starts_with($mime, 'video') ? 'video' : 'image';

                $width = $height = null;
                if ($type === 'image') {
                    try {
                        [$width, $height] = getimagesize($file->getRealPath());
                    } catch (\Throwable $e) {
                        $width = $height = null;
                    }
                }

                // Remove old asset for this field if exists
                $model->assets()->where('name', $field)->delete();

                // Save new asset
                $model->assets()->create([
                    'name' => $field,
                    'path' => $relativePath,
                    'url' => $url,
                    'type' => $type,
                    'mime_type' => $mime,
                    'size' => $file->getSize(),
                    'disk' => 'public',
                    'original_name' => $file->getClientOriginalName(),
                    'width' => $width,
                    'height' => $height,
                ]);
            }
        }

        return redirect()->route('models.index')->with('success', 'Model updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModelProfile $model)
    {
        $model->delete();
        return redirect()
            ->route('models.index')
            ->with('success', 'Model deleted successfully.');
    }
}
