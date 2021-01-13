<?php

// Example Routes
// Route::view('/', 'landing');
Auth::routes();

Route::get('/', 'HomeController@index')->name('/')->middleware('ceklogin');
Route::get('/home', 'HomeController@index')->name('home')->middleware('ceklogin');
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

// user
Route::get('/users', 'UserController@index')->name('users')->middleware('role:1');
Route::get('/adduser', 'UserController@add')->name('adduser')->middleware('role:1');
Route::post('/createuser', 'UserController@create')->name('createuser')->middleware('role:1');
Route::get('/deleteuser/{id}', 'UserController@delete')->name('deleteuser')->middleware('role:1');
Route::get('/edituser/{id}', 'UserController@edit')->name('edituser')->middleware('role:1');
Route::get('/updateuser/{id}/{status}', 'UserController@update')->name('updateuser')->middleware('role:1');

// score
Route::get('/scors', 'JawabanController@index')->name('scors')->middleware('role:1');