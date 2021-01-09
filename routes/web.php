<?php

// Example Routes
// Route::view('/', 'landing');
Auth::routes();

Route::get('/', 'HomeController@index')->name('/');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('pay', 'HomeController@pay')->name('pay')->middleware('auth');
Route::get('profil', 'HomeController@profil')->name('profil');
Route::get('akun', 'BioController@index')->name('akun')->middleware('auth');
Route::get('ujian', 'HomeController@step1')->name('ujian')->middleware('auth');
Route::get('pilih-ujian/', 'HomeController@step2')->middleware('auth')->name('pilih-ujian');
Route::post('mulai-ujian', 'HomeController@step3')->middleware('auth')->name('mulai-ujian');
Route::post('submit-ujian', 'HomeController@step4')->middleware('auth')->name('submit-ujian');
Route::post('submit-ujian-dua', 'HomeController@step5')->middleware('auth')->name('submit-ujian-dua');
Route::post('submit-ujian-finish', 'HomeController@step6')->middleware('auth')->name('submit-ujian-finish');

Route::get('/dashboard', 'BackendController@index')->name('dashboard')->middleware('auth');
Route::match(['get', 'post'], '/dashboard', function () {
    return view('dashboard');
})->middleware('role:1');

// Route::get('akunb', 'HomeController@akun')->name('akunb')->middleware('auth');

Route::view('/examples/plugin', 'examples.plugin');
Route::view('/examples/blank', 'examples.blank');


Route::get('/home', 'HomeController@index')->name('home');
