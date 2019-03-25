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

// Vartotojas eina į eagle.test/ ir jam atidaro vaizdą welcome
Route::get('/', function () {

    return view('welcome');
});

// eagle.test/puslapis
// get reiškia GET metodą
Route::get('/contact', function() {
  echo "Mano puslapis";
});
