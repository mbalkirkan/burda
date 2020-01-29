<?php
Route::group(['middleware' => ['checkauth']], function () {
    Route::get('/login', 'LoginController@index')->name('login');
    Route::post('/login', 'LoginController@login')->name('login.login');

});

Route::get('/', 'IndexController@index')->name('index');
Route::post('/comment_add', 'IndexController@product_comment_add')->name('comment.add');
Route::get('/sitemap.xml', 'SitemapController@sitemap')->name('sitemap');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', 'AdminController@index')->name('admin.index');
    Route::get('/products', 'AdminController@products')->name('admin.products.index');
    Route::post('/products_get', 'AdminController@products_get')->name('admin.products.get');
    Route::post('/products_update', 'AdminController@products_update')->name('admin.products.update');
    Route::post('/products_save', 'AdminController@products_save')->name('admin.products.save');
    Route::post('/products_delete', 'AdminController@products_delete')->name('admin.products.delete');

    Route::post('/comment_approve', 'AdminController@comment_approve')->name('admin.comment.approve');
    Route::post('/comment_delete', 'AdminController@comment_delete')->name('admin.comment.delete');


    Route::post('/job_approve', 'AdminController@job_approve')->name('admin.job.approve');
    Route::post('/job_delete', 'AdminController@job_delete')->name('admin.job.delete');


    Route::get('/menu', 'AdminController@menu')->name('admin.menu');
    Route::post('/menu_getcategory', 'AdminController@menu_getcategory')->name('admin.menu.category.get');
    Route::post('/menu_addcategory', 'AdminController@menu_addcategory')->name('admin.menu.category.add');
    Route::post('/menu_getitem', 'AdminController@menu_getitem')->name('admin.menu.item.get');
    Route::post('/menu_additem', 'AdminController@menu_additem')->name('admin.menu.item.add');
    Route::post('/menu_updateitem', 'AdminController@menu_updateitem')->name('admin.menu.item.update');
    Route::post('/menu_deleteitem', 'AdminController@menu_deleteitem')->name('admin.menu.item.delete');
});


Route::get('/is-ilanlari', 'JobController@index')->name('jobs.index');
Route::post('/is-ilanlari-ekle', 'JobController@add')->name('jobs.add');


Route::get('/{category}', 'IndexController@category')->name('category');

Route::get('/{category}/{product}', 'IndexController@product')->name('product');







