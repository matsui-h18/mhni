<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BackToStartController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/support', function () {
    return view('support');
})->middleware(['auth'])->name('support');

Route::get('/general', function () {
    return view('general');
})->middleware(['auth'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/my-login', [AuthenticatedSessionController::class, 'store'])->name('my-login');

Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

Route::get('/back-to-start', [BackToStartController::class, 'redirect'])
    ->middleware('auth')
    ->name('back.to.start');

require __DIR__.'/auth.php';
