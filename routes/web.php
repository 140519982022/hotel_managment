<?php

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

// Route::get('/example', function ()  
//  {      
// return "Hello javaTpoint";  
// }); 

// // Route::get('/user', 'UserController@index');

Route::get('/home', 'User\UserController@home')->name('home_page');//controller wala user

Route::get('user/signupForm','User\UserController@signupForm')->name('signup_form');//folder/controller/class name@function name "name" (i.e function name) 
// below formate follow when request is post
Route::post('user/store', ['uses'=>'User\UserController@store'])->name('sigup_store');

Route::get('user/loginForm', 'User\UserController@login')->name('login_form');//folder/controller/class name@function name "name" (i.e function name) 
Route::post('user/authenticate', ['uses'=>'User\UserController@authenticate'])->name('authenticate');

Route::get('logout', ['uses'=>'User\UserController@logout'])->name('logout');

Route::get('user/profile', ['uses'=>'User\UserController@profileForm'])->name('profile_form');