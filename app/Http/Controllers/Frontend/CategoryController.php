<?php

namespace App\Http\Controllers\Frontend;

use App\Book;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    protected $category;
    protected $book;
    const FILTER_PARAM = ['type', 'order', 'greater', 'lesser', 'full', 'hot'];
    public function __construct(
        Category $category,
        Book $book
    ) {
        $this->category = $category;
        $this->book = $book;
    }

    public function getList()
    {
        return $this->category->all();
    }

    public function show($key = null)
    {
        if ($key) {
            $category = $this->category->where('url_key', $key)->first();
            if ($category) {
                $books = $category->book()->latest()->paginate(5);
                return view('frontend.category', compact('category', 'books'));
            }
        }
        abort(404);
    }

    public function filter(Request $request)
    {
        $params = [];
        $paramString = '/?';
        foreach (self::FILTER_PARAM as $param) {
            if($request->has($param)) {
                $params[$param] = $request->$param;
            }
        }
        foreach ($params as $key => $value) {
            $paramString .= $key.'='.$value.'&';
        }
        $paramString = trim($paramString, '&');
        return redirect('/loc_truyen/'.$paramString);

    }
    public function showFilter(Request $request)
    {
        foreach (self::FILTER_PARAM as $param) {
            if ($request->has($param)) {
                $params[$param] = $request->$param;
            }
        }
        $listBook = DB::table('books');
        $listBook->joinSub('select book_id, count(*)as counts from chapters group by book_id', 'count_chapter','count_chapter.book_id', '=', 'books.id');
        $listBook->addSelect(['count_chapter.counts as counts', 'books.*']);
        if (isset($params['greater']) && ($params['greater'] || $params['greater'] == 0)) {
            $listBook->where('counts', '>', $params['greater']);
        }
        if (isset($params['lesser']) && $params['lesser']) {
            $listBook->where('counts', '<', $params['lesser']);
        }
        if (isset($params['type']) && $params['type']) {
            $listBook->where('category_id', '=',$params['type']);
        }
        $collection = $listBook->get();
        $bookIds = [];
        foreach ($collection as $book) {
            $bookIds[] = $book->id;
        }
        $books = $this->book->whereIn('id', $bookIds)->latest()->paginate(100);
        if(isset($params['type'])) {
            $category = $this->category->find($params['type']);
        } else {
            $category = $this->category->find(1);
        }
        return view('frontend.category', compact('category', 'books', 'params'));
    }
}
