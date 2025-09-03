<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Comment;
use App\Models\User;

class NormalDbController extends Controller
{

    // public function deleteComment(Request $request){
    //     $commentId = $request->input('comment_id');
    //     // コメントIDが提供されていない場合の処理
    //     if (!$commentId) {
    //         return redirect()->back()->with('error', 'コメントIDが提供されていません。');
    //     }

    //     // コメントをデータベースから削除
    //     $comment = \App\Models\Comment::find($commentId);
    //     if ($comment) {
    //         $comment->delete();
    //         return view('normal.commentDeleteComplete');
    //     } else {
    //         return redirect()->back()->with('error', 'コメントが見つかりません。');
    //     }
    // }
    // public function deleteCheck(Request $request){
    //     if($req ->isMethod('post')){
    //         $id=$req->id;
    //         $data=[
    //         'record'=> Comment::find($id)
    //         ];
    //         return view('normal.commentDelete',$data);
    //     }else{
    // // public function deleteCheck(Request $request)
    // // {
    // //     if ($req->isMethod('post')) {
    // //         $id = $req->id;
    // //         $data = [
    // //             'record' => Comment::find($id)
    // //         ];
    // //         return view('normal.commentDelete', $data);
    // //     } else {
    // //         redirect('normal/bookDetail');
    //     }
    // }

    // public function edit(Request $request)
    // {
    // // 編集画面へリダイレクト or 編集処理
    // $commentId = $request->input('comment_id');

    //編集画面にはidを受け取り、既にあるコメントを保持して表示させたいがエラーがでるのでコメントアウト

    // if($request ->isMethod('post')){
    //        $id=$request->comment_id;
    //        $data=[
    //         'comments'=> Comment::find($id)
    //        ];
    //        return view('normal.commentEdit',$data);
    //     }else{
    //         redirect('normal/bookDetail');
    //     }
    // }

    // public function deleteCheck(Request $request){
    //     if($req ->isMethod('post')){
    //         $id=$req->id;
    //         $data=[
    //         'record'=> Comment::find($id)
    //         ];
    //         return view('normal.commentDelete',$data);
    //     }else{
    // // public function deleteCheck(Request $request)
    // // {
    // //     if ($req->isMethod('post')) {
    // //         $id = $req->id;
    // //         $data = [
    // //             'record' => Comment::find($id)
    // //         ];
    // //         return view('normal.commentDelete', $data);
    // //     } else {
    // //         redirect('normal/bookDetail');
    // //     }
    // }

    // public function edit(Request $request)
    // {
    // // 編集画面へリダイレクト or 編集処理
    // $commentId = $request->input('comment_id');
    // }
    // //編集画面にはidを受け取り、既にあるコメントを保持して表示させたいがエラーがでるのでコメントアウト

    // // if($request ->isMethod('post')){
    // //        $id=$request->id;
    // //        $data=[
    // //         'record'=> Comment::find($id)
    // //        ];
    // //        return view('normal.commentDelete',$data);
    // //     }else{
    // //         redirect('normal/bookDetail');
    // //     }
    // // }
    // }

    // public function delete(Request $request)
    // {
    // // 削除画面へリダイレクトまで
    //     $commentId = $request->input('comment_id');

    // }

    // public function editComplete(Request $request)
    // {
    //     $commentId = $request->input('comment_id');
    //     $evaluation = $request->input('evaluation');
    //     $commentText = $request->input('comment');

    //     // 入力のバリデーション
    //     if (empty($evaluation) || empty($commentText)) {
    //         return redirect()->back()->with('error', 'おすすめ度の選択又はコメントが入力されていません。');
    //     }

    //     // コメントをデータベースで更新
    //     $comment = \App\Models\Comment::find($commentId);
    //     if ($comment) {
    //         $comment->evaluation = $evaluation;
    //         $comment->comment = $commentText;
    //         $comment->save();
    //         return view('normal.commentEditComplete');
    //     } else {
    //         return redirect()->back()->with('error', 'コメントが見つかりません。');
    //     }
    // }
    // public function deleteComplete(Request $request)
    // {
    //     $commentId = $request->input('comment_id');
    //     // コメントIDが提供されていない場合の処理
    //     if (!$commentId) {
    //         return redirect()->back()->with('error', 'コメントIDが提供されていません。');
    //     }

    //     // コメントをデータベースから削除
    //     $comment = \App\Models\Comment::find($commentId);
    //     if ($comment) {
    //         $comment->delete();
    //         return view('normal.commentDeleteComplete');
    //     } else {
    //         return redirect()->back()->with('error', 'コメントが見つかりません。');
    //     }
    // }
    // public function detail()
    // {
    //     $commentId = $request->input('comment_id');
    //     return view('normal.bookDetail', ['book' => $book]);
    // }




    //public function editComment(Request $request)
    // {
    //     $commentId = $request->input('comment_id');
    //     $evaluation = $request->input('evaluation');
    //     $commentText = $request->input('comment');

    //     // 入力のバリデーション
    //     if (empty($evaluation) || empty($commentText)) {
    //         return redirect()->back()->with('error', 'おすすめ度の選択又はコメントが入力されていません。');
    //     }

    //     // コメントをデータベースで更新
    //     $comment = \App\Models\Comment::find($commentId);
    //     if ($comment) {
    //         $comment->evaluation = $evaluation;
    //         $comment->comment = $commentText;
    //         $comment->save();
    //         return view('normal.commentEditComplete');
    //     } else {
    //         return redirect()->back()->with('error', 'コメントが見つかりません。');
    //     }
    // }


    // public function showBookDetail(Request $req){
    //     // POSTの場合はinputから取得
    //     if ($request->isMethod('post')) {
    //         $id = $req->id;
    //         $data = [
    //             'bookDetail' => Book::find($id)
    //         ];
    //         return view('normal.index',$data);
    //     }else{
    //         redirect('/');
    //     }
    //     //public function showBookDetail()
    //     //{
    //     // $book = Book::findOrFail(1); // id=1 の本
    //     // return view('bookDetail', ['book' => $book]);
    //     //}

    //     $book = Book::findOrFail($id);
    //     return view('normal.bookDetail', compact('book'));
    // }





    /* ☆☆☆☆☆☆☆☆☆☆ 松井編集 ☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆ */
    // 全件表示用
    public function allshow()
    {
        $data = [
            'books' => Book::all()
        ]; // book_db.books テーブルから全件取得
        return view('normal.index3', $data);
    }

    /* ☆☆☆☆☆☆☆☆☆☆ 松井編集 ☆☆☆☆☆☆☆☆☆☆☆☆☆☆☆ */
    //岩本編集　上記の松井さんのdatailshowをコメントアウトし、下記を追加
    public function detailshow($id)
    {
        $data = [
            'book' => Book::findOrFail($id), // IDで1冊取得（存在しない場合は404）
            'comments' => Comment::where('book_id', $id)->get(),
            // 平均算出
            'average' => Comment::where('book_id', $id)->avg('evaluation')
        ];

        return view('normal.bookDetail', $data);
    }
}
