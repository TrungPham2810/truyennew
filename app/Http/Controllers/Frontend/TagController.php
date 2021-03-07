<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    protected $tag;

    public function __construct(
        Tag $tag
    ) {
        $this->tag = $tag;
    }

    public function getList()
    {
        return $this->tag->all();
    }

    public function show($key = null)
    {
        if ($key) {
            $tag = $this->tag->where('url_key', $key)->first();
            if ($tag) {
                $books = $tag->books()->latest()->paginate(5);
                return view('frontend.tag', compact('tag', 'books'));
            }
        }
        abort(404);
    }
}
