@extends('layouts.headFoot')
@section('title','コメントの削除')
@section('main')

    <h1>コメント削除</h1>
    <p>本当に削除しますか？</p>

    {{-- <form action="{{ route('comdel') }}" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $record->id }}" readonly><br>
    本id{{$recprd ->id}} <br>
    投稿者<input type="text" name="user_name" value="{{ $record->user_name }}" readonly><br>
    コメント<textarea name="comment" readonly>{{$record->comment}}</textarea><br>
    </form> --}}

    <div style="display: flex; gap: 10px;">
        <form action="{{ route('comdel') }}" method="post">
            @csrf
            <input type="hidden" name="comment_id" value="{{ $comment->id }}">
            <input type="hidden" name="book_id" value="{{ $book_id }}">
            <input type="submit" value="削除" class="btn btn-danger">
        </form>

        <a href="{{ route('bookDetail', ['id' => $book_id]) }}" class="btn btn-secondary">戻る</a>

    </div>
    @endsection

