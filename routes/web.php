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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//all header(backend page)routes start from here
Route::prefix('users')->group(function () {
Route::get('/all','Backend\UserController@index')->name('users.all');
Route::get('/create','Backend\UserController@create')->name('users.create');
Route::post('/store','Backend\UserController@store')->name('users.store');
Route::get('/edit/{id}','Backend\UserController@edit')->name('users.edit');
Route::post('/update/{id}','Backend\UserController@update')->name('users.update');
Route::get('/destroy/{id}','Backend\UserController@destroy')->name('users.destroy');
});

// Profile Route start from here
Route::prefix('profile')->group(function () {
Route::get('/user','Backend\ProfileController@index')->name('profile.user');
Route::post('/store','Backend\ProfileController@store')->name('profile.store');
Route::get('/edit','Backend\ProfileController@edit')->name('profile.edit');
Route::post('/update','Backend\ProfileController@update')->name('profile.update');
Route::get('/change-password','Backend\ProfileController@ChangePassword')->name('change.password');
Route::post('/update-password','Backend\ProfileController@UpdatePassword')->name('update.password');

});
