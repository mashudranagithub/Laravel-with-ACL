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
    return view('front.index');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::group(['middleware' => ['auth']], function() {

	Route::group(['middleware' => ['role:Super Admin|Admin']], function () {
        Route::resource('roles','RoleController');
	    Route::resource('users','UserController');
	    Route::resource('posts','PostController');
	});

	Route::get('/dashboard', function () { return view('admin.index'); })->middleware('verified');
});
