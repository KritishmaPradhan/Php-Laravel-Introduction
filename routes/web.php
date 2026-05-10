<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/home', function () {
    return view('welcome');
});

Route::post('/formdata', function () {
    return view('formdata');
});

Route::get('/', [UserController::class, 'index']);
Route::get('/about', [UserController::class, 'about']);
Route::get('/users', [UserController::class, 'users']);