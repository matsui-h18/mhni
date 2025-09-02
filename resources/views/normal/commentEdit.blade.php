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
<button type="button" class="btn btn-primary">変更</button>

<div class="edit_del_btn" style="display: flex; gap: 10px;">
    <!-- 変更ボタンとデータベースから既存コメントを引用して表示-->
    <form action="/normal/commentEditComplete" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$record->id}}"><br>
    投稿者<input type="text" name="user_name" value="{{$record->user_name}}"><br>
    コメント<textarea name="comment" class="form-control" required>{{ old('comment', $comment->content) }}</textarea>
        <input type="submit" value="変更" class="btn btn-warning">
    </form>

</div>

@endsection