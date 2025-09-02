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

    public function search()
    {
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

    public function edit($id)
    {
        if (!(empty($id))) {
            $book = Book::find($id);
            return view('admin.bookEdit', ['book' => $book]);
        } else {
            return redirect()->back();
        }
    }

    public function update(Request $req)
    {
        $book = Book::find($req->id);
        $book -> book_name = $req->book_name;
        $book -> author = $req->author;
        $book -> pub_date = $req->pub_date;
        $book -> isbn = $req->isbn;

        $book -> save();
        $data = [
            'id' => $req->id,
            'book_name' => $req->book_name,
            'author' => $req->author,
            'pub_date' => $req->pub_date,
            'isbn' => $req->isbn
        ];
        return view('admin.bookEditComplete', $data);
    }
}
