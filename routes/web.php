<?php


Route::get('/', 'IndexController@index')->name('index');


Route::get('/{category}', 'IndexController@category')->name('category');

Route::get('/{category}/{product}', 'IndexController@product')->name('product');

Route::post('/', 'IndexController@product_comment_add')->name('comment.add');


