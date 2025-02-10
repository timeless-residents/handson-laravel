<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\Api\TodoController as ApiTodoController;

Route::get('/', [TodoController::class, 'welcome']);

// 2. その後でリソースルートを定義
Route::resource('todos', TodoController::class);

// 3. 最後にAPIルートを定義

Route::prefix('api')->as('api.')->group(function () {
    Route::apiResource('todos', ApiTodoController::class);
});