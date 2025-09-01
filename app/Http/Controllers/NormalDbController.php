<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NormalDbController extends Controller
{
    public function deleteComment(Request $request)
    {
        $commentId = $request->input('comment_id');
        // コメントIDが提供されていない場合の処理
        if (!$commentId) {
            return redirect()->back()->with('error', 'コメントIDが提供されていません。');
        }

        // コメントをデータベースから削除
        $comment = \App\Models\Comment::find($commentId);
        if ($comment) {
            $comment->delete();
            return view('normal.commentDeleteComplete');
        } else {
            return redirect()->back()->with('error', 'コメントが見つかりません。');
        }
    }
    public function deleteCheck(Request $request)
        {
            if($req ->isMethod('post')){
            $id=$req->id;
           $data=[
            'record'=> Comment::find($id)
           ];
           return view('normal.commentDelete',$data);
        }else{
            redirect('normal/bookDetail');
        }

    
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

}
