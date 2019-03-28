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
Route::get('/contact', 'ContactController@index');

Route::get('/projects', 'ProjectController@index'); // visiems
Route::get('/projects/{title}', 'ProjectController@view'); // vienam projektui
