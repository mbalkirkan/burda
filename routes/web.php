<?php
Route::group(['middleware' => ['checkauth']], function () {
    Route::get('/login', 'LoginController@index')->name('login');
    Route::post('/login', 'LoginController@login')->name('login.login');

});

Route::get('/', 'IndexController@index')->name('index');
Route::post('/comment_add', 'IndexController@product_comment_add')->name('comment.add');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', 'AdminController@index')->name('admin.index');

});

Route::get('/{category}', 'IndexController@category')->name('category');

Route::get('/{category}/{product}', 'IndexController@product')->name('product');







