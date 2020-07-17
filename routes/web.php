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

Route::get('/', 'BhwController@index')->name('homepage');

Route::get('/who-we-are', 'BhwController@who_we_are')->name('who-we-are');
Route::get('background', 'BhwController@background')->name('background');
Route::get('working-group', 'BhwController@working_group')->name('working-group');
Route::get('advisory-group', 'BhwController@advisory_group')->name('advisory-group');
Route::get('thematic-group', 'BhwController@thematic_group')->name('thematic-group');
Route::get('secretariat-group', 'BhwController@secretariat_group')->name('secretariat-group');

Route::get('single-member/{id}', 'BhwController@single_member')->name('single-member');

Route::get('/what-we-do', 'BhwController@what_we_do')->name('what-we-do');

Route::get('/regions', 'BhwController@regions')->name('regions');
Route::get('/single-region', 'BhwController@single_region')->name('single-region');

Route::get('/bhw-reports', 'BhwController@bhw_reports')->name('bhw-reports');
Route::get('/bhw-bulletin', 'BhwController@bhw_bulletin')->name('bhw-bulletin');
Route::get('/photo-gallery', 'BhwController@photo_gallery')->name('photo-gallery');
Route::get('/blogs', 'BhwController@blogs')->name('blogs');
Route::get('/events', 'BhwController@events')->name('events');
Route::get('/contact', 'BhwController@contact')->name('contact');




Auth::routes(['verify' => true]);

Route::group(['middleware' => ['auth']], function() {


	Route::get('/dashboard', 'HomeController@index')->name('home')->middleware('verified');

	Route::group(['middleware' => ['role:Super Admin|Admin']], function () {
        Route::resource('roles','RoleController');
	    Route::resource('users','UserController');
	    Route::resource('posts','PostController');
	});

	// Group Member Routes Start
	Route::get('group-members', 'Group_memberController@index')->name('group-members');
	Route::get('group-member/create', 'Group_memberController@create')->name('createGroup-member');
	Route::post('group-member/create', 'Group_memberController@store')->name('storeGroup-member');
	Route::get('group-member/show/{id}', 'Group_memberController@show')->name('showGroup-member');
	Route::get('group-member/edit/{id}', 'Group_memberController@edit')->name('editGroup-member');
	Route::put('group-member/update/{id}', 'Group_memberController@update')->name('updateGroup-member');
	Route::delete('group-member/delete/{id}', 'Group_memberController@destroy')->name('deleteGroup-member');







});
