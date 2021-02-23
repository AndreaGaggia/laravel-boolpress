<?php

use App\Category;
use App\Tag;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::get('articles', 'API\ArticleController@expose');
Route::get('tags', function () {
    return response()->json([
        'response' => Tag::all(),
    ]);
});
Route::get('categories', function () {
    return response()->json([
        'response' => Category::all(),
    ]);
});
