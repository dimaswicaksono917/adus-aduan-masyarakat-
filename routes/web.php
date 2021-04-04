<?php

// Auth

Route::get('/login', 'AuthController@login');
Route::get('/register', 'AuthController@register');
Route::post('/cek_login', 'AuthController@cek_login');
Route::get('/logout', 'AuthController@logout');
Route::post('/postregister', 'AuthController@postregister');

//Masyarakat
Route::group(['middleware' => ['authMasyarakat']], function () {
	Route::get('/', 'MasyarakatController@index');
	Route::get('/masyarakat', 'MasyarakatController@index');	
	Route::get('/masyarakat/data-pengaduan', 'MasyarakatController@data_pengaduan');	    

	Route::get('/masyarakat/buat-pengaduan-baru', 'MasyarakatController@buat_pengaduan');
	Route::post('/masyarakat/postpengaduan', 'MasyarakatController@postpengaduan');
	Route::get('/masyarakat/pengaduan/detail-tanggapan/{id}', 'MasyarakatController@detail_tanggapan');
});


//Petugas
Route::group(['middleware' => ['authPetugas']], function () {
	Route::get('/petugas', 'PetugasController@index');	
	Route::get('/petugas/data-petugas', 'PetugasController@data_petugas');	
	Route::get('/petugas/data-masyarakat', 'PetugasController@data_masyarakat');	

	Route::get('/petugas/pengaduan/pengaduan-baru', 'PetugasController@pengaduan_baru');	
	Route::get('/petugas/pengaduan/detail/{id}', 'PetugasController@detail_pengaduan');		
	Route::post('/petugas/pengaduan/action_pengaduan', 'PetugasController@action_pengaduan');
	Route::get('/petugas/pengaduan/pengaduan-diproses', 'PetugasController@pengaduan_diproses');	
	Route::get('/petugas/pengaduan/tanggapi/{id}', 'PetugasController@tanggapi');	
	Route::post('/petugas/pengaduan/posttanggapan', 'PetugasController@posttanggapan');	
});

//Admin
Route::group(['middleware' => ['authAdmin']], function () {
	Route::get('/admin', 'AdminController@index');	

	Route::get('/admin/data-admin', 'AdminController@data_admin');	
	Route::post('/admin/post_add_admin', 'AdminController@post_add_admin');	
	Route::post('/admin/post_edit_admin/', 'AdminController@post_edit_admin');	
	Route::get('/admin/delete_admin/{id}', 'AdminController@delete_admin');	

	Route::get('/admin/data-petugas', 'AdminController@data_petugas');	
	Route::post('/admin/post_add_petugas', 'AdminController@post_add_petugas');	
	Route::post('/admin/post_edit_petugas/', 'AdminController@post_edit_petugas');	
	Route::get('/admin/delete_petugas/{id}', 'AdminController@delete_petugas');	

	Route::get('/admin/data-masyarakat', 'AdminController@data_masyarakat');	
	Route::post('/admin/post_add_masyarakat', 'AdminController@post_add_masyarakat');	
	Route::post('/admin/post_edit_masyarakat/', 'AdminController@post_edit_masyarakat');	
	Route::get('/admin/delete_masyarakat/{nik}', 'AdminController@delete_masyarakat');	


	Route::get('/admin/pengaduan/pengaduan-baru', 'AdminController@pengaduan_baru');	
	Route::get('/admin/pengaduan/detail/{id}', 'AdminController@detail_pengaduan');	
	Route::post('/admin/pengaduan/action_pengaduan', 'AdminController@action_pengaduan');	
	Route::get('/admin/pengaduan/pengaduan-diproses', 'AdminController@pengaduan_diproses');
	Route::get('/admin/pengaduan/tanggapi/{id}', 'AdminController@tanggapi');	
	Route::post('/admin/pengaduan/posttanggapan', 'AdminController@posttanggapan');	
});	