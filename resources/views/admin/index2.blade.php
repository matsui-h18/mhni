@extends('layouts.headFoot')
@section('title','書籍新規登録')
@section('main')
<link rel="stylesheet" href="{{ asset('css/index2.css') }}">

<div id="new_btn">
    <a href="{{ route('newBook') }}"><button class="btn btn-primary new-book-btn">新規登録</button></a>
</div>

@foreach ($books as $book)
<div class="book-table">
    <!-- 左側：画像とテキスト -->
<a href="{{ route('bookDetail', ['id' => $book->id])}}">
  <div class="book-table">
    <div class="book-info">
        @if ($book->image)
        <img src="{{ $book->image }}" alt="本の画像" class="image-display">
        @else
        <img src="https://via.placeholder.com/100x120.png?text=Book" alt="本の画像" class="image-display">
        @endif
      <div class="">
        <h1>{{ $book->book_name }}</h1>
        {{ $book->author }}<br>
        {{ $book->pub_date }}<br>
      </div>
    </div>
  </div>
</a>

    <!-- 右側：ボタン -->
    <div class="button-area">
        <a href="{{ route('bookEdit') }}"><button class="btn btn-primary edit-btn">編集</button></a>
        <a href="{{ route('bookDelete') }}"><button class="btn btn-primary del-btn">削除</button>
    </div>
</div>
@endforeach


@endsection
