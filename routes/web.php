<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('public.home');
});

// 1. Rute untuk User Biasa & Admin (Login Required)
Route::middleware(['auth', 'verified'])->group(function () {
    
    // Dashboard standar (Breeze)
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Rute Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // 2. PROTEKSI KHUSUS ADMIN (Hanya is_admin = 1)
    Route::middleware(['admin'])->prefix('admin')->group(function () {
        
        // Halaman Utama Admin
        Route::get('/', function () {
            $userCount = \App\Models\User::whereMonth('created_at', now()->month)->count();
            return view('admin.dashboard', compact('userCount'));
        })->name('admin.dashboard');

        // news
        Route::resource('news', \App\Http\Controllers\NewsController::class);


        // CATEGORIES (Sudah di dalam prefix admin)
        Route::resource('categories', CategoryController::class);

        // USER MANAGEMENT (Resourceful)
        Route::resource('user-management', UserController::class)->names('user');

        // ================= DUMMY SIDEBAR =================
        Route::name('pages.')->group(function () {
            Route::get('/tables', fn() => redirect()->route('admin.dashboard'))->name('tables');
            Route::get('/icons', fn() => redirect()->route('admin.dashboard'))->name('icons');
            Route::get('/maps', fn() => redirect()->route('admin.dashboard'))->name('maps');
            Route::get('/notifications', fn() => redirect()->route('admin.dashboard'))->name('notifications');
            Route::get('/rtl', fn() => redirect()->route('admin.dashboard'))->name('rtl');
            Route::get('/typography', fn() => redirect()->route('admin.dashboard'))->name('typography');
            Route::get('/upgrade', fn() => redirect()->route('admin.dashboard'))->name('upgrade');
        });

        Route::get('/home', fn() => redirect()->route('admin.dashboard'))->name('home');
    }); // Penutup group admin
}); // Penutup group auth

require __DIR__.'/auth.php';