<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [ProfileController::class, 'show'])->middleware(['auth'])->name('dashboard');

Route::middleware(['auth','isAdmin'])->group(function () {
    Route::get('/users-painel', [AdminController::class,'show'])->name('admin.show');
    Route::get('/user-web-sites/{id}', [AdminController::class,'show_user_sites'])->name('user-web-sites');

    Route::post('/user-web-sites-change-status/{id}', [SiteController::class,'change_status'])->name('change_status_site');
});
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/site-creator', [SiteController::class, 'show'])->name('site-creator.show');
    Route::post('/site-creator', [SiteController::class, 'create'])->name('site-creator.show');
});

require __DIR__.'/auth.php';
