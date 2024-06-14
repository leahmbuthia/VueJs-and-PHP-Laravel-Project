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
Route::post('api/users', [userController::class, 'store']);
Route::put('api/users/{user}', [userController::class, 'update']);
Route::delete('api/users/{user}', [userController::class, 'destory']);

Route::get('{view}', ApplicationController::class)->where('view', '(.*)');