<?php

use Illuminate\Support\Facades\Route;

$controller_prefix = 'App\Http\Controllers\\';

// This is where you want to define your path
// and put appropriate middleware to protect your route
// we  want to prevent unauthenticate user to go to "/" route
// if you have more time
// craete a middleware to prevent authenticated user from "/login" and "/register"

Route::get('/', function () {
    //TODO
    return view('index');
})->middleware('auth');

Route::match(array('GET', 'POST'), 'login', $controller_prefix.'AuthController@login')->name('login');
Route::match(array('GET', 'POST'), 'register', $controller_prefix.'AuthController@register')->name('register');