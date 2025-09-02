@extends('layouts.headFoot')
@section('title','書籍新規登録')
@section('main')
<link rel="stylesheet" href="{{ asset('css/index2.css') }}">
<!-- 上記CSSはadmin/index2と同じなため注意 -->

@foreach ($books as $book)
<a href="{{ route('bookDetail', ['id' => $book->id])}}">
  <div class="book-table">
    <div class="book-info">
      <img src="https://via.placeholder.com/100x120.png?text=Book" alt="本の画像" class="image-display">
      <div class="book-text">
        <h1>{{ $book->book_name }}</h1>
        {{ $book->author }}<br>
        {{ $book->pub_date }}<br>
      </div>
    </div>
  </div>
</a>
@endforeach


@endsection