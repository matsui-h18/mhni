@extends('layouts.headFoot')
@section('title','データの削除')
@section('main')
<meta http-equiv="refresh" content="2;url={{ route('bookshow', ['id' => $book_id]) }}">
<link rel="stylesheet" href="{{ asset('css/DeleteComplete and Ebit.css') }}">
    <h1 style=" text-align:center">コメントが正常に削除されました。</h1>
    <p style="margin-bottom: 500px;"></p>
    {{-- metaの中で2,3秒後に本の詳細画面normal.bookDetailに戻ります --}}
    @endsection
</body>
</html>
