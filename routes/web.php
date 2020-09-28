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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pengaturan', 'HomeController@pengaturan')->name('pengaturan');
Route::delete('ubahpengaturan', 'HomeController@ubahpengaturan')->name('ubahpengaturan');
Route::get('/layouts/datasiswa', 'SiswaController@index')->name('datasiswa');
Route::get('/layouts/pengaturan', 'HomeController@pengaturan')->name('pengaturan');
Route::resource('datasiswa', 'SiswaController');
Route::delete('delete/{id}', 'SiswaController@destroy')->name('delete');
