<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct()
    {
    }

    public function show()
    {
        return view('frontend.category');
    }
}
