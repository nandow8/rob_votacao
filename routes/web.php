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

Route::resource('admin/posts', 'Admin\\PostsController');
Route::resource('admin/candidato', 'Admin\Candidato\CandidatoController');
Route::resource('admin/enquete', 'Admin\Enquete\EnqueteController');
Route::resource('admin/enquete-candidatos', 'Admin\EnqueteCandidatos\EnqueteCandidatosController');