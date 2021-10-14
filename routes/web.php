<?php

use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/registration', 'Auth\RegisterController@registration')->name('registration');


Route::get('/index', 'PageController@index')->name('index');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/blog', 'PageController@blog')->name('blog');
Route::get('/entry', 'PageController@entry')->name('entry');


Route::get('/admin_coments', 'Admin\ComentsController@coments')->name('admin_coments');
Route::get('/coments_form', 'Admin\ComentsController@coments_form')->name('coments_form');
Route::post('/save_coments', 'Admin\ComentsController@savecoments')->name('save_coments');
Route::get('/coments_edit/{id}', 'Admin\ComentsController@edit_coments')->name('coments_edit');
Route::get('/coments_delete/{id}', 'Admin\ComentsController@delete_coments')->name('delete_coments');

Route::get('/admin_table', 'Admin\TableController@table')->name('admin_table');
Route::get('/table_form', 'Admin\TableController@table_form')->name('table_form');
Route::post('/save_table', 'Admin\TableController@savetable')->name('save_table');
Route::get('/table_edit/{id}', 'Admin\TableController@edit_table')->name('table_edit');
Route::get('/table_delete/{id}', 'Admin\TableController@delete_table')->name('delete_table');

Route::get('/admin_about', 'Admin\AboutController@about')->name('admin_about');
Route::get('/about_form', 'Admin\AboutController@about_form')->name('about_form');
Route::post('/save_about', 'Admin\AboutController@saveabout')->name('save_about');
Route::get('/about_edit/{id}', 'Admin\AboutController@edit_about')->name('about_edit');
Route::get('/about_delete/{id}', 'Admin\AboutController@delete_about')->name('delete_about');

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
