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
}
