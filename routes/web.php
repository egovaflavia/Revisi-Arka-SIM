<?php

// Example Routes
// Route::view('/', 'landing');
Auth::routes();

Route::get('/', 'HomeController@index')->name('/')->middleware('ceklogin');
Route::get('/home', 'HomeController@index')->name('home')->middleware('ceklogin');
Route::get('pay', 'HomeController@pay')->name('pay')->middleware('auth');
Route::get('profil', 'HomeController@profil')->name('profil');
// Route::get('akun', 'BioController@index')->name('akun')->middleware('auth');

Route::get('akunb', 'HomeController@akun')->name('akunb')->middleware('auth');
Route::get('ujian', 'UjianController@ujian')->name('ujian')->middleware('auth');
Route::get('pilih-ujian', 'UjianController@pilih_ujian')->middleware('auth')->name('pilih-ujian');
Route::post('mulai-ujian', 'UjianController@mulai_ujian')->middleware('auth')->name('mulai-ujian');

Route::view('/examples/plugin', 'examples.plugin');
Route::view('/examples/blank', 'examples.blank');

Route::get('/home', 'HomeController@index')->name('home');

// ==============================================BACKEND============================================================
Route::get('/dashboard', 'BackendController@index')->name('dashboard')->middleware('role:1');

// kategori
Route::get('/kategoris', 'KategoriController@index')->name('kategoris')->middleware('role:1');
Route::get('/addkategori', 'KategoriController@add')->name('addkategori')->middleware('role:1');
Route::post('/createkategori', 'KategoriController@create')->name('createkategori')->middleware('role:1');
Route::get('/deletekategori/{id}', 'KategoriController@delete')->name('deletekategori')->middleware('role:1');
Route::get('/editkategori/{id}', 'KategoriController@edit')->name('editkategori')->middleware('role:1');
Route::post('/updatekategori', 'KategoriController@update')->name('updatekategori')->middleware('role:1');

// Soal
Route::get('/soals','SoalController@index')->name('soals')->middleware('role:1');
Route::get('/detailsoal/{ids}/{idd}', 'SoalController@detail')->name('detailsoal')->middleware('role:1');
Route::get('/subtestdetail/{id}', 'SoalController@subtest')->name('subtestdetail')->middleware('role:1');
Route::get('/addsoal', 'SoalController@add')->name('addsoal')->middleware('role:1');
Route::post('/createsoal', 'SoalController@create')->name('createsoal')->middleware('role:1');
Route::get('/deletesoal/{id}', 'SoalController@delete')->name('deletesoal')->middleware('role:1');
Route::post('/updatesoal', 'SoalController@update')->name('updatesoal')->middleware('role:1');

// Subtest
Route::get('/subtest','SubtestController@index')->name('subtest')->middleware('role:1');
Route::get('/addsubtest', 'SubtestController@add')->name('addsubtest')->middleware('role:1');
Route::post('/createsubtest', 'SubtestController@create')->name('createsubtest')->middleware('role:1');
Route::get('/deletesubtest/{id}', 'SubtestController@delete')->name('deletesubtest')->middleware('role:1');
Route::get('/editsubtest/{id}', 'SubtestController@edit')->name('editsubtest')->middleware('role:1');
Route::post('/updatesubtest', 'SubtestController@update')->name('updatesubtest')->middleware('role:1');