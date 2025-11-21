<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UzenetController;
use App\Http\Controllers\PilotaCrudController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DiagramController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/fooldal', [HomeController::class, 'fooldal'])->name('fooldal');

Route::get('/adatbazis', [DatabaseController::class, 'index'])->name('adatbazis');

Route::get('/kapcsolat', [ContactController::class, 'create'])->name('kapcsolat');
Route::post('/kapcsolat', [ContactController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/uzenetek', [UzenetController::class, 'index'])->name('uzenetek');

    // Diagram menü
    Route::get('/diagram', [DiagramController::class, 'index'])->name('diagram');

    // CRUD Pilota
    Route::get('/crud', [PilotaCrudController::class, 'index'])->name('pilotak.index');
    Route::get('/crud/create', [PilotaCrudController::class, 'create'])->name('pilotak.create');
    Route::post('/crud', [PilotaCrudController::class, 'store'])->name('pilotak.store');
    Route::get('/crud/{pilota}/edit', [PilotaCrudController::class, 'edit'])->name('pilotak.edit');
    Route::put('/crud/{pilota}', [PilotaCrudController::class, 'update'])->name('pilotak.update');
    Route::delete('/crud/{pilota}', [PilotaCrudController::class, 'destroy'])->name('pilotak.destroy');
});

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest');

// Admin menü
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
});
