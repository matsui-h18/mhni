@extends('layouts.headFoot')
@section('title','コメントの削除')
@section('main')
<link rel="stylesheet" href="{{ asset('css/mordal.css') }}">

<div class="info">
    <h1>コメント削除</h1><br>
    <p class="mes">本当に削除しますか？</p>


    <form action="" method="post" class="form">
    @csrf
    投稿者　<input type="text" name="user_name" value="{{ $comment->user->emp_name }}" readonly><br>
    コメント<textarea name="comment" readonly>{{$comment->comment}}</textarea><br>
    </form>
</div>

    <div class="button-group">
        <form action="{{ route('comdel') }}" method="post">
            @csrf
            <input type="hidden" name="comment_id" value="{{ $comment->id }}">
            <input type="hidden" name="book_id" value="{{ $book_id }}">
            <input type="submit" value="削除" class="btn btn-primary new-book-btn">
        </form>


        <a href="{{ route('bookDetail', ['id' => $book_id]) }}" class="btn btn-secondary new-book-btn">戻る</a>
</div>

    @endsection

