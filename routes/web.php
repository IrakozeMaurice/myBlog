<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');

Route::resource('posts', 'PostsController')->middleware('auth');

Route::resource('categories', 'CategoriesController')->middleware('auth');

Route::resource('users', 'UsersController')->middleware('auth');
