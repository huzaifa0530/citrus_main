<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\ModelProfile;
use App\Mail\ModelStatusMail;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
class OtpVerificationController extends Controller
{
    /**
     * Show the verify email OTP form.
     */
    public function showForm()
    {
        return view('auth.verify-email');
    }

    /**
     * Verify the OTP entered by the user.
     */
    public function verify(Request $request)
    {
        $enteredOtp = is_array($request->otp) ? implode('', $request->otp) : $request->otp;
        $sessionOtp = session('model_otp');
        $sessionEmail = session('model_email');

        Log::info('OTP verification attempt', compact('enteredOtp', 'sessionOtp', 'sessionEmail'));

        if ($enteredOtp == $sessionOtp && $sessionEmail) {
            $user = User::where('email', $sessionEmail)->first();
            $modelId = session('model_id');
            $modelProfile = ModelProfile::find($modelId);

            if ($user) {
                if (is_null($user->email_verified_at)) {
                    $user->email_verified_at = now();
                    $saved = $user->save();

                    Log::info('Email verification updated', [
                        'user_id' => $user->id,
                        'email' => $user->email,
                        'saved' => $saved,
                        'email_verified_at' => $user->email_verified_at,
                    ]);
                }
                if ($modelProfile) {
                    $modelProfile->status = 'new-request';
                    $modelProfile->save();
                    if ($user && $user->email) {
                        Mail::to($user->email)->send(new ModelStatusMail($user->name, 'new-request'));
                    }

                    Log::info('Model status updated', [
                        'model_id' => $modelProfile->id,
                        'status' => $modelProfile->status,
                             'email' => $user->email,
                    ]);
                }

                session()->forget(['model_otp', 'model_email', 'model_id']);

                return redirect()->route('dashboard')->with('success', 'Email verified successfully!');
            }

            return back()->withErrors(['otp' => 'User not found.']);
        }

        Log::warning('OTP mismatch or session expired', compact('enteredOtp', 'sessionOtp', 'sessionEmail'));

        return back()->withErrors(['otp' => 'Invalid OTP. Please try again.']);
    }

}
