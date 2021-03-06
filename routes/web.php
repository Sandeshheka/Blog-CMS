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
Route::get('/', 'BlogController@index')->name('blogIndex');
Route::get('/blog/{post}', 'BlogController@show')->name('blogShow');
Route::post('/blog/{post}/comments', 'CommentsController@store')->name('blog.comments');
Route::get('/category/{category}', 'BlogController@category')->name('category');
Route::get('/author/{author}', 'BlogController@author')->name('author');
Route::get('/tag/{tag}', 'BlogController@tag')->name('tag');


Auth::routes();

Route::get('/home', 'Backend\HomeController@index')->name('home');
Route::get('/edit-account', 'Backend\HomeController@edit');
Route::put('/edit-account', 'Backend\HomeController@update');

Route::put('/backend/blog/restore/{blog}', 'Backend\BlogController@restore')->name('backend.blog.restore');
Route::Delete('/backend/blog/force-destroy/{blog}', 'Backend\BlogController@forceDestroy')->name('backend.blog.force-destroy');
Route::resource('/backend/blog', 'Backend\BlogController');

Route::get('/backend/users/confirm/{users}', 'Backend\UsersController@confirm')->name('backend.users.confirm');
Route::resource('/backend/categories', 'Backend\CategoriesController');
Route::resource('/backend/users', 'Backend\UsersController');
