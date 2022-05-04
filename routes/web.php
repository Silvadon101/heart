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
// Route::get('/clear-cache',function(){
//     $exitCode = Artisan::call('cache:clear');
//     $exitCode = Artisan::call('config:cache');
//     return 'Everything cleared boss!';
// });


// ?---------------Home Page---------------------
Route::get('/',[App\Http\Controllers\HomeController::class,'index']);

// ?------------------About Page----------------
Route::get('/about', function () {
    return view('pages.about');
});

// ?---------------------Contact Page-----------------
Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/contact',[MailController::class,'mailsend']);

// ?-------------------Courses Page-------------------
Route::get('/courses', function () {
    return view('pages.courses');
});

// ?------------------Apply Page---------------------
Route::get('/apply', function () {
    return view('pages.apply');
});

// ?---------------Login Page----------------------
Route::get('/login', function () {
    return view('auth.user_login');
});
Route::post('/login',[App\Http\Controllers\UsersController::class,'login']);

// ?---------------Signup Page----------------------
Route::get('/signup', function () {
    return view('auth.signup');
});
Route::post('/signup',[App\Http\Controllers\UsersController::class,'signup']);

// ?------------------Logout Action-------------------
Route::get('logout',[App\Http\Controllers\UsersController::class,'logout']);

// ?-------------------Media Page-------------------
Route::get('/media', [App\Http\Controllers\PhotosController::class,'create']);

// ?------------------Upload Page (Media)------------
Route::view('upload','test.upload');
Route::post('upload',[App\Http\Controllers\PhotosController::class,'store']);


/**
 * ---------------------------------------------------------------------------
 *   Admin Pages
 * ---------------------------------------------------------------------------
 *
 * The pages below are related to administrative personnel
 *
 */

// ?---------------Admin Login Page--------------------
Route::view('admin-log','admin.adminlogin')->name('admin.login');
Route::post('admin-log',[App\Http\Controllers\Admin\AdminController::class,'login']);

// todo:--------------------Admin Add (temp)---------------------
Route::view('admin-add','admin.adminadd')->name('admin.add');
Route::post('admin-add',[App\Http\Controllers\Admin\AdminController::class,'add']);

// ?-----------------Admin Dashbaord------------------
Route::get('admindash',[App\Http\Controllers\Admin\AdminController::class,'show']);

// ?-----------------Admin Courses Page-------------
Route::view('admindash-courses','admin.admincourses')->name('admindash.courses');

// ?-----------------Admin Courses Add Page--------------
Route::view('admindash-courses-add','admin.admincourses_add')->name('admindash.add.c');

// ?-----------------Admin Courses Info Page---------------
Route::view('admindash-courses-info','admin.admincourses_info')->name('admindash.info.c');
