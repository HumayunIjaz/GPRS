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

Route::get('bio', function () {
    return view('bio');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('/', function () {
    return view('index');
});

Route::get('Subtle-Mixture-of-Earliest-Calligraphy', 'article@blog1');

Route::resource('gallery','portfolio');

Route::resource('blog','article');
Route::post('/insert', 'Controller@insert');
