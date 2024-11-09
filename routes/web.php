<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/student',[StudentController::class,'getStudent'])->name('student.getStudent');
Route::post('/studentstore',[StudentController::class,'storeStudent'])->name('student.storeStudent');
Route::get('/student/create',[StudentController::class,'createStudent'])->name('student.createStudent');
Route::get('/student/{id}',[StudentController::class,'updateStudent'])->name('student.updateStudent');
Route::put('/student/{id}/update',[StudentController::class,'update'])->name('student.update');
Route::delete('/student/delete/{id}',[StudentController::class,'deleteStudent'])->name('student.deleteStudent');
