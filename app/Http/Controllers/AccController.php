<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class AccController extends Controller
{
    // データ新規登録用
    public function store(Request $req){
        $Book=new Book();
        $Book->book_name=$req->book_name;
        $Book->author=$req->author;
        $Book->pub_date=$req->pub_date;
        $Book->content=$req->price;
        $Book->isbn=$req->isbn;
        $Book->save();
        $data=[
            'book_name'=>$req->book_name,
            'author'=>$req->author,
            'pub_date'=>$req->pub_date,
            'price'=>$req->price,
            'isbn'=>$req->isbn];
        return view('admin.newBookComplete',$data);
    }

    // 全件表示用
    public function allshow(){
        $data=[
            'books'=>Book::all()
        ];
        return view('admin.index2',$data);
    }

    // // 本の情報編集用
    // public function edit(Request $req){
    //     $id=$req->id;
    //     $data = [
    //         // 押された
    //     ]
    //     return view('')
    // }
    // 本の情報編集用
    public function edit(Request $req){
        $id=$req->id;
        $data = [
            // 押された
        ];
        return view('');
    }
}
