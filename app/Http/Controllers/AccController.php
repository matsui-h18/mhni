<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class AccController extends Controller
{
    // データ新規登録用
    public function store(Request $req)
    {
        // nakajima
        if (Book::where('isbn', $req->isbn)->exists()) {
            return redirect()->back()->withInput()->withErrors(['isbn' => 'このISBNはすでに登録されています']);
        }

        $Book = new Book();
        $Book->book_name = $req->book_name;
        $Book->author = $req->author;
        $Book->pub_date = $req->pub_date;
        $Book->content = $req->price;
        $Book->isbn = $req->isbn;
        $Book->save();
        $data = [
            'book_name' => $req->book_name,
            'author' => $req->author,
            'pub_date' => $req->pub_date,
            'price' => $req->price,
            'isbn' => $req->isbn
        ];
        return view('admin.newBookComplete', $data);
    }

    // 全件表示用
    public function allshow()
    {
        //DBから
        $data = [
            'books' => Book::all()
        ];
        return view('admin.index2', $data);
    }
    //hayashi
    public function bookdelete($id)
    {
        $book = Book::findOrFail($id); // IDで1冊取得（存在しない場合は404）
        return view('admin.bookDelete', compact('book'));
    }

    public function erase(Request $req)
    {
        $id = $req->id;
        $data = ['books' => Book::find($id)];
        return view('admin.bookDelete', $data);
    }
    public function deleteComplete(Request $req)
    {
        $booK = Book::find($req->id);
        $booK->delete();

        return view('admin.bookDeleteComplete');
    }
}
