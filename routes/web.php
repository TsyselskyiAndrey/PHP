<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, "Read"])
->name('task.read');
Route::get('/create', [HomeController::class, 'create'])
->name('task.create');
Route::post('/create', [HomeController::class, 'assistant_create'])
->name('home.assistant_create');
Route::get('/update/{id}', [HomeController::class, 'update']);
Route::post('/update/{id}', [HomeController::class, 'assistant_update'])->name('task.assistant_update');
Route::get('/delete/{id}', [HomeController::class, 'delete']);
Route::post('/delete/{id}', [HomeController::class, 'assistant_delete'])->name('task.assistant_delete');
