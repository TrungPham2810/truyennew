<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
Route::get('/', 'HomeController@index')->name('home');

Route::get('/the-loai/{type}', [
        'as'=> 'type.story',
        'uses' =>'CategoryController@show'
    ]
);
//Route::get('/test', function () {
//    return view('test');
//})->name('test');
Route::get('/test', [
        'as'=> 'test',
        'uses' =>'TestController@index',
    ]
);

Route::get('/book/{bookUrlKey}/{chapterUrlkey}', [
        'as'=> 'frontend.chapter',
        'uses' =>'Frontend\ChapterController@show',
    ]
);

Route::get('/book/{urlKey}', [
        'as'=> 'frontend.book',
        'uses' =>'Frontend\BookController@show',
    ]
);

Route::get('/showlistchapter', [
        'as'=> 'frontend.listchapter',
        'uses' =>'Frontend\BookController@getListChapter',
    ]
);