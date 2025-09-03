<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
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
            'comments' => $comments,
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
        $book->book_name = $req->book_name;
        $book->author = $req->author;
        $book->pub_date = $req->pub_date;
        $book->isbn = $req->isbn;

        $book->save();
        $data = [
            'id' => $req->id,
            'book_name' => $req->book_name,
            'author' => $req->author,
            'pub_date' => $req->pub_date,
            'isbn' => $req->isbn
        ];
        return view('admin.bookEditComplete', $data);
    }

    public function deleteCheck(Request $request)
    {
        $comment = Comment::find($request->comment_id);
        $book_id = $request->input('book_id');
        return view('normal.commentDelete', compact('comment', 'book_id'));
    }

    public function deleteComment(Request $request)
    {
        $comment = Comment::find($request->comment_id);
        if ($comment) {
            $comment->delete();
            $book_id = $request->input('book_id');
            return view('normal.commentDeleteComplete', compact('book_id'));
        } else {
            return redirect()->back()->with('error', 'コメントが見つかりません。');
        }
    }

    public function addCheck(Request $req)
    {
        $req->validate([
            'review' => 'required|in:1,2,3,4,5',
            'comment' => 'required|max:500',
            'book_id' => 'required|integer|exists:books,id',
        ]);

        $evaluation = $req->input('review');
        $comment_text = $req->input('comment');
        $book_id = $req->input('book_id');

        $comment = new Comment();
        $comment->book_id = $book_id;
        $comment->user_id = Auth::id();
        $comment->evaluation = $evaluation;
        $comment->comment = $comment_text;
        $comment->save();

        return view('normal.commentComplete', compact('comment_text', 'book_id'));
    }

    public function commentEdit(Request $request)
    {
        $comment = Comment::find($request->comment_id);
        $book_id = $request->input('book_id');
        return view('normal.commentEdit', compact('comment', 'book_id'));
    }

    public function updateComment(Request $request)
    {
        $request->validate([
            'user_name' => 'required|string|max:255',
            'comment' => 'required|string|max:500',
        ]);

        $comment = Comment::find($request->id);
        if ($comment) {
            $comment->comment = $request->comment;
            $comment->save();

            // 詳細画面を直接表示
            return view('normal.commentEditComplete', [
                'book_id' => $request->input('book_id'),
                'comment' => $comment,
                'success' => 'コメントが更新されました。'
            ]);
        } else {
            return redirect()->back()->with('error', 'コメントが見つかりません。')->withInput();
        }
    }

    public function research(Request $request)
    {
        $keyword = $request->input('keyword');

        $books = Book::query();

        if (!empty($keyword)) {
            $books->where('book_name', 'like', "%{$keyword}%")
                ->orWhere('author', 'like', "%{$keyword}%");
        }

        return view('book.index', ['books' => $books->get()]);
    }
}
