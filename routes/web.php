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
Route::get('/', function () {
    return view('homepage');
});
Route::get('/admin', function () {
    return view('layouts.adminlayout');
});
 // Route::get('/home', 'HomeController@index')->name('home');

/**
 * Front / Article / Categories Routes
 */

Route::get('/articles','ArticleController@index')->name('allarticles');
Route::get('/articles/{category}/{id}/{slug}',
	'ArticleController@show')->name('singleArticle');

Route::get('/articles/{category}/','CategoryController@show');

/**
 * Admin Routes TODO : grouping namespace
 */

Route::get('/admin/desinfo/all', 'Admin\DesinfoController@all')->name('adminAllDesinfo');
Route::get('/admin/desinfo/new', 'Admin\DesinfoController@create')->name('createDesinfo');

Route::post('/admin/desinfo/store', 'Admin\DesinfoController@store')->name('storeDesinfo');


/**
 * Articles Routes
 */
Route::get('/admin/articles/categories/create', 'Admin\CategoryController@create');
Route::post('/admin/articles/categories/create', 'Admin\CategoryController@store');
Route::get('/admin/articles/create', 'Admin\ArticleController@create')->name('adminCreateArticle');
Route::post('/admin/articles/store', 'Admin\ArticleController@store')->name('adminStoreArticle');
Route::get('/admin/articles/categories/all', 'Admin\CategoryController@index');
Route::get('/admin/articles/edit/{id}','Admin\ArticleController@edit');
Route::post('/admin/articles/update/{id}','Admin\ArticleController@update');
// cats
Route::get('/admin/articles/categories/edit/{id}','Admin\CategoryController@edit');
Route::post('/admin/articles/categories/update/{id}/','Admin\CategoryController@update')->name('updateCategory');
Route::get('/admin/articles/all', 'Admin\ArticleController@index')->name('allAdminArticles');
Route::get('/admin/articles/edit/{id}', 'Admin\ArticleController@edit')->name('adminCreateEdit');
Route::post('/admin/articles/edit/{id}', 'Admin\ArticleController@update')->name('adminCreateUpdate');
Route::post('/admin/articles/delete/{id}', 'Admin\ArticleController@destroy')->name('adminArticlesDestroy');
