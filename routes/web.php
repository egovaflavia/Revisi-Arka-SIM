<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Example Routes
// Route::view('/', 'landing');
Auth::routes();

Route::get('/', 'HomeController@index')->name('/');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('pay', 'HomeController@pay')->name('pay')->middleware('auth');
Route::get('profil', 'HomeController@profil')->name('profil');
Route::get('akun', 'BioController@index')->name('akun')->middleware('auth');

Route::match(['get', 'post'], '/dashboard', function () {
    return view('dashboard');
})->middleware('role:1');

// Route::get('akunb', 'HomeController@akun')->name('akunb')->middleware('auth');
// Route::get('ujian', 'UjianController@ujian')->name('ujian')->middleware('auth');
// Route::get('pilih-ujian', 'UjianController@pilih_ujian')->middleware('auth')->name('pilih-ujian');
// Route::post('mulai-ujian', 'UjianController@mulai_ujian')->middleware('auth')->name('mulai-ujian');


Route::view('/examples/plugin', 'examples.plugin');
Route::view('/examples/blank', 'examples.blank');


Route::get('/home', 'HomeController@index')->name('home');
