<?php

// Auth
Route::get('/login', 'AuthController@login');
Route::get('/register', 'AuthController@register');
Route::post('/cek_login', 'AuthController@cek_login');

//Masyarakat
Route::middleware(['authMasyarakat'])->group(function() {

	Route::get('/masyarakat', 'MasyarakatController@index');	

});

//Petugas
Route::middleware(['authPetugas'])->group(function() {

	Route::get('/petugas', 'PetugasController@index');	

});

//Admin
Route::middleware(['authAdmin'])->group(function() {

	Route::get('/admin', 'AdminController@index');	

});