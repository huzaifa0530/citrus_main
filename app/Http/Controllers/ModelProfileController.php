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
use App\Services\WhatsAppService;
use Illuminate\Support\Facades\Http;
use App\Models\WhatsappMessage;
use ZipArchive;

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


        $staticNumber = "03422112090";

        // Convert to international format (Pakistan example)
        if (str_starts_with($staticNumber, '0')) {
            $staticNumber = '+92' . substr($staticNumber, 1);
        }

        // Default message (optional)
        $message = "Hello {$model->name}, your profile has been successfully created!";

        // If status changed to APPROVED → send approval message
        if ($oldStatus !== $newStatus && $newStatus === 'approved') {
            $message = "Hello {$model->name}, your profile has been *approved*. Congratulations! you can contact use in 03002425235";

            // ✅ Save message in DB BEFORE sending
            $whatsappMessage = WhatsappMessage::create([
                'model_profile_id' => $model->id,
                'mobile_no' => $model->mobile_no,
                'message' => $message,
                'status' => $newStatus,
            ]);



        }

        // Send WhatsApp message
        try {
            $this->whatsAppService->sendProfileApprovedTemplate($staticNumber, $model->name);
            Log::info("WhatsApp message sent", [
                'message_id' => $whatsappMessage->id,
                'mobile' => $model->mobile_no
            ]);
        } catch (\Exception $e) {
            Log::error("Failed to send WhatsApp message: " . $e->getMessage());
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
        $data = $request->validate(
            [
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
                'availability' => 'nullable|string|max:255',



                // files
                'close_up_image' => 'nullable|file|mimes:jpg,jpeg,png|max:5120',
                'full_body_image' => 'nullable|file|mimes:jpg,jpeg,png|max:5120',
                'half_body_image' => 'nullable|file|mimes:jpg,jpeg,png|max:5120',
                'side_body_image' => 'nullable|file|mimes:jpg,jpeg,png|max:5120',
                'signature_image' => 'nullable|file|mimes:jpg,jpeg,png|max:5120',
                'cnic_front' => 'nullable|file|mimes:jpg,jpeg,png|max:5120',
                'cnic_back' => 'nullable|file|mimes:jpg,jpeg,png|max:5120',
                'video' => 'nullable|file|mimes:mp4,avi,mov|max:10240',
            ],
            [
                'close_up_image.max' => 'Close up image must not exceed 5 MB.',
                'full_body_image.max' => 'Full body image must not exceed 5 MB.',
                'half_body_image.max' => 'Mid shot image must not exceed 5 MB.',
                'side_body_image.max' => 'Side profile image must not exceed 5 MB.',
                'cnic_front.max' => 'CNIC front image must not exceed 5 MB.',
                'cnic_back.max' => 'CNIC back image must not exceed 5 MB.',
                'video.max' => 'Video must not exceed 10 MB.',
            ]
        );

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
            'signature_image',
            'video',
        ])->toArray();

        $modelData['status'] = 'pending';
        $model = ModelProfile::create($modelData);


        $fileFields = [
            'close_up_image',
            'full_body_image',
            'half_body_image',
            'side_body_image',
            'signature_image',
            'video',
            'cnic_front',
            'cnic_back',
        ];



        foreach ($fileFields as $field) {
            if ($request->hasFile($field)) {

                $file = $request->file($field);

                // folder per model
                $folder = 'models/' . $model->id;

                // store file
                $path = $file->store($folder, 'public');

                // public url
                $url = Storage::disk('public')->url($path);

                $mime = $file->getClientMimeType();
                $type = Str::startsWith($mime, 'video') ? 'video' : 'image';

                $model->assets()->create([
                    'name' => $field,
                    'path' => $path,              // storage path
                    'url' => $url,                // public URL
                    'type' => $type,
                    'mime_type' => $mime,
                    'size' => $file->getSize(),
                    'disk' => 'public',           // 👈 IMPORTANT
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

        // Folder for temporary PDF images (optional, can skip if using storage path directly)
        $tempFolder = storage_path('app/public/pdf_images');
        if (!file_exists($tempFolder)) {
            mkdir($tempFolder, 0777, true);
        }

        $tempImages = [];

        foreach ($model->assets as $asset) {
            if ($asset->type === 'image' && file_exists(storage_path('app/public/' . $asset->path))) {
                // Store the local file path for Blade
                $tempImages[$asset->name] = storage_path('app/public/' . $asset->path);
            }
        }

        // Generate PDF
        $pdf = PDF::loadView('dashboard.components.pdf', [
            'model' => $model,
            'userRole' => $userRole,
            'tempImages' => $tempImages
        ])->setPaper('a4', 'portrait');

        $pdfContent = $pdf->output();

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


    public function cnic($id)
    {
        $model = ModelProfile::with('assets')->findOrFail($id);

        $zip = new ZipArchive;
        $fileName = "cnic_{$id}.zip";
        $zipPath = storage_path("app/public/$fileName");

        if ($zip->open($zipPath, ZipArchive::CREATE) === true) {
            foreach ($model->assets as $asset) {
                if (in_array($asset->name, ['cnic_front', 'cnic_back'])) {
                    $zip->addFile(
                        storage_path("app/public/{$asset->path}"),
                        basename($asset->path)
                    );
                }
            }
            $zip->close();
        }

        return response()->download($zipPath)->deleteFileAfterSend(true);
    }
    public function images($id)
    {
        $model = ModelProfile::with('assets')->findOrFail($id);

        $zip = new ZipArchive;
        $fileName = "images_{$id}.zip";
        $zipPath = storage_path("app/public/$fileName");

        if ($zip->open($zipPath, ZipArchive::CREATE) === true) {
            foreach ($model->assets as $asset) {
                if ($asset->type === 'image' && !in_array($asset->name, ['cnic_front', 'cnic_back'])) {
                    $zip->addFile(
                        storage_path("app/public/{$asset->path}"),
                        basename($asset->path)
                    );
                }
            }
            $zip->close();
        }

        return response()->download($zipPath)->deleteFileAfterSend(true);
    }
    public function video($id)
    {
        $model = ModelProfile::with('assets')->findOrFail($id);
        $video = $model->assets->firstWhere('type', 'video');

        abort_if(!$video, 404);

        return response()->download(
            storage_path("app/public/{$video->path}")
        );
    }

}
