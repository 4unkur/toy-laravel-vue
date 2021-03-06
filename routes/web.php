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
    return redirect()->route('projects');
});

Route::get('projects', 'ProjectController@index')->name('projects');

Route::post('projects/store', 'ProjectController@store')->name('projects.store');