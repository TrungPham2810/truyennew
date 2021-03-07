<?php

namespace App\Http\Controllers;

use App\AuthorizationRule;
use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestController extends Controller
{
    protected $rule;
    protected $book;
    public function __construct(
        AuthorizationRule $rule,
        Book $book
    ) {
        $this->rule = $rule;
        $this->book = $book;
    }

    public function index()
    {
//        $rules = $this->rule->all();
////        return view('test', compact('rules'));
        $books = $this->book->all();
        $id = 1;
        $xx= time();
        echo date('Y-m-d H:i:s', $xx);
//        foreach ($books as $book) {
//            $x = 1;
//            $bookId = $book->id;
//            while ($x <= 20) {
//                $date = date('Y-m-d H:i:s', $xx);
//
//                $content = Str::random(32);
//                if(($id - 1) == 0 || $x == 1) {
//                    $previous = 'null';
//                } else {
//                    $previous = $id - 1;
//                }
//                echo "($id, 'Chuong $x', 'chuong-$x', '$content', $bookId, $previous, 2, '$date', '$date'),";
//                echo "<br>";
//                $x++;
//                $id++;
//                $xx += 60;
//            }
//        }
    }
}
