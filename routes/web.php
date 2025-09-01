<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Project\InventoryController;
use App\Http\Controllers\Project\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // UMKM Routes
    Route::resource('product', ProductController::class);
    Route::resource('inventory', InventoryController::class);
});

require __DIR__ . '/auth.php';
