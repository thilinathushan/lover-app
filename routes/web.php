<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PartnerInfoController;
use App\Http\Controllers\ProposalController;
use App\Http\Controllers\ValentineController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', [ValentineController::class, 'index']);

Route::get('/auth/google', function () {
    return Socialite::driver('google')->redirect();
})->name('google.login');

Route::get('/auth/google/callback', function () {
    $googleUser = Socialite::driver('google')->user();

    $user = User::updateOrCreate(
        [
            'email' => $googleUser->getEmail(),
        ],
        [
            'name' => $googleUser->getName(),
            'google_id' => $googleUser->getId(),
            'password' => Hash::make('12345678'),
        ],
    );

    Auth::login($user);

    return redirect()->route('dashboard', ['userData' => $user]);
});

Route::post('/auth/google/logout', [DashboardController::class, 'signOut'])->name('google.logout');


Route::middleware(['auth'])->group(function () {
    Route::get('/personalize', [ProposalController::class, 'showPersonalizationForm'])->name('personalize');
    Route::post('/personalize', [ProposalController::class, 'storePersonalization']);
    Route::get('/cancel-personalize', [ProposalController::class, 'cancelPersonalization'])->name('cancel.personalize');

    Route::post('/partner-info/save', [PartnerInfoController::class, 'storePartnerInfo'])->name('partnerInfo.save');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/share-link', [DashboardController::class, 'shareLinkIndex'])->name('shareLink');
    Route::get('/view-response', [DashboardController::class, 'viewResponse'])->name('viewResponse');
});

Route::get('share/{token}', [DashboardController::class, 'wish'])->name('wish');
Route::get('love-letter/{token}', [DashboardController::class, 'partnerAccept'])->name('loveLetter');
Route::get('love-wish/{token}', [DashboardController::class, 'partnerLetter'])->name('loveWish');
Route::post('love-wish-store/{token}', [DashboardController::class, 'storePartnerWish'])->name('loveWish.store');
Route::get('share-platform/{token}', [DashboardController::class, 'sharePlatform'])->name('sharePlatform');

// Policies
Route::get('privacy-policy', [ValentineController::class, 'privacyPolicy'])->name('privacyPolicy');
Route::get('terms-of-service', [ValentineController::class, 'termsOfService'])->name('termsOfService');