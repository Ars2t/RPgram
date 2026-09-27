<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;

Route::get('/', [MessageController::class, 'index'])->name('index');
Route::get('/create', [MessageController::class, 'create'])->name('create');
Route::post('/room/store', [MessageController::class, 'roomStore'])->name('roomStore');
Route::get('/room/{id}', [MessageController::class, 'show'])->name('show');
Route::post('/message/store/{id}', [MessageController::class, 'messageStore'])->name('messageStore');