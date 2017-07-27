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

Route::get('/testmodel', function () {
	$query = App\Post::all();
	return $query;
});

Route::get('/testmodel1', function () {
	$query = App\Post::find(1);
	return $query;
});

Route::get('/testmodel2', function () {
	$query = App\Post::where('title', 'like', '%haruskah menunda nikah%')->get();
	return $query;
});

Route::get('/testmodel3', function () {
	$post = App\Post::find(1);
	$post->title = "Ciri Keluarga Sakinah";
	$post->save();
	return $post;
});




Route::get('/siswa', function () {
	$sia = App\siswa::all();
	return $sia;
});

Route::get('/siswa1', function () {
	$sia = App\siswa::find(1);
	return $sia;
});

Route::get('/siswa2', function () {
	$sia = App\siswa::where('nama', 'like', '%iswanto%')->get();
	return $sia;
});

Route::get('/siswa3', function () {
	$post = App\siswa::find(1);
	$post->nama = "imam";
	$post->save();
	return $post;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
