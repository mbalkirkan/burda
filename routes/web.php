<?php


Route::get('/', 'IndexController@index')->name('index');


Route::get('/{category}', 'IndexController@category')->name('category');


