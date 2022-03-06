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
//****************profile controller */
// Route::get('user/profile', 'User\ProfileController@profileForm')->name('profile_form');
// Route::get('user/profile-store', 'User\ProfileController@profileStore')->name('profile_store');
// Route::get('user/index', 'User\ProfileController@index')->name('profile_store');

Route::group(['prefix' => 'user','middleware' => ['auth']],function(){
    /****** user crud start *******/	
			Route::get('profile/insert',['uses'=>'User\ProfileController@create'])->name('user_add');
			Route::post('profile/store', ['uses'=>'User\ProfileController@store'])->name('user_store');
			Route::get('profile/index',['uses'=>'User\ProfileController@index'])->name('user_index');
			Route::post('profile/update{id}',['uses'=>'User\ProfileController@update'])->name('user_update');
			Route::get('profile/edit{id}',['uses'=>'User\ProfileController@edit'])->name('user_edit');
			Route::get('profile/view{id}',['uses'=>'User\ProfileController@show'])->name('user_view');
			Route::get('profile/delete{id}', ['uses'=>'User\ProfileController@destroy'])->name('user_destroy');
		/****** user crud end *******/
});