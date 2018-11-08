<?php

Route::get('/',function(){
	return view('home');
});

Route::get('login',function(){
	return view('login');
});

Route::get('graficas', function(){
	return view('propuestas de vistas/graficas');
});