<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ModelProfileController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\ModelVerificationMail;
use App\Http\Controllers\Auth\OtpVerificationController;
use Illuminate\Http\Request;
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {
    return redirect()->route('login');
});
Route::get('/home', [DashboardController::class, 'index'])->name('home');
//REQUEST
Route::get('/new-request', [DashboardController::class, 'Request'])->name('new-request');
Route::get('/new-request/{id}', [DashboardController::class, 'show']);


//Route::get('/hold-request', [DashboardController::class, 'holdRequest'])->name('hold-request');
//Route::get('/approved-request', [DashboardController::class, 'approvedRequest'])->name('approved-request');
//Route::get('/rejected-request', [DashboardController::class, 'rejectedRequest'])->name('rejected-request');

Route::resource('users', UserController::class);


Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile/create', [ProfileController::class, 'create'])->name('profile.create');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('roles', RoleController::class);

    Route::get('/pending-request', [ModelProfileController::class, 'pendingRequest'])->name('models.pending-request');
    Route::get('/on-hold-request', [ModelProfileController::class, 'onHoldRequest'])->name('models.hold-request');
    Route::get('/approved-request', [ModelProfileController::class, 'approvedRequest'])->name('models.approved-request');
    Route::get('/rejected-request', [ModelProfileController::class, 'rejectedRequest'])->name('models.rejected-request');
    Route::get('/new-request', [ModelProfileController::class, 'newRequest'])->name('models.new-request');

    Route::get('/requests/{id}/download-pdf', [ModelProfileController::class, 'downloadPDF'])->name('requests.download-pdf');

});
Route::get('/latest-models', [ModelProfileController::class, 'getLatestModels'])->name('latest.models');



Route::get('/model/register', [ModelProfileController::class, 'create'])->name('models.create');
Route::post('/model/register', [ModelProfileController::class, 'store'])->name('models.store');
Route::get('/models/{id}', [ModelProfileController::class, 'show'])->name('models.show');
Route::post('/models/{id}/update-status', [ModelProfileController::class, 'updateStatus'])
    ->name('models.update-status');
Route::get('/models/{model}/edit', [ModelProfileController::class, 'edit'])->name('models.edit');
Route::put('/models/{model}', [ModelProfileController::class, 'update'])->name('models.update');
Route::delete('/models/{model}', [ModelProfileController::class, 'destroy'])->name('models.destroy');
Route::get('/download/cnic/{id}', [ModelProfileController::class, 'cnic']);
Route::get('/download/images/{id}', [ModelProfileController::class, 'images']);
Route::get('/download/video/{id}', [ModelProfileController::class, 'video']);


Route::get('/verify-otp', [OtpVerificationController::class, 'showForm'])
    ->name('verification.email')
    ->withoutMiddleware('auth');

Route::post('/verify-otp', [OtpVerificationController::class, 'verify'])
    ->name('verify.otp')
    ->withoutMiddleware('auth');



// ✅ Resend OTP Route
Route::get('/resend-otp', function () {
    $user = auth()->user();
    $otp = rand(10000, 99999);

    // Save OTP temporarily in session
    session(['otp' => $otp]);

    // Send email
    Mail::to($user->email)->send(new ModelVerificationMail($user->name, $otp));

    return back()->with('success', 'A new OTP has been sent to your email.');
})->name('resend.otp');


require __DIR__ . '/auth.php';
