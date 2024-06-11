<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/students', function () {
    return ('This is your router api');
});

Route::get('student',[StudentController::class, 'index']);