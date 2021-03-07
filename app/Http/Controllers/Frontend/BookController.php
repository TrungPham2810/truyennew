<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Book;
use App\Category;

class BookController extends Controller
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

    public function show($urlKey = null)
    {
        if ($urlKey) {
            $book = $this->book->where('url_key', $urlKey)->first();
            if ($book) {
                $chapters = $book->chapter()->paginate(6);
                return view('frontend.book', compact('chapters', 'book'));
            }
        }
        abort(404);
    }

    public function getListChapter(Request $request)
    {
        $bookId = $request->bookId;
        $chapterId = $request->chapterId;
        if ($bookId) {
            try {
                $html = '';
                $book = $this->book->find($bookId);
                if($book) {
                    $chapters = $book->chapter;
                    if ($chapters->count()) {
                        $html .= '<select class="list_chapter">';
                        foreach ($chapters as $chapter) {
                            $name = str_replace('-', ' ',$chapter->url_key);
                            if($chapter->id == $chapterId) {
                                $html.= '<option value="'.$chapter->getFullUrl().'" selected>'.ucfirst($name).'</option>';
                            } else {
                                $html.= '<option value="'.$chapter->getFullUrl().'">'.ucfirst($name).'</option>';
                            }
                        }
                        $html .= '</select>';
                    }
                }
                return response()->json([
                    'code' => 200,
                    'html' => $html
                ], 200);

            } catch (\Exception $e) {
                return response()->json([
                    'code' => 500,
                ]);
            }
        } else {
            return response()->json([
                'code' => 500,
            ]);
        }
    }
}
