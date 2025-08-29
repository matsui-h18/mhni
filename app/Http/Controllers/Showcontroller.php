<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Showcontroller extends Controller
{
    public function index(){

        $data = [
            // 全レコードを取得するモデル内のメソッドを実行し保存
            'records' => Article::all()
        ];

        return view('normal.bookDetail', $data);
    }
}
