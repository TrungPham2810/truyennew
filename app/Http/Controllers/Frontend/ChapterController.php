<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;
use App\Category;

class ChapterController extends Controller
{
    protected $category;
    protected $book;
    public function __construct(
        Category $category,
        Book $book
    ) {
        $this->category = $category;
        $this->book = $book;
    }
    public function show($bookUrlKey = null, $chapterUrlkey = null)
    {
        if($bookUrlKey && $chapterUrlkey) {
            $book = $this->book->where('url_key', $bookUrlKey)->first();
            if ($book) {
                $chapter = $book->chapter()->where('url_key', $chapterUrlkey)->first();
                return view('frontend.chapter', compact('chapter', 'book'));
            }
        }
        abort(404);
    }
}
