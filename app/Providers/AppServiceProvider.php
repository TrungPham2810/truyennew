<?php

namespace App\Providers;

use function GuzzleHttp\Promise\all;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Category;
use App\Tag;

class AppServiceProvider extends ServiceProvider
{
    protected $category;
    protected $tag;

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $category = new Category();
        $categoryList = $category->all();
        $tag = new Tag();
        $tagList = $tag->all();
        View::share('categoryList', $categoryList);
        View::share('tagList', $tagList);
    }
}
