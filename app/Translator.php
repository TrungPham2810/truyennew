<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Translator extends Model
{
    protected $guarded = [];

    public function chapter()
    {
        return $this->hasMany(Chapter::class, 'translator_id');
    }
}
