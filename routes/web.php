<?php

// Example Routes
// Route::view('/', 'landing');
Route::get('/', 'HomeController@index')->name('/');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('akun', 'BioController@index')->name('akun')->middleware('auth');
Route::get('profil', 'HomeController@profil')->name('profil');
Route::get('akunb', 'HomeController@akun')->name('akunb')->middleware('auth');
Route::get('pay', 'HomeController@pay')->name('pay')->middleware('auth');
Route::get('ujian', 'UjianController@ujian')->name('ujian')->middleware('auth');
Route::get('pilih-ujian', 'UjianController@pilih_ujian')->middleware('auth')->name('pilih-ujian');
Route::post('mulai-ujian', 'UjianController@mulai_ujian')->middleware('auth')->name('mulai-ujian');

// Route::match(['get', 'post'], '/dashboard', function () {
//     return view('dashboard');
// });
Route::get('/dashboard', 'BackendController@index')->name('dashboard')->middleware('auth');
Route::view('/examples/plugin', 'examples.plugin');
Route::view('/examples/blank', 'examples.blank');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
