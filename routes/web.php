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

Route::resource('/videos', 'VideoController');
Route::get('/videos/preview/{id}', 'VideoController@preview')->name('videos.preview');

Route::get('/listar/', 'VideoController@list')->name('videos.list');
Route::get('/carregar/video/{id}', 'VideoController@carregarAjax')->name('videos.ajax');

//edit product
Route::get('/video/play/{id}', function ($id) {
    return view('videos.video', [
        //'data' => App\products::where('id', $id)->get()
        'data' => 'hOUvrWx5uVY'
    ]);
});