<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index()
    {
        $data = [
            'records' => Book::all()
        ];
        return view('normal.index', $data);
    }

}
