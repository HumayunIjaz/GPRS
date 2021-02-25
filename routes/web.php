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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('home', 'HomeController@index')->name('home');

Route::post('file', 'HomeController@file')->name('file');

Route::resource('student', 'StudentController');

Route::post('/students/filter', 'StudentController@filter')->name('filter');

Route::resource('supervisor', 'SupervisorController');

Route::get('/thesis/{id}/clear','ThesisController@clear')->name('clear');

Route::post('/thesis/{id}/move','ThesisController@move')->name('thesis.move');

Route::get('/thesis/{id}/change','ThesisController@change')->name('change');

Route::post('/thesis/{id}/add','ThesisController@add')->name('thesis.add');

Route::resource('thesis','ThesisController');

Route::get('/synopsis/{id}/clear','SynopsisController@clear')->name('clear');

Route::post('/synopsis/{id}/move','SynopsisController@move')->name('synopsis.move');

Route::get('/synopsis/{id}/change','SynopsisController@change')->name('change');

Route::post('/synopsis/{id}/add','SynopsisController@add')->name('synopsis.add');

Route::resource('synopsis','SynopsisController');

Route::resource('extension','ExtensionController');

Route::get('/extension/{id}/change','ExtensionController@change')->name('change');

Route::post('/extension/{id}/add','ExtensionController@add')->name('extension.add');

Route::resource('progress','ProgressController');

Route::resource('phdprogress','PHDProgressController');

Route::get('/examiner/{id}/change','ExaminerController@change')->name('change');

Route::post('/examiner/{id}/add','ExaminerController@add')->name('examiner.add');

Route::resource('examiner','ExaminerController');

