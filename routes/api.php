<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('post/{slug}', 'PostController@show')->name('posts.show');

Route::get('/users', 'UserController@list')->name('users.list');
Route::get('/users/{id}', 'UserController@show')->name('users.show');

Route::get('videos', 'VideoController@getVideos')->name('videos.lists');
Route::get('/video/{id}/{code}', 'VideoController@show')->name('videos.show');
