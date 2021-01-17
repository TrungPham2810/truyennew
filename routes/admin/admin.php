<?php
/**
 * Created by PhpStorm.
 * User: Trung Pham
 * Date: 1/12/2021
 * Time: 12:14 AM
 */

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function() {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin');
//    Route::get('/', [
//            'as'=> 'admin',
//            'uses' =>'Admin\DasboardController@showLoginForm '
//        ]
//    );

//    Route::get('/login', function () {
//        return view('auth.login');
//    });

//    Route::get('/login', function () {
//        return view('auth.login');
//    })->name('admin_login');

});