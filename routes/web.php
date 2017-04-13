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




Route::get('/contact', 'PagesController@getContact');
Route::get('/about', 'PagesController@getAbout');
Route::get('/', 'PagesController@getIndex')-> name('homePage');


Route::resource('posts', 'PostController');
Route::post('/posts/{post}/comments', 'CommentsController@store')-> name('saveComment');

Route::get('blog','BlogController@getIndex')-> name('blog.index');

Route::get('blog/{slug}','BlogController@getSingle')-> name('blog.single')
    -> where('slug','[\w\d\-\_]+');

Auth::routes();

Route::get('/home', 'HomeController@index');
