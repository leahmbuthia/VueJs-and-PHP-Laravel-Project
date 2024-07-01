<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', [StudentController::class, 'index']);
Route::post('/student/create', [StudentController::class, 'store']);
Route::put('/student/edit/{id}', [StudentController::class, 'edit']);
Route::put('/student/delete/{id}', [StudentController::class, 'delete']);

