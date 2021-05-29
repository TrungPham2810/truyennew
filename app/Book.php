<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = [];
    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tag_books', 'book_id', 'tag_id')->withTimestamps();
    }

    public function bookParent()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }

    public function chapter()
    {
        return $this->hasMany(Chapter::class, 'book_id');
    }

    public function lastestChapter()
    {
        $lastestChapter = $this->chapter()->orderByDesc('id')->first();
        return $lastestChapter;
    }

    public function getFullUrl($id = null)
    {
        if($id) {
            $book = $this->find($id);
            if($book) {
                return  route('frontend.book', ['urlKey'=>$book->url_key]);
            }
        } else {
            if($this->id) {
                return  route('frontend.book', ['urlKey'=>$this->url_key]);
            }
        }
        return null;
    }

    public function countChapter($id = null)
    {
        if($id) {
            return Chapter::where('book_id', $id)->count();
        } else {
            if($id = $this->id) {
                return Chapter::where('book_id', $id)->count();
            }
        }
        return null;
    }

    public function isFullBook($id = null)
    {
        if($id) {
            $book = $this->find($id);
            if($book) {
                return $book->tags->contains('id', 2);
            }
        } else {
            if($this->id) {
                return $this->tags->contains('id', 2);
            }
        }
        return false;
    }
}
