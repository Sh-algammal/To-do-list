<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::resource('todos', TodoController::class);

Route::get('/', [TodoController::class, 'index'])->name('home');

Route::put('/todos/{todo}/status', [TodoController::class, 'updateTodoStatus'])->name('todos.status');