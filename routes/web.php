<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'PageController@index')->name('index');




Route::get('/admin_home', 'Admin\HomeController@home')->name('admin_home');
Route::get('/home_form', 'Admin\HomeController@home_form')->name('home_form');
Route::post('/save_home', 'Admin\HomeController@savehome')->name('save_home');
Route::get('/home_edit/{id}', 'Admin\HomeController@edit_home')->name('home_edit');
Route::get('/home_delete/{id}', 'Admin\HomeController@delete_home')->name('delete_home');

Route::get('/admin_info', 'Admin\InfoController@info')->name('admin_info');
Route::get('/info_form', 'Admin\InfoController@info_form')->name('info_form');
Route::post('/save_info', 'Admin\InfoController@saveinfo')->name('save_info');
Route::get('/info_edit/{id}', 'Admin\InfoController@edit_info')->name('info_edit');
Route::get('/info_delete/{id}', 'Admin\InfoController@delete_info')->name('delete_info');

Route::get('/admin_news', 'Admin\NewsController@news')->name('admin_news');
Route::get('/news_form', 'Admin\NewsController@news_form')->name('news_form');
Route::post('/save_news', 'Admin\NewsController@savenews')->name('save_news');
Route::get('/news_edit/{id}', 'Admin\NewsController@edit_news')->name('news_edit');
Route::get('/news_delete/{id}', 'Admin\NewsController@delete_news')->name('delete_news');
