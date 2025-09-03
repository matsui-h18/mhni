@extends('layouts.headFoot')
@section('title','書籍新規登録')
@section('main')
<link rel="stylesheet" href="{{ asset('css/index2.css') }}">
<!-- 上記CSSはadmin/index2と同じなため注意 -->

@foreach ($books as $book)
<div class="book-table slide skew">
  <a href="{{ route('bookDetail', ['id' => $book->id])}}">
    <div class="book-info">
        @if ($book->image)
        <img src="{{ $book->image }}" alt="本の画像" class="image-display">
        @else
        <img src="{{ asset('img/book.jpg') }}" alt="本の画像" class="image-display">
        @endif
      <div class="book-text">
        <h1 class="bookName">{{ $book->book_name }}</h1>
        {{ $book->author }}<br>
        {{ $book->pub_date }}<br>
      </div>
    </div>
  </div>
</a>
@endforeach


@endsection
