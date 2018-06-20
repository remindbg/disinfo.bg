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



Route::get('/desinfo', function () {

   return view('desinfo.all');
});


Route::get('/admin/', 'Admin\ArticleController@index');

 // Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/','ArticleController@index')->name('allarticles');
Route::get('/','ArticleController@homepage')->name('homepage'); // real homepage

/**
 * Front / Article / Categories Routes
 */

Route::get('/articles','ArticleController@index')->name('allarticles');
Route::get('/articles/{date}/{id}/{slug}',
	'ArticleController@show')->name('singleArticle');

Route::get('/articles/{id}/{slug}','CategoriesController@show');

/**
 * Admin Routes TODO : grouping namespace
 */


/**
 * Аdmin Articles Routes
 */


Route::get('/admin/articles/{id}/sources/create','Admin\SourceController@create');
Route::post('/admin/articles/sources/store', 'Admin\SourceController@store');

Route::get('/admin/articles/create', 'Admin\ArticleController@create')->name('adminCreateArticle');
Route::post('/admin/articles/store', 'Admin\ArticleController@store')->name('adminStoreArticle'); // new
Route::get('/admin/articles/edit/{id}','Admin\ArticleController@edit');
Route::post('/admin/articles/update/{id}', 'Admin\ArticleController@update')->name('adminCreateUpdate');

//Route::post('/admin/articles/update/{id}','Admin\ArticleController@update');
// cats
Route::get('/admin/articles', 'Admin\ArticleController@index')->name('allAdminArticles');
Route::delete('/admin/articles/delete/{id}', 'Admin\ArticleController@destroy')->name('adminArticlesDestroy');




/**
 * Admin-ArticleCategories Routes
 */
Route::get('/admin/articles/categories', 'Admin\CategoriesController@index');
Route::get('/admin/articles/categories/create', 'Admin\CategoriesController@create');
Route::get('/admin/articles/categories/edit/{id}','Admin\CategoriesController@edit');
Route::post('/admin/articles/categories/create', 'Admin\CategoriesController@store');
Route::post('/admin/articles/categories/update/{id}/','Admin\CategoriesController@update')->name('updateCategories');
Route::delete('/admin/articles/categories/delete/{id}', 'Admin\CategoriesController@destroy');
