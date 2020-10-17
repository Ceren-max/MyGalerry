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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/admin' , 'AdminController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/doga-galerisi' , 'AdminController@dogaView');
Route::get('/portre-galerisi' , 'AdminController@portreView');
Route::get('/hayvan-galerisi' , 'AdminController@hayvanView');
Route::get('/mimar-galerisi' , 'AdminController@mimariView');
Route::get('/foto-olustur','AdminController@createPhotoView');
Route::post('/foto-olustur','AdminController@createPhoto')->name('photo.create');
