<?php
/**
 * Created by PhpStorm.
 * User: Trung Pham
 * Date: 2/24/2021
 * Time: 12:04 AM
 */

use Illuminate\Support\Facades\Route;

Route::get('/danh_sach/{key}', [
        'as'=> 'categories.show',
        'uses' =>'Frontend\CategoryController@show',
    ]
);

Route::post('/filter', [
        'as'=> 'categories.filter',
        'uses' =>'Frontend\CategoryController@filter',
    ]
);

Route::get('/loc_truyen', [
        'as'=> 'categories.filter.render',
        'uses' =>'Frontend\CategoryController@showFilter',
    ]
);