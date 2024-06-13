<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\Admin\userController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/admin/dashboard', function () {
//     return view('dashboard');
// });
Route::get('api/users', [userController::class, 'index']);

Route::get('{view}', ApplicationController::class)->where('view', '(.*)');