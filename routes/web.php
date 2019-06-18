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

/*Las vistas de GeneralController se encuentras todas en la carpeta "generales" */
Route::get('nosotros', 'GeneralController@nosotros');

Route::get('/admin', function () {
    return view('admin.panel');
})->middleware('auth', 'role:admin');
