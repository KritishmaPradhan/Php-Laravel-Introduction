<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FacultyInfoController;
use App\Http\Controllers\ProfileController;

require __DIR__.'/auth.php';

/*
| Public Routes
*/

Route::get('/', [UserController::class, 'index']);
Route::get('/contact', [UserController::class, 'contact']);
Route::get('/about', [UserController::class, 'about']);
Route::post('/formdata', function () {
    return view('formdata');
});
Route::get('/modeldatastudent', [UserController::class, 'model_student_data']);

/*
| Auth Routes (Breeze)
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

/*
| Protected Routes
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
| Resource Routes
*/

Route::resource('category', FacultyInfoController::class)
    ->parameters([
        'category' => 'facultyInfo'
    ]);