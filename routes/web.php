<?php

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@login')->name('login.login');



Route::get('/', 'IndexController@index')->name('index');

Route::get('/{category}', 'IndexController@category')->name('category');

Route::get('/{category}/{product}', 'IndexController@product')->name('product');

Route::post('/', 'IndexController@product_comment_add')->name('comment.add');


Route::group(['middleware' => ['auth']], function () {

});
