@extends('layouts.headFoot')
@section('title','タイトル設定する')
@section('main')

<link rel="stylesheet" href="{{ asset('css/newBook.css') }}">


<!-- コメント編集画面 -->

<h1>コメント変更画面</h1>

<div class="info">
    @csrf
    <!-- 変更ボタンとデータベースから既存コメントを引用して表示-->
    <form action="{{ route('editComp') }}" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$comment->id}}"><br>
        <input type="hidden" name="book_id" value="{{ $book_id }}">
        投稿者<input type="text" name="user_name" value="{{$comment->user->emp_name}}" readonly><br>
        コメント<textarea name="comment" class="form-control" required>{{ old('comment', $comment->comment) }}</textarea>
        <br>
</div>
<div class="button-group">
    <input type="submit" id="button" value="変更" class="btn btn-primary new-book-btn">

    </form>
    <a href="{{ route('bookDetail', ['id' => $book_id]) }}" class="btn btn-secondary new-book-btn">戻る</a>
</div>
@endsection
