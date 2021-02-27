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

Route::get('/', 'PageController@home')->name('home');
Route::get('articlesV', 'PageController@api_articles')->name('api_articles');
Route::get('categories', 'PageController@api_categories')->name('api_categories');
Route::get('tags', 'PageController@api_tags')->name('api_tags');

Route::resource('articles', 'ArticleController');
