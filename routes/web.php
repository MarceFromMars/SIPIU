<?php

Route::get('/',function(){
	return view('auth\login');
});

Route::get('login',function(){
	return view('login');
});

/*Auth::routes();*/

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('users/edicion',['as' => 'users.edicion', 'uses' => 'UsersController@edicion']);

/*Route::get('users','UsersController@index');*/
Route::resource('users','UsersController');

Route::resource('institucion','InfoInstitucionController');
