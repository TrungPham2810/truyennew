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

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', [
                'as'=> 'admin.categories.index',
                'uses' =>'Admin\CategoryController@index',
            ]
        );
        Route::get('/create', [
                'as'=> 'admin.categories.create',
                'uses' =>'Admin\CategoryController@create'
            ]
        );
        Route::post('/store', [
                'as'=> 'admin.categories.store',
                'uses' =>'Admin\CategoryController@store'
            ]
        );
        Route::get('/edit/{id}', [
                'as'=> 'admin.categories.edit',
                'uses' =>'Admin\CategoryController@edit'
            ]
        );
        Route::post('/update/{id}', [
                'as'=> 'admin.categories.update',
                'uses' =>'Admin\CategoryController@update'
            ]
        );

        Route::get('/delete/{id}', [
                'as'=> 'admin.categories.delete',
                'uses' =>'Admin\CategoryController@delete'
            ]
        );
    });
    Route::group(['prefix' => 'tags'], function () {
        Route::get('/', [
                'as'=> 'admin.tags.index',
                'uses' =>'Admin\TagController@index',
            ]
        );
        Route::get('/create', [
                'as'=> 'admin.tags.create',
                'uses' =>'Admin\TagController@create'
            ]
        );
        Route::post('/store', [
                'as'=> 'admin.tags.store',
                'uses' =>'Admin\TagController@store'
            ]
        );
        Route::get('/edit/{id}', [
                'as'=> 'admin.tags.edit',
                'uses' =>'Admin\TagController@edit'
            ]
        );
        Route::post('/update/{id}', [
                'as'=> 'admin.tags.update',
                'uses' =>'Admin\TagController@update'
            ]
        );

        Route::get('/delete/{id}', [
                'as'=> 'admin.tags.delete',
                'uses' =>'Admin\TagController@delete'
            ]
        );
    });
    Route::group(['prefix' => 'author'], function () {
        Route::get('/', [
                'as'=> 'admin.author.index',
                'uses' =>'Admin\AuthorController@index',
            ]
        );
        Route::get('/create', [
                'as'=> 'admin.author.create',
                'uses' =>'Admin\AuthorController@create'
            ]
        );
        Route::post('/store', [
                'as'=> 'admin.author.store',
                'uses' =>'Admin\AuthorController@store'
            ]
        );
        Route::get('/edit/{id}', [
                'as'=> 'admin.author.edit',
                'uses' =>'Admin\AuthorController@edit'
            ]
        );
        Route::post('/update/{id}', [
                'as'=> 'admin.author.update',
                'uses' =>'Admin\AuthorController@update'
            ]
        );

        Route::get('/delete/{id}', [
                'as'=> 'admin.author.delete',
                'uses' =>'Admin\AuthorController@delete'
            ]
        );
    });
    Route::group(['prefix' => 'books'], function () {
        Route::get('/', [
                'as'=> 'admin.books.index',
                'uses' =>'Admin\BookController@index',
            ]
        );
        Route::get('/create', [
                'as'=> 'admin.books.create',
                'uses' =>'Admin\BookController@create'
            ]
        );
        Route::post('/store', [
                'as'=> 'admin.books.store',
                'uses' =>'Admin\BookController@store'
            ]
        );
        Route::get('/edit/{id}', [
                'as'=> 'admin.books.edit',
                'uses' =>'Admin\BookController@edit'
            ]
        );
        Route::post('/update/{id}', [
                'as'=> 'admin.books.update',
                'uses' =>'Admin\BookController@update'
            ]
        );

        Route::get('/delete/{id}', [
                'as'=> 'admin.books.delete',
                'uses' =>'Admin\BookController@delete'
            ]
        );
    });

    Route::group(['prefix' => 'chap'], function () {
        Route::get('/', [
                'as'=> 'admin.chap.index',
                'uses' =>'Admin\ChapController@index',
            ]
        );
        Route::get('/create', [
                'as'=> 'admin.chap.create',
                'uses' =>'Admin\ChapController@create'
            ]
        );
        Route::post('/store', [
                'as'=> 'admin.chap.store',
                'uses' =>'Admin\ChapController@store'
            ]
        );
        Route::get('/edit/{id}', [
                'as'=> 'admin.chap.edit',
                'uses' =>'Admin\ChapController@edit'
            ]
        );
        Route::post('/update/{id}', [
                'as'=> 'admin.chap.update',
                'uses' =>'Admin\ChapController@update'
            ]
        );

        Route::get('/delete/{id}', [
                'as'=> 'admin.chap.delete',
                'uses' =>'Admin\ChapController@delete'
            ]
        );
    });

    Route::group(['prefix' => 'translator'], function () {
        Route::get('/', [
                'as'=> 'admin.translator.index',
                'uses' =>'Admin\TranslatorController@index',
            ]
        );
        Route::get('/create', [
                'as'=> 'admin.translator.create',
                'uses' =>'Admin\TranslatorController@create'
            ]
        );
        Route::post('/store', [
                'as'=> 'admin.translator.store',
                'uses' =>'Admin\TranslatorController@store'
            ]
        );
        Route::get('/edit/{id}', [
                'as'=> 'admin.translator.edit',
                'uses' =>'Admin\TranslatorController@edit'
            ]
        );
        Route::post('/update/{id}', [
                'as'=> 'admin.translator.update',
                'uses' =>'Admin\TranslatorController@update'
            ]
        );

        Route::get('/delete/{id}', [
                'as'=> 'admin.translator.delete',
                'uses' =>'Admin\TranslatorController@delete'
            ]
        );
    });
});