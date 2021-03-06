<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
  //  return view('welcome');
  //});

  //Route::get('/peminjaman', function () {
  //  return view('peminjaman');
  //});
  
  Route::get('/', 'PagesController@beranda');
  
  Route::get('/peminjaman', 'PeminjamanController@index');
  Route::get('/peminjaman/create', 'PeminjamanController@create');
  Route::post('/peminjaman', 'PeminjamanController@store');
  Route::delete('/peminjaman/{pmjmn}', 'PeminjamanController@destroy');
  Route::get('/peminjaman/{pmjmn}/edit', 'PeminjamanController@edit');
  Route::patch('/peminjaman/{pmjmn}', 'PeminjamanController@update');
  //Route::resource('peminjaman', 'PeminjamanController');
  
  Route::get('/pengembalian', 'PengembalianController@index');
  Route::get('/pengembalian/{pngmbln}/formpengembalian', 'PengembalianController@create');
  Route::post('/pengembalian', 'PengembalianController@store');
  
  Auth::routes();
  
  Route::get('/home', 'HomeController@index')->name('home');
  Auth::routes();
  
  Route::get('/home', 'HomeController@index')->name('home');
  
  Auth::routes();
  
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
