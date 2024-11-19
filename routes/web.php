<?php

use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/course/users', [CourseController::class, 'getAllUsers']);
Route::get('/user-profile', [ProfileController::class, 'showAll']);
Route::get('/user/{id}/profile', [UserController::class, 'showProfile']);
Route::get('user/{id}/courses', [UserController::class, 'getAllCourses']);

