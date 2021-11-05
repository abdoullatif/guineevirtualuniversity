<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/study', function () {
    return view('study');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/mysubjects', function () {
    return view('mysubjects');
});

Route::get('/mycourses', function () {
    return view('mycourses');
});

Route::get('/course', function () {
    return view('course');
});

Route::get('/discutions', function () {
    return view('discutions');
});

Route::get('/calendrier', function () {
    return view('calendrier');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/university', function () {
    return view('university');
});