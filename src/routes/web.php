<?php

Route::group(['middleware' => 'web'], function () {

    Route::group([
        'prefix' => 'admin/price',
        'middleware' => ['auth'],
        'namespace' => 'Ourgarage\Price\Http\Controllers\Admin'
    ], function () {

        Route::get('/', 'PriceController@index')->name('price::admin::index');

    });
});
