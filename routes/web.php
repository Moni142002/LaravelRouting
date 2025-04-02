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
    return view('welcome');
});

// Route::get("/about", function() {
//     return view('about');
// });
// Route::view("about", 'about');
// Route::view("contact", 'contact');

//Global Middleware
Route::view("users", 'middleware/users');
Route::view("home", 'middleware/home');
Route::view("noaccess", 'middleware/noaccess');

//Group Middleware
Route::view("home1", 'groupMiddleware/home1');
Route::view("noaccess1", 'groupMiddleware/noaccess1');

Route::group(['middleware'=>['protectedPage']], function() {
    Route::view("users1", 'groupMiddleware/users1');
});

//Route Middleware
Route::view("home2", 'groupMiddleware/home1');
Route::view("noaccess2", 'groupMiddleware/noaccess1');
Route::view("users2", 'groupMiddleware/users1')->middleware('protectedPage');