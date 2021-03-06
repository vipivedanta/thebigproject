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
    return view('front.home');
});

Route::get('/about-us',function(){
	return view('front.about_us');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/projects','ProjectController');
