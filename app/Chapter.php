<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Routing\Route;

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

    public function getFullUrl($id = null)
    {
        if($id) {
            $chapter = $this->find($id);
            if($chapter) {
                return  route('frontend.chapter', ['bookUrlKey'=>$chapter->book->url_key, 'chapterUrlkey'=>$chapter->url_key]);
            }
        } else {
            if($this->id) {
                return  route('frontend.chapter', ['bookUrlKey'=>$this->book->url_key, 'chapterUrlkey'=>$this->url_key]);
            }
        }
        return null;
    }

    public function getPreviousChap()
    {
        if($this->id && $this->previous_id) {
            $chapter = $this->find($this->previous_id);
            if($chapter) {
                return $chapter;
            }
        }
        return null;
    }

    public function getNextChap()
    {
        if($this->id) {
            $chapter = $this->where('previous_id', $this->id)->first();
            if($chapter) {
                return $chapter;
            }
        }
        return null;
    }
}
