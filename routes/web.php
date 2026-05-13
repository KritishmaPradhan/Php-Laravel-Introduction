<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FacultyInfoController;
use App\Models\FacultyInfo;

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/formdata', function () {
    return view('formdata');
});

Route::get('/', [UserController::class, 'index']);
Route::get('/about', [UserController::class, 'about']);
// Route::get('/users', [UserController::class, 'users']);
Route::get('/modeldatastudent', [UserController::class, 'model_student_data']);

// Route::bind('category', function ($value) {
//     return FacultyInfo::findOrFail($value);
// });

Route::resource('category', FacultyInfoController::class)
    ->parameters([
        'category' => 'facultyInfo'
    ]);