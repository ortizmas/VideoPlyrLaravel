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
    return view('example-vue');
});
Route::get('/vue', function () {
    return view('vue');
});
Route::get('playlist', function () {
    return view('playlist');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/videos', 'VideoController');
Route::get('/videos/preview/{id}', 'VideoController@preview')->name('videos.preview');

Route::get('/listar/', 'VideoController@list')->name('videos.list');
Route::get('/carregar/video/{id}', 'VideoController@carregarAjax')->name('videos.ajax');

//Rotas VueJs
Route::get('/usuarios', 'UserController@index')->name('users.index');
Route::get('/users', 'UserController@list')->name('users.list');
Route::get('/users/{id}', 'UserController@show')->name('users.show');

Route::resource('pages', 'PageController')->middleware('auth');

Route::get('/{vue_capture?}', function () { return view('playlist'); })->where('vue_capture', '[\/\w\.-]*');
