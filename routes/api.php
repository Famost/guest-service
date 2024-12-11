<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GuestController;

Route::get('/',         [GuestController::class, 'index']); // Получить всех гостей
Route::post('/',        [GuestController::class, 'store']); // Создать нового гостя
Route::get('/{id}',     [GuestController::class, 'show']); // Получить гостя по ID
Route::patch('/{id}',   [GuestController::class, 'update']); // Обновить гостя по ID
Route::delete('/{id}',  [GuestController::class, 'destroy']); // Удалить гостя по ID
