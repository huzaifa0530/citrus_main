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


use Illuminate\Support\Facades\Log;

class ModelProfileController extends Controller
{
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

        // ✅ Only send email if a valid email exists and status actually changed
        if ($email && $oldStatus !== $newStatus) {
            try {
                Mail::to($email)->send(new ModelStatusChangedMail($model, $newStatus));
                Log::info("Status email sent successfully to {$email}");
            } catch (\Exception $e) {
                Log::error("Failed to send status update email: " . $e->getMessage());
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

        // 1) Create the profile (remove file keys)
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

        // 2) Save uploaded files as assets
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

                // store in public disk under models/YYYY/n/j
                $relativePath = $file->store(
                    'models/' . now()->format('Y/n/j'),
                    'public'
                );
                $url = Storage::url($relativePath);

                // determine type
                $mime = $file->getClientMimeType();
                $type = str_starts_with($mime, 'video') ? 'video' : 'image';

                // optional: image dimensions
                $width = $height = null;
                if ($type === 'image') {
                    try {
                        [$width, $height] = getimagesize($file->getRealPath());
                    } catch (\Throwable $e) {
                        $width = $height = null;
                    }
                }

                // create asset row
                $model->assets()->create([
                    'name' => $field, // same as input name
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

        $otp = rand(10000, 99999);
        $email = $request->email;
        $name = $request->name;


        session(['model_otp' => $otp, 'model_email' => $email, 'model_id' => $model->id,]);

        // Send email
        Mail::to($email)->send(new ModelVerificationMail($name, $otp));

        // Redirect to OTP page
        return redirect()->route('verification.notice')->with('success', 'A verification code was sent to your email.');
        // return redirect()
        //     ->route('models.index')
        //     ->with('success', 'Model profile created successfully.');
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

        $pdf = PDF::loadView('dashboard.pages.request.pdf', compact('model'))
            ->setPaper('a4', 'portrait');

        return $pdf->download($model->name . '_request.pdf');
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
