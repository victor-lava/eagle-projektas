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

// Kai vartotojas nueis į eagle.test/, jam atidarys HomeController kontrolerį ir metodą index
Route::get('/', 'HomeController@index');

// eagle.test/puslapis
// get reiškia GET metodą
Route::get('/contact', function() {
  echo "Mano puslapis";
});
