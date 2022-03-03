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

Route::get('/example', function ()  
 {      
return "Hello javaTpoint";  
}); 

// // Route::get('/user', 'UserController@index');

Route::get('/home', 'User\UserController@index')->name('home_page');//controller wala user

Route::get('/signupForm', 'User\UserController@signupForm')->name('signup_form');//folder/controller/class name@function name "name" (i.e function name) 
Route::post('user/store', ['uses'=>'user\UserController@store'])->name('user_store');

// Route::get('/LogInForm', 'User\UserController@LogIn_form')->name('LogIn_form');