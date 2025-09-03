@extends('layouts.headFoot')
@section('title','コメント投稿完了画面')
@section('main')
    <meta http-equiv="refresh" content="2;url={{ route('bookshow', ['id' => $book_id]) }}">
   <link rel="stylesheet" href="{{ asset('css/DeleteComplete and Ebit.css') }}">
    <div id="center">
   <h1>コメントが正常に登録されました。</h1>
   <div id="moji">自動的に一覧へ戻ります</div>
</div>    
@endsection

