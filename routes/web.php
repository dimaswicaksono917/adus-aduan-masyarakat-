<?php

// Auth
Route::get('/login', 'AuthController@login');
Route::get('/register', 'AuthController@register');

// Admin
Route::get('/admin', 'AdminController@index');

// Petugas
Route::get('/petugas', 'PetugasController@index');

// Masyarakat
Route::get('/masyarakat', 'MasyarakatController@index');
