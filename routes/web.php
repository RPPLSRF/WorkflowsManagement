<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\LeftController;
use App\Http\Controllers\NotificationController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('departments', DepartmentController::class);
    Route::resource('missions', MissionController::class);
    Route::resource('lefts', LeftController::class);
    Route::resource('notifications', NotificationController::class);
});

