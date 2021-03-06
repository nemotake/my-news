<?php

Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create', 'Admin\NewsController@add')->middleware('auth');
});

Route::get('/', function () {
    return view('welcome');
});
//PHP・laravel09課題はここからです。
Route::get('XXX', 'AAAController@bbb');

Route::group(['prefix' => 'admin'],function (){
    Route::get('profile/create','Admin\ProfileController@add');
    Route::get('profile/edit','Admin\ProfileController@edit');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
