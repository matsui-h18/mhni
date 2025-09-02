<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Comment;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index()
    {
        $data = [
            'records' => Book::all()
        ];
        return view('normal.index3', $data);
    }

    public function search(){
        return view('admin.isbn');
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        $comments = Comment::where('book_id', $id)->get();

        return view('normal.bookDetail', [
            'book' => $book,
            'comment' => $comments,
        ]);
    }
}
