<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

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

// ?---------------Home Page---------------------
Route::get('/', function () {
    return view('index');
});

// ?------------------About Page----------------
Route::get('/about', function () {
    return view('about');
});

// ?---------------------Contact Page-----------------
Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact',[MailController::class,'mailsend']);

// ?-------------------Courses Page-------------------
Route::get('/courses', function () {
    return view('courses');
});


// ?------------------Apply Page---------------------
Route::get('/apply', function () {
    return view('apply');
});

// ?---------------Login Page----------------------
Route::get('/login', function () {
    return view('login');
});

// ?---------------Signup Page----------------------
Route::get('/signup', function () {
    return view('signup');
});

// ?-------------------Media Page-------------------
Route::get('/media', 'App\Http\Controllers\PhotosController@create');

// ?------------------Upload Page (Media)------------
Route::view('upload','upload');
Route::post('upload','App\Http\Controllers\PhotosController@store');

