<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend/home');
});

Route::get('/login', function () {
    return view('frontend/login');
});

Route::get('/register', function () {
    return view('frontend/register');
});

//Login and register route
Route::post('/register', 'App\Http\Controllers\Auth\UserController@register')->name('register');
Route::post('/login', 'App\Http\Controllers\Auth\UserController@login')->name('login');;

