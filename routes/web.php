<?php

use Illuminate\Support\Facades\Route;
// Import the UserController
use App\Http\Controllers\UserController;

// for signup
use App\Http\Controllers\SignupController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    return view('home');
});

// short way to view a page
Route::view('about', 'about');

// pass variable to view
Route::view('contact/{name}', 'contact');

Route::get('user', [UserController::class, 'user']);

// This route will accept a parameter and pass it to the controller
// Route::get('user/{name}', [UserController::class, 'userName']);

// This route will accept a parameter and pass it to the controller
Route::get('user/{name}', [UserController::class, 'view']);

// Signup-From 
Route::view('signup', 'signup-from');
Route::post('getuserdata', [SignupController::class, 'getUserData']);