<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserInfoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserInfoController::class, 'index'])->name('users.index');

Route::get('/users/create', [UserInfoController::class, 'create'])->name('users.create');

Route::get('/users/{user}',[UserInfoController::class, 'show'])->name('users.show');

Route::post('/users', [UserInfoController::class, 'store'])->name('users.store');

Route::delete('/users/{user}',[UserInfoController::class, 'destroy'])->name('users.destroy');
