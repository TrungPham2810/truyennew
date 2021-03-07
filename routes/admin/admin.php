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
                'middleware'=>'can:list_category'
            ]
        );
        Route::get('/create', [
                'as'=> 'admin.categories.create',
                'uses' =>'Admin\CategoryController@create',
                'middleware'=>'can:add_category'
            ]
        );
        Route::post('/store', [
                'as'=> 'admin.categories.store',
                'uses' =>'Admin\CategoryController@store',
                'middleware'=>'can:add_category'
            ]
        );
        Route::get('/edit/{id}', [
                'as'=> 'admin.categories.edit',
                'uses' =>'Admin\CategoryController@edit',
                'middleware'=>'can:edit_category'
            ]
        );
        Route::post('/update/{id}', [
                'as'=> 'admin.categories.update',
                'uses' =>'Admin\CategoryController@update',
                'middleware'=>'can:edit_category'
            ]
        );

        Route::get('/delete/{id}', [
                'as'=> 'admin.categories.delete',
                'uses' =>'Admin\CategoryController@delete',
            ]
        );
    });
    Route::group(['prefix' => 'tags'], function () {
        Route::get('/', [
                'as'=> 'admin.tags.index',
                'uses' =>'Admin\TagController@index',
                'middleware'=>'can:list_tag'
            ]
        );
        Route::get('/create', [
                'as'=> 'admin.tags.create',
                'uses' =>'Admin\TagController@create',
                'middleware'=>'can:create_tag'
            ]
        );
        Route::post('/store', [
                'as'=> 'admin.tags.store',
                'uses' =>'Admin\TagController@store',
                'middleware'=>'can:create_tag'
            ]
        );
        Route::get('/edit/{id}', [
                'as'=> 'admin.tags.edit',
                'uses' =>'Admin\TagController@edit',
                'middleware'=>'can:edit_tag'
            ]
        );
        Route::post('/update/{id}', [
                'as'=> 'admin.tags.update',
                'uses' =>'Admin\TagController@update',
                'middleware'=>'can:edit_tag'
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
                'middleware'=>'can:list_author'
            ]
        );
        Route::get('/create', [
                'as'=> 'admin.author.create',
                'uses' =>'Admin\AuthorController@create',
                'middleware'=>'can:create_author'
            ]
        );
        Route::post('/store', [
                'as'=> 'admin.author.store',
                'uses' =>'Admin\AuthorController@store',
                'middleware'=>'can:create_author'
            ]
        );
        Route::get('/edit/{id}', [
                'as'=> 'admin.author.edit',
                'uses' =>'Admin\AuthorController@edit',
                'middleware'=>'can:edit_author'
            ]
        );
        Route::post('/update/{id}', [
                'as'=> 'admin.author.update',
                'uses' =>'Admin\AuthorController@update',
                'middleware'=>'can:edit_author'
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
                'middleware'=>'can:list_book'
            ]
        );
        Route::get('/create', [
                'as'=> 'admin.books.create',
                'uses' =>'Admin\BookController@create',
                'middleware'=>'can:create_book'
            ]
        );
        Route::get('/createchapter/{id}', [
                'as'=> 'admin.books.createchapter',
                'uses' =>'Admin\BookController@createChapter',
                'middleware'=>'can:create_chapter'
            ]
        );
        Route::post('/store', [
                'as'=> 'admin.books.store',
                'uses' =>'Admin\BookController@store',
                'middleware'=>'can:create_book'
            ]
        );
        Route::get('/edit/{id}', [
                'as'=> 'admin.books.edit',
                'uses' =>'Admin\BookController@edit',
                'middleware'=>'can:edit_book'
            ]
        );
        Route::post('/update/{id}', [
                'as'=> 'admin.books.update',
                'uses' =>'Admin\BookController@update',
                'middleware'=>'can:edit_book'
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
                'middleware'=>'can:list_chapter'
            ]
        );
        Route::get('/create', [
                'as'=> 'admin.chapter.create',
                'uses' =>'Admin\ChapterController@create',
                'middleware'=>'can:create_chapter'
            ]
        );
        Route::post('/store', [
                'as'=> 'admin.chapter.store',
                'uses' =>'Admin\ChapterController@store',
                'middleware'=>'can:create_chapter'
            ]
        );
        Route::get('/edit/{id}', [
                'as'=> 'admin.chapter.edit',
                'uses' =>'Admin\ChapterController@edit',
                'middleware'=>'can:edit_chapter'
            ]
        );
        Route::post('/update/{id}', [
                'as'=> 'admin.chapter.update',
                'uses' =>'Admin\ChapterController@update',
                'middleware'=>'can:edit_chapter'
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
                'middleware'=>'can:list_translator'
            ]
        );
        Route::get('/create', [
                'as'=> 'admin.translator.create',
                'uses' =>'Admin\TranslatorController@create',
                'middleware'=>'can:create_translator'
            ]
        );
        Route::post('/store', [
                'as'=> 'admin.translator.store',
                'uses' =>'Admin\TranslatorController@store',
                'middleware'=>'can:create_translator'
            ]
        );
        Route::get('/edit/{id}', [
                'as'=> 'admin.translator.edit',
                'uses' =>'Admin\TranslatorController@edit',
                'middleware'=>'can:edit_translator'
            ]
        );
        Route::post('/update/{id}', [
                'as'=> 'admin.translator.update',
                'uses' =>'Admin\TranslatorController@update',
                'middleware'=>'can:edit_translator'
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
                'uses' =>'Admin\UserController@index',
                'middleware'=>'can:list_user'
            ]
        );
        Route::get('/create', [
                'as'=> 'admin.user.create',
                'uses' =>'Admin\UserController@create',
                'middleware'=>'can:create_user'
            ]
        );
        Route::post('/store', [
                'as'=> 'admin.user.store',
                'uses' =>'Admin\UserController@store',
                'middleware'=>'can:create_user'
            ]
        );
        Route::get('/edit/{id}', [
                'as'=> 'admin.user.edit',
                'uses' =>'Admin\UserController@edit',
                'middleware'=>'can:edit_user'
            ]
        );
        Route::post('/update/{id}', [
                'as'=> 'admin.user.update',
                'uses' =>'Admin\UserController@update',
                'middleware'=>'can:edit_user'
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
                'uses' =>'Admin\RuleController@index',
                'middleware'=>'can:list_rule'
            ]
        );
        Route::get('/create', [
                'as'=> 'admin.rule.create',
                'uses' =>'Admin\RuleController@create',
                'middleware'=>'can:create_rule'
            ]
        );
        Route::post('/store', [
                'as'=> 'admin.rule.store',
                'uses' =>'Admin\RuleController@store',
                'middleware'=>'can:create_rule'
            ]
        );
        Route::get('/edit/{id}', [
                'as'=> 'admin.rule.edit',
                'uses' =>'Admin\RuleController@edit',
                'middleware'=>'can:edit_rule'
            ]
        );
        Route::post('/update/{id}', [
                'as'=> 'admin.rule.update',
                'uses' =>'Admin\RuleController@update',
                'middleware'=>'can:edit_rule'
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
                'uses' =>'Admin\RoleController@index',
                'middleware'=>'can:list_role'
            ]
        );
        Route::get('/create', [
                'as'=> 'admin.role.create',
                'uses' =>'Admin\RoleController@create',
                'middleware'=>'can:create_role'
            ]
        );
        Route::post('/store', [
                'as'=> 'admin.role.store',
                'uses' =>'Admin\RoleController@store',
                'middleware'=>'can:create_role'
            ]
        );
        Route::get('/edit/{id}', [
                'as'=> 'admin.role.edit',
                'uses' =>'Admin\RoleController@edit',
//                'middleware'=>'can:edit_role'
            ]
        );
        Route::post('/update/{id}', [
                'as'=> 'admin.role.update',
                'uses' =>'Admin\RoleController@update',
//                'middleware'=>'can:edit_role'
            ]
        );

        Route::get('/delete/{id}', [
                'as'=> 'admin.role.delete',
                'uses' =>'Admin\RoleController@delete'
            ]
        );
    });


});