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

Route::get('/', function () {
    return view('blog');
});

Route::get('/blog', function(){
    return view('blog');
});

Route::get('/cv', function(){
    return view ('pages.cv');
});

Route::get ('/alarm', function() {
    return view('pages.alarm');
});

Route::get ('/alarm', function() {
    return view('pages.alarm');
});

Route::get ('/post', function() {
    return view('pages.post');
});

Route::get('/', 'PagesController@main');
Route::get('/blog', 'PagesController@main');
Route::get('/cv', 'PagesController@cv');
Route::get('/alarm', 'PagesController@alarm');
Route::get('/blog/create', 'PostController@create');
Route::post('/blog/store', 'PostController@store');
Route::get('/blog/delete/id/{id}', 'PostController@deleteById');
Route::get('/blog/edit/id/{id}','PostController@edit');
Route::get('/blog/{id}', 'PagesController@post');
Route::post('/blog/update', 'PostController@update');

