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
    return view('homepage');
});
Route::get('/administration', function () {
    return view('layouts.adminlayout');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/articles/all','ArticleController@all')->name('allarticles');
Route::get('/articles/{category}/{date}/{slug}',
	'ArticleController@single')->name('singleAricle');

