<?php
/**
 * Created by PhpStorm.
 * User: Trung Pham
 * Date: 2/24/2021
 * Time: 12:05 AM
 */

use Illuminate\Support\Facades\Route;

Route::get('/the_loai/{key}', [
        'as'=> 'tag.show',
        'uses' =>'Frontend\TagController@show',
    ]
);