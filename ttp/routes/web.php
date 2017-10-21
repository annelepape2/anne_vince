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

// Storage::disk('local')->put('file.txt', 'Contents');


Route::get('image-gallery', 'ImageGalleryController@index');
Route::post('image-gallery', 'ImageGalleryController@upload');
Route::delete('image-gallery/{id}', 'ImageGalleryController@destroy');

Route::get('/themes', 'GalleryThemeController@index');
Route::get('/themes/nature', 'NatureThemeController@index');
Route::get('/themes/sport', 'SportThemeController@index');
Route::get('/themes/mode', 'ModeThemeController@index');