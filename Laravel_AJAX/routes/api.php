<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\CommentController;

// Маршрут для получения списка всех постов
Route::get('/posts', [ApiController::class, 'index']);
// ApiController::class - указывает на контроллер ApiController
// 'index' - метод контроллера, который будет вызываться при запросе

// Маршрут для создания нового поста
Route::post('/posts', [ApiController::class, 'store']);

// Маршрут для получения информации о конкретном посте
Route::get('/posts/{id}', [ApiController::class, 'show']);
// {id} - параметр в URL, который передается в метод show

// Маршрут для обновления информации о посте
Route::put('/posts/{id}', [ApiController::class, 'update']);

// Маршрут для удаления поста
Route::delete('/posts/{id}', [ApiController::class, 'destroy']);

// Маршрут для создания комментария к посту
Route::post('/posts/{id}/comments', [CommentController::class, 'store']);

// Маршрут для получения комментариев к конкретному посту
Route::get('/posts/{id}/comments', [CommentController::class, 'index']);

// Маршрут для обновления информации о комментарии
Route::put('/comments/{commentId}', [CommentController::class, 'update']);

// Маршрут для удаления комментария
Route::delete('/comments/{commentId}', [CommentController::class, 'destroy']);
Route::post('/login', 'AuthController@login');
Route::post('/register', 'AuthController@register');
