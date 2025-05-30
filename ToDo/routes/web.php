<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\Configuration\GroupCollection;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('groups', GroupController::class);
Route::resource('students', StudentController::class);

// Для отображения формы создания студента внутри группы
Route::get('groups/{group}/students/create', [StudentController::class, 'create'])->name('students.create');

// Для сохранения нового студента
Route::post('groups/{group}/students', [StudentController::class, 'store'])->name('students.store');

// Для просмотра студента
Route::get('students/{student}', [StudentController::class, 'show'])->name('students.show');

// Route::get('groups/{group}', [StudentController::class, 'show'])->name('groups.show');


// Route::get('groups/{group}/students/create', [StudentController::class,'create'])->name('students.create');
// // Route::get('groups/{group}/', [StudentController::class,'store'])->name('students.store');
// Route::get('groups/{group}/students', [StudentController::class,'store'])->name('students.store');
// Route::post('groups/{group}/students', [StudentController::class,'store'])->name('students.store');
// Route::get('groups/{group}/students/{student}', [StudentController::class,'show'])->name('students.show');

// // Route::get('students/{student}', [StudentController::class, 'show'])->name('students.show');
// Route::get('students/{student}', [StudentController::class, 'show'])->name('students.show');