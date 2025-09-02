@extends('layouts.headFoot')
@section('title','本の情報削除')
@section('main')
<link rel="stylesheet" href="{{ asset('css/newBook.css') }}">
    <h1>削除画面</h1>

    <form  action="/admin/bookDeleteComplete" method="POST" >
        @csrf

        <div class="info">
            <p>
                本の名前：{{ $book->book_name }}
            </p>
        <br>
            <p>
                著者：
                {{ $book->author }}
            </p>
        <br>
            <p>
                出版日：
             {{ $book->pub_date }}
            </p>
        <br>
            <p>
                ISBN（13桁）：
                {{ $book->isbn }}
            </p>
        </div>

        <h1>本当に削除しますか？</h1>
      <div class="button-group">
    <a href="{{ route('bookDeleteComplete',['id' => $book->id]) }}" class="btn btn-primary new-book-btn">はい</a>
    <a href="{{ route('support') }}" class="btn btn-secondary new-book-btn">いいえ</a>
</div>

    </form>

@endsection
