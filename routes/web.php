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

// ?-------------Clear Cache--------------
Route::get('/clear-cache',function(){
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('config:cache');
    return 'Everything cleared boss!';
});


// ?---------------Home Page---------------------
Route::get('/','App\Http\Controllers\HomeController@index');

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
Route::post('/login','App\Http\Controllers\UsersController@login');

// ?---------------Signup Page----------------------
Route::get('/signup', function () {
    return view('signup');
});
Route::post('/signup','App\Http\Controllers\UsersController@signup');

// ?------------------Logout Action-------------------
Route::get('logout','App\Http\Controllers\UsersController@logout');

// ?-------------------Media Page-------------------
Route::get('/media', 'App\Http\Controllers\PhotosController@create');

// ?------------------Upload Page (Media)------------
Route::view('upload','upload');
Route::post('upload','App\Http\Controllers\PhotosController@store');


/**
 * ---------------------------------------------------------------------------
 *   Admin Pages
 * ---------------------------------------------------------------------------
 *
 * The pages below are related to administrative personnel
 *
 */

// ?---------------Admin Login Page--------------------
Route::view('admin-log','adminlogin');
Route::post('admin-log','App\Http\Controllers\AdminController@login');

// todo:--------------------Admin Add (temp)---------------------
Route::view('admin-add','adminadd');
Route::post('admin-add','App\Http\Controllers\AdminController@add');

// ?-----------------Admin Dashbaord------------------
Route::get('admindash','App\Http\Controllers\AdminController@show');

// ?-----------------Admin Courses Page-------------
Route::view('admindash-courses','admincourses');

// ?-----------------Admin Courses Add Page--------------
Route::view('admindash-courses-add','admincourses_add');

// ?-----------------Admin Courses Info Page---------------
Route::view('admindash-courses-info','admincourses_info');

