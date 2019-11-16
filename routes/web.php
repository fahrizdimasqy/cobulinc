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

Route::view('trending', 'components/content_trending');

Route::view('create_post', 'components/create_post');

Route::resource('post', 'PostController')->only(['store', 'show'])->parameters(['post' => 'slug']);

Route::resource('comment', 'CommentController')->only(['store']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
