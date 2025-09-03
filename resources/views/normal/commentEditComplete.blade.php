@extends('layouts.headFoot')
@section('title','コメント変更完了画面')
@section('main')
<meta http-equiv="refresh" content="2;url={{ route('bookshow', ['id' => $book_id]) }}">
<link rel="stylesheet" href="{{ asset('css/DeleteComplete and Ebit.css') }}">
    <h1>コメントが正常に変更されました。</h1>
    <!-- <p>名前：{{ $comment->user->emp_name }}</p>
    <p>コメント：{{ $comment->comment }}</p> -->

    {{-- metaの中で2,3秒後に本の詳細画面normal.bookDetailに戻ります --}}
@endsection
