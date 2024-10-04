<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, "Read"])
->name('task.read');
Route::get('/create', [HomeController::class, 'create'])->middleware(['auth', 'verified'])
->name('task.create');
Route::post('/create', [HomeController::class, 'assistant_create'])
->name('home.assistant_create');

Route::get('/update/{id}', [HomeController::class, 'update'])->middleware(['auth', 'verified']);
Route::post('/update/{id}', [HomeController::class, 'assistant_update'])->name('task.assistant_update');
Route::get('/delete/{id}', [HomeController::class, 'delete'])->middleware(['auth', 'verified']);
Route::post('/delete/{id}', [HomeController::class, 'assistant_delete'])->name('task.assistant_delete');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
