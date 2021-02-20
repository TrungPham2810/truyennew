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
        Route::get('/createchapter/{id}', [
                'as'=> 'admin.books.createchapter',
                'uses' =>'Admin\BookController@createChapter'
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

    Route::group(['prefix' => 'chapter'], function () {
        Route::get('/', [
                'as'=> 'admin.chapter.index',
                'uses' =>'Admin\ChapterController@index',
            ]
        );
        Route::get('/create', [
                'as'=> 'admin.chapter.create',
                'uses' =>'Admin\ChapterController@create'
            ]
        );
        Route::post('/store', [
                'as'=> 'admin.chapter.store',
                'uses' =>'Admin\ChapterController@store'
            ]
        );
        Route::get('/edit/{id}', [
                'as'=> 'admin.chapter.edit',
                'uses' =>'Admin\ChapterController@edit'
            ]
        );
        Route::post('/update/{id}', [
                'as'=> 'admin.chapter.update',
                'uses' =>'Admin\ChapterController@update'
            ]
        );

        Route::get('/delete/{id}', [
                'as'=> 'admin.chapter.delete',
                'uses' =>'Admin\ChapterController@delete'
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
    Route::group(['prefix' => 'user'], function () {
        Route::get('/', [
                'as'=> 'admin.user.index',
                'uses' =>'Admin\UserController@index'
            ]
        );
        Route::get('/create', [
                'as'=> 'admin.user.create',
                'uses' =>'Admin\UserController@create'
            ]
        );
        Route::post('/store', [
                'as'=> 'admin.user.store',
                'uses' =>'Admin\UserController@store'
            ]
        );
        Route::get('/edit/{id}', [
                'as'=> 'admin.user.edit',
                'uses' =>'Admin\UserController@edit'
            ]
        );
        Route::post('/update/{id}', [
                'as'=> 'admin.user.update',
                'uses' =>'Admin\UserController@update'
            ]
        );

        Route::get('/delete/{id}', [
                'as'=> 'admin.user.delete',
                'uses' =>'Admin\UserController@delete'
            ]
        );
    });

    Route::group(['prefix' => 'rule'], function () {
        Route::get('/', [
                'as'=> 'admin.rule.index',
                'uses' =>'Admin\RuleController@index'
            ]
        );
        Route::get('/create', [
                'as'=> 'admin.rule.create',
                'uses' =>'Admin\RuleController@create'
            ]
        );
        Route::post('/store', [
                'as'=> 'admin.rule.store',
                'uses' =>'Admin\RuleController@store'
            ]
        );
        Route::get('/edit/{id}', [
                'as'=> 'admin.rule.edit',
                'uses' =>'Admin\RuleController@edit'
            ]
        );
        Route::post('/update/{id}', [
                'as'=> 'admin.rule.update',
                'uses' =>'Admin\RuleController@update'
            ]
        );

        Route::get('/delete/{id}', [
                'as'=> 'admin.rule.delete',
                'uses' =>'Admin\RuleController@delete'
            ]
        );
    });

    Route::group(['prefix' => 'role'], function () {
        Route::get('/', [
                'as'=> 'admin.role.index',
                'uses' =>'Admin\RoleController@index'
            ]
        );
        Route::get('/create', [
                'as'=> 'admin.role.create',
                'uses' =>'Admin\RoleController@create'
            ]
        );
        Route::post('/store', [
                'as'=> 'admin.role.store',
                'uses' =>'Admin\RoleController@store'
            ]
        );
        Route::get('/edit/{id}', [
                'as'=> 'admin.role.edit',
                'uses' =>'Admin\RoleController@edit'
            ]
        );
        Route::post('/update/{id}', [
                'as'=> 'admin.role.update',
                'uses' =>'Admin\RoleController@update'
            ]
        );

        Route::get('/delete/{id}', [
                'as'=> 'admin.role.delete',
                'uses' =>'Admin\RoleController@delete'
            ]
        );
    });


});