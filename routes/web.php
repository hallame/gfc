<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;


 // FRONT PUBLIC
Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/teachings', [UserController::class, 'teachings'])->name('teachings.index');
Route::get('/videos', [UserController::class, 'videos'])->name('videos.index');
Route::get('/posts', [UserController::class, 'posts'])->name('posts.index');
Route::get('/events', [UserController::class, 'events'])->name('events.index');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');



// Route::prefix('admin')->name('admin.')->group(function () {
//         Route::get('/login', [AdminAuthController::class, 'login'])->name('login');
//         Route::post('/access', [AdminAuthController::class, 'access'])->name('access');
//         Route::post('/forgot-password', [AdminAuthController::class, 'sendResetLink'])->name('forgot-password.send');
//         Route::get('/reset-password/{token}', [AdminAuthController::class, 'showResetPasswordForm'])->name('reset-password');
//         Route::post('/reset-password', [AdminAuthController::class, 'resetPassword'])->name('reset-password.update');


//     // connectés admin
//     Route::middleware('admin.auth')->group(function () {
//         Route::get('/logout', [AdminAuthController::class, 'logout'])->name('logout');
//         Route::get('/myprofile', [AdminAuthController::class, 'myprofile'])->name('myprofile');
//         Route::post('/myprofile/update', [AdminAuthController::class, 'updateMyProfile'])->name('myprofile.update');
//         Route::view('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
//     });
// });
