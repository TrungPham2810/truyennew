<?php

namespace App\Http\Controllers;

use App\Category;
use App\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $category;
    protected $tag;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        Category $category,
        Tag $tag
    ) {
        $this->category = $category;
        $this->tag = $tag;
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categoryLayout1 = $this->tag->find(1);
        $categoryLayout2 = $this->tag->find(2);
        return view('welcome', compact('categoryLayout1', 'categoryLayout2'));
    }
}
