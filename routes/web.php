<?php

Route::get('/',function(){
	return view('auth\login');
});

Route::get('login',function(){
	return view('login');
});

Route::get('graficas', function(){
	return view('propuestas de vistas/graficas');
});

/*Auth::routes();*/

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');

