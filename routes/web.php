<?php

Route::get('/', function () {
    return view('home');
});

/*************** Route LOGIN *****************/
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/smlogin', 'AuthController@smlogin');
Route::get('/daftar', 'AuthController@daftar');
Route::post('/daftar/member', 'AuthController@register');
// Route LOGOUT
Route::get('/logout', 'AuthController@logout');

/*************** Route ADMIN *****************/
Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'CheckRole']], function()
{
	Route::get('/', 'AdminController@index');
	Route::get('/datasewa', 'AdminController@datasewa');
	Route::get('/datasewa/download', 'AdminController@datasewapdf');
	Route::get('/pengembalian', 'AdminController@pengembalian');
	Route::get('/pengembalian/{id}', 'AdminController@pengembalianid');
	Route::get('/datamobil', 'AdminController@datamobil');
	Route::get('/datamobil/download', 'AdminController@datamobilpdf');
	Route::get('/editmobil', 'AdminController@editmobil');
	Route::post('/editmobil/tambah', 'AdminController@tambahmobil');
	Route::get('/editmobil/edit/{id}', 'AdminController@editdatamobil');
	Route::post('/editmobil/edit/', 'AdminController@savemobil');
	Route::get('/editmobil/hapus/{id}', 'AdminController@hapusmobil');
	Route::get('/dataadmin', 'AdminController@dataadmin');
	Route::post('/dataadmin/tambah', 'AdminController@tambahadmin');
	Route::get('/dataadmin/{id}/hapus', 'AdminController@hapusadmin');
	Route::get('/datamember', 'AdminController@datamember');
	Route::get('/datamember/{id}/hapus', 'AdminController@hapusmember');
});

/*************** Route MEMBER ****************/
Route::group(['prefix'=>'member', 'middleware'=>['auth']], function()
{
	Route::get('/1', 'SewaController@kesatu')->name('member');
	Route::post('/1/wsorder', 'SewaController@waktusewa');
	Route::post('/2', 'SewaController@kedua');
	Route::get('/3/{id}', 'SewaController@ketiga');
	Route::post('/order', 'SewaController@selesai');
	Route::get('/order/invoice', 'SewaController@invoice');
});


Route::get('/dash', function() {
    return view('dashboards.master');
});