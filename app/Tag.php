<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $guarded = [];

    public function books()
    {
        return $this->belongsToMany(Book::class, 'tag_books', 'tag_id', 'book_id')->withTimestamps();
    }
}
