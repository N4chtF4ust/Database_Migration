<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index'])->name('todo');
Route::post('/todo', [TodoController::class, 'store']);
Route::delete('/todo/{todo}', [TodoController::class, 'del']) -> name('todo.del') ;
