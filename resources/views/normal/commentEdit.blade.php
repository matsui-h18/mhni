@extends('layouts.headFoot')
@section('title','タイトル設定する')
@section('main')
<style>
    body{
        text-align:center;
    }

    .btn btn-primary{
        font-size:50px;
        padding:10px;
        padding-left:100px;
        padding-right:100px;
    }
</style>

<!-- コメント編集画面 -->

<h1>コメント変更画面</h1>

<div class="edit_del_btn" style="display: flex; gap: 10px;">
    <!-- 変更ボタンとデータベースから既存コメントを引用して表示-->
    <form action="{{ route('editComp') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$comment->id}}"><br>
        <input type="hidden" name="book_id" value="{{ $book_id }}">
    投稿者<input type="text" name="user_name" value="{{$comment->user->emp_name}}" readonly><br>
    コメント<textarea name="comment" class="form-control" required>{{ old('comment', $comment->comment) }}</textarea>
        <input type="submit" value="変更" class="btn btn-warning">
    </form>

</div>

@endsection
