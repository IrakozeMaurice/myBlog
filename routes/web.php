<?php

Route::get('/home', 'HomeController@index')->name('index');

Route::resource('posts', 'PostsController')->middleware('auth');

Route::resource('categories', 'CategoriesController')->middleware('auth');

Route::resource('users', 'UsersController')->middleware('auth');

Auth::routes();

Route::get('/', 'HomepageController@index');

Route::get('{post}', 'HomepageController@show');
