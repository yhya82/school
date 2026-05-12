<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\MarkController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
    Route::resource('users', UserController::class);
    Route::resource('subjects', SubjectController::class);
    Route::resource('classes',ClassController::class);
    Route::get('/teachers',[TeacherController::class, 'index'])->name('teachers.index');
    Route::get('/users/{user}/teacher/create', [TeacherController::class, 'create'])->name('teachers.create');
    Route::post('/users/{user}/teacher',[TeacherController::class, 'store'])->name('teachers.store');
    Route::get('/teachers/{teacher}',[TeacherController::class, 'show'])->name('teachers.show');
    Route::get('/teachers/{teacher}/edit',[TeacherController::class, 'edit'])->name('teachers.edit');
    Route::put('/teachers/{teacher}',[TeacherController::class, 'update'])->name('teachers.update');
    Route::delete('/teachers/{teacher}',[TeacherController::class, 'destroy'])->name('teachers.delete');

    Route::get('/students', [StudentController::class, 'index'])->name('students.index');
    Route::get('/users/{user}/student/create',[StudentController::class, 'create'])->name('students.create');
    Route::post('/users/{user}/student', [StudentController::class, 'store'])->name('students.store');
    Route::get('/students/{student}',[StudentController::class, 'show'])->name('students.show');
    Route::get('/students/{student}/edit',[StudentController::class, 'edit'])->name('students.edit');
    Route::put('/students/{student}',[StudentController::class, 'update'])->name('students.update');
    Route::delete('/students/{student}',[StudentController::class, 'destroy'])->name('students.delete');
    
    Route::get('/marks',[MarkController::class, 'index'])->name('mark.index');
    Route::get('/students/{student}/mark/create',[MarkController::class, 'create'])->name('mark.create');
    Route::post('/student/{student}/mark',[MarkController::class, 'store'])->name('mark.store');
    Route::get('/marks/{mark}/edit',[MarkController::class, 'edit'])->name('mark.edit');
    Route::get('/marks/{mark}',[MarkController::class, 'show'])->name('mark.show');
    Route::put('/marks/{mark}',[MarkController::class, 'update'])->name('mark.update');
    Route::delete('/marks/{mark}',[MarkController::class, 'delete'])->name('mark.delete');
});

require __DIR__.'/auth.php';
