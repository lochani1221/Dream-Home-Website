<?php

use Illuminate\Support\Facades\Route;

// Landing Page
Route::get('/', function () {
    return view('landing');
})->name('landing');

// Admin Dashboard
Route::get('/admin/dashboard', function () {
    $user = auth()->user();
    if (!$user || $user->role !== 'admin') {
        abort(403); // Forbidden if not admin
    }
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('admin.dashboard');

// User Dashboard
Route::get('/user/dashboard', function () {
    $user = auth()->user();
    if (!$user || $user->role !== 'user') {
        abort(403); // Forbidden if not a normal user
    }
    return view('user.dashboard');
})->middleware(['auth', 'verified'])->name('user.dashboard');
