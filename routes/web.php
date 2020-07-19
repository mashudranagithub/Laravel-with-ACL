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

// Who we are view routes
Route::get('/who-we-are', 'BhwController@who_we_are')->name('who-we-are');
Route::get('background', 'BhwController@background')->name('background');
Route::get('working-group', 'BhwController@working_group')->name('working-group');
Route::get('advisory-group', 'BhwController@advisory_group')->name('advisory-group');
Route::get('thematic-group', 'BhwController@thematic_group')->name('thematic-group');
Route::get('secretariat-group', 'BhwController@secretariat_group')->name('secretariat-group');

Route::get('single-member/{id}', 'BhwController@single_member')->name('single-member');

Route::get('/what-we-do', 'BhwController@what_we_do')->name('what-we-do');

// Region View Routes
Route::get('/regions', 'BhwController@regions')->name('regions');
Route::get('/single-region/{id}', 'BhwController@single_region')->name('single-region');

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



	// Region Routes Start Here
	Route::get('all-regions', 'RegionController@index')->name('all-regions');
	Route::get('region/create', 'RegionController@create')->name('createRegion');
	Route::post('region/create', 'RegionController@store')->name('storeRegion');
	Route::get('region/edit/{id}', 'RegionController@edit')->name('editRegion');
	Route::put('region/update/{id}', 'RegionController@update')->name('updateRegion');
	Route::delete('region/delete/{id}', 'RegionController@destroy')->name('deleteRegion');


	// NGO Routes Start Here
	Route::get('all-ngo', 'NgoController@index')->name('all-ngo');
	Route::get('ngo/create', 'NgoController@create')->name('createNgo');
	Route::post('ngo/create', 'NgoController@store')->name('storeNgo');
	Route::get('ngo/edit/{id}', 'NgoController@edit')->name('editNgo');
	Route::put('ngo/update/{id}', 'NgoController@update')->name('updateNgo');
	Route::delete('ngo/delete/{id}', 'NgoController@destroy')->name('deleteNgo');



	// Committee Member Routes Start Here
	Route::get('committee-members', 'Committee_memberController@index')->name('committee-members');
	Route::get('committee-member/create', 'Committee_memberController@create')->name('createCommittee-member');
	Route::post('committee-member/create', 'Committee_memberController@store')->name('storeCommittee-member');
	Route::get('committee-member/show/{id}', 'Committee_memberController@show')->name('showCommittee-member');
	Route::get('committee-member/edit/{id}', 'Committee_memberController@edit')->name('editCommittee-member');
	Route::put('committee-member/update/{id}', 'Committee_memberController@update')->name('updateCommittee-member');
	Route::delete('committee-member/delete/{id}', 'Committee_memberController@destroy')->name('deleteCommittee-member');


	// Selected Institutions Routes Start Here
	Route::get('all-institution', 'Selected_institutionsController@index')->name('all-institution');
	Route::get('institution/create', 'Selected_institutionsController@create')->name('createInstitution');
	Route::post('institution/create', 'Selected_institutionsController@store')->name('storeInstitution');
	Route::get('institution/show/{id}', 'Selected_institutionsController@show')->name('showInstitution');
	Route::get('institution/edit/{id}', 'Selected_institutionsController@edit')->name('editInstitution');
	Route::put('institution/update/{id}', 'Selected_institutionsController@update')->name('updateInstitution');
	Route::delete('institution/delete/{id}', 'Selected_institutionsController@destroy')->name('deleteInstitution');







});
