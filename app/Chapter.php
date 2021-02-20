<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $guarded = [];

    public function book()
    {
        return $this->belongsTo(Book::class, 'book_id');
    }

    public function translator()
    {
        return $this->belongsTo(Translator::class, 'translator_id');
    }
}
