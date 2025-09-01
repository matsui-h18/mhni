<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Comment;

class NormalDbController extends Controller
{
    public function showBookDetail()
    {
        // $book = Book::findOrFail(1); // id=1 の本
        // return view('bookDetail', ['book' => $book]);
    }

    //     public function showComment()
    // {
    //     $comment = Comments::findOrFail(1);
    //     return view('bookDetail', ['comment' => $comment]);
    // }
}
