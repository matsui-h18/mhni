<?php

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BackToStartController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserAddLoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/admin/index2', function () {
    return view('admin/index2');
})->middleware(['auth'])->name('support');

Route::get('/normal/index', function () {
    return view('normal/index');
})->middleware(['auth'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/my-login', [AuthenticatedSessionController::class, 'store'])
    ->name('my-login');

Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

Route::get('/back-to-start', [BackToStartController::class, 'redirect'])
    ->middleware('auth')
    ->name('back.to.start');

Route::post('/management/users', [AdminUserController::class, 'store'])
    ->middleware('auth')->name('management.users.store');

Route::get('/user-add-login', [UserAddLoginController::class, 'showLoginForm'])
    ->name('user.add.login');
Route::post('/user-add-login', [UserAddLoginController::class, 'login']);

Route::get('/management/users', [AdminUserController::class, 'index'])
    ->middleware('auth')
    ->name('management.users.index');

Route::get('/management/users/create', [AdminUserController::class, 'create'])
    ->middleware('auth')
    ->name('management.users.create');

Route::delete('/management/users/{id}', [AdminUserController::class, 'destroy'])
    ->middleware('auth')
    ->name('management.users.destroy');

Route::get('/management/users/{id}/edit', [AdminUserController::class, 'edit'])
    ->middleware('auth')
    ->name('management.users.edit');
    
Route::put('/management/users/{id}', [AdminUserController::class, 'update'])
    ->middleware('auth')
    ->name('management.users.update');

require __DIR__ . '/auth.php';
