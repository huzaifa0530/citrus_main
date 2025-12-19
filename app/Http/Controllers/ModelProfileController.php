<?php

namespace App\Http\Controllers;

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
use Illuminate\Support\Facades\Http;


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
            ->paginate(15);

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

        /*
        |--------------------------------------------------------------------------
        | 📌 WhatsApp Message Logic
        |--------------------------------------------------------------------------
        */

        if (!empty($model->mobile_no)) {
            $staticNumber = "03422112090";

            // Convert to international format (Pakistan example)
            if (str_starts_with($staticNumber, '0')) {
                $staticNumber = '+92' . substr($staticNumber, 1);
            }

            // Default message (optional)
            $message = "Hello {$model->name}, your profile has been successfully created!";

            // If status changed to APPROVED → send approval message
            if ($oldStatus !== $newStatus && $newStatus === 'approved') {
                $message = "Hello {$model->name}, your profile has been *approved*. Congratulations!";
            }

            // Send WhatsApp message
            try {
                $this->whatsAppService->sendMessage($staticNumber, $message);
                Log::info("WhatsApp message sent to {$model->mobile_no}");
            } catch (\Exception $e) {
                Log::error("Failed to send WhatsApp message: " . $e->getMessage());
            }
        }

        /*
        |--------------------------------------------------------------------------
        | 📌 Email Only When Status Approved
        |--------------------------------------------------------------------------
        */

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
        'father_name' => 'nullable|string|max:255',
        'dob' => 'nullable|date',
        'age' => 'nullable|integer',
        'gender' => 'nullable|string|max:50',
        'occupation' => 'nullable|string|max:255',
        'mobile_no' => 'nullable|string|max:20',
        'home_no' => 'nullable|string|max:20',
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

        // files
        'close_up_image' => 'nullable|file|mimes:jpg,jpeg,png',
        'full_body_image' => 'nullable|file|mimes:jpg,jpeg,png',
        'half_body_image' => 'nullable|file|mimes:jpg,jpeg,png',
        'side_body_image' => 'nullable|file|mimes:jpg,jpeg,png',
        'signature_image' => 'nullable|file|mimes:jpg,jpeg,png',
        'video' => 'nullable|file|mimes:mp4,avi,mov',
    ]);

    if (isset($data['languages'])) {
        $data['languages'] = json_encode($data['languages']);
    }
    if (isset($data['measurements'])) {
        $data['measurements'] = json_encode($data['measurements']);
    }

    $modelData = collect($data)->except([
        'close_up_image', 'full_body_image', 'half_body_image',
        'side_body_image', 'signature_image', 'video',
    ])->toArray();

    $modelData['status'] = 'pending';
    $model = ModelProfile::create($modelData);

    // Google Drive
    $driveService = new GoogleDriveService();

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
            $publicUrl = $driveService->upload($file);
        
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

    // OTP
    $otp = rand(10000, 99999);
    $email = $request->email;
    $name = $request->name;

    session([
        'model_otp' => $otp,
        'model_email' => $email,
        'model_id' => $model->id,
    ]);

    Mail::to($email)->send(new ModelVerificationMail($name, $otp));

    return redirect()->route('verification.email')
        ->with('success', 'A verification code was sent to your email.');
}



    // private function getClient()
    // {
    //     $client = new Client();
    //     $client->setAuthConfig(storage_path('app/google/client_secret.json'));
    //     $client->addScope(Drive::DRIVE_FILE);
    //     $client->setAccessType('offline');
    //     $client->setPrompt('select_account consent');
    //     $client->setRedirectUri(url('/google/callback'));
    //     return $client;
    // }

    // public function authenticate()
    // {
    //     $client = $this->getClient();
    //     return redirect($client->createAuthUrl());
    // }

    // public function callback(Request $request)
    // {
    //     $client = $this->getClient();
    //     $code = $request->get('code');

    //     if ($code) {
    //         $token = $client->fetchAccessTokenWithAuthCode($code);
    //         session(['google_token' => $token]);

    //         // ✅ Resume pending upload if exists
    //         if (session('resume_upload')) {
    //             return redirect()->route('model.upload.resume');
    //         }

    //         return redirect('/google/upload-form')->with('success', 'Google Drive connected!');
    //     }

    //     return redirect('/google/auth')->with('error', 'Authorization failed.');
    // }

    // public function resumeUpload()
    // {
    //     $formData = session('pending_form_data');
    //     $fileData = session('pending_files');

    //     if (!$formData) {
    //         return redirect()->back()->with('error', 'No pending upload found.');
    //     }

    //     // Rebuild the Request manually
    //     $request = new \Illuminate\Http\Request();
    //     $request->replace($formData);

    //     // Attach files back to the Request
    //     foreach ($fileData as $key => $path) {
    //         $fullPath = storage_path('app/' . $path);

    //         if (!file_exists($fullPath)) {
    //             continue; // Skip missing files
    //         }

    //         if (is_array($path)) {
    //             foreach ($path as $index => $p) {
    //                 $pFull = storage_path('app/' . $p);
    //                 if (!file_exists($pFull))
    //                     continue;

    //                 $file = new \Illuminate\Http\UploadedFile(
    //                     $pFull,
    //                     basename($pFull),
    //                     null,
    //                     null,
    //                     true
    //                 );
    //                 $request->files->set($key . '.' . $index, $file);
    //             }
    //         } else {
    //             $file = new \Illuminate\Http\UploadedFile(
    //                 $fullPath,
    //                 basename($fullPath),
    //                 null,
    //                 null,
    //                 true
    //             );
    //             $request->files->set($key, $file);
    //         }
    //     }


    //     // ✅ Call your original store logic again
    //     session()->forget(['pending_form_data', 'pending_files', 'resume_upload']);
    //     return $this->store($request);
    // }


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
        $userRole = auth()->user()->role ?? null;


        $tempFolder = storage_path('app/public/pdf_images');
        if (!file_exists($tempFolder)) {
            mkdir($tempFolder, 0777, true);
        }


        $tempImages = [];

        foreach ($model->assets as $asset) {
            if ($asset->type === 'image') {
                // Extract file ID from Google Drive URL
                preg_match('/\/d\/(.*?)\//', $asset->url, $matches);
                $fileId = $matches[1] ?? null;
                if ($fileId) {
                    $ext = pathinfo($asset->original_name, PATHINFO_EXTENSION) ?? 'jpg';
                    $tempFileName = $fileId . '.' . $ext;
                    $tempFilePath = $tempFolder . '/' . $tempFileName;

                    // Download image if it does not exist
                    if (!file_exists($tempFilePath)) {
                        $response = Http::get("https://drive.google.com/uc?export=download&id={$fileId}");
                        file_put_contents($tempFilePath, $response->body());
                    }

                    // Store the temporary path for use in Blade
                    $tempImages[$asset->name] = $tempFilePath;
                }
            }
        }


        $pdf = PDF::loadView('dashboard.components.pdf', [
            'model' => $model,
            'userRole' => $userRole,
            'tempImages' => $tempImages
        ])->setPaper('a4', 'portrait');


        $pdfContent = $pdf->output();

        foreach ($tempImages as $path) {
            if (file_exists($path)) {
                unlink($path);
            }
        }

        return response()->streamDownload(
            fn() => print ($pdfContent),
            $model->name . '_request.pdf'
        );
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
            'signature_image' => 'nullable|file|mimes:jpg,jpeg,png',
            'video' => 'nullable|file|mimes:mp4,avi,mov',
        ]);

        // Update profile data
        $model->update(collect($data)->except([
            'close_up_image',
            'full_body_image',
            'half_body_image',
            'side_body_image',
            'signature_image',
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
