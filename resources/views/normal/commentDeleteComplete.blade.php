@extends('layouts.headFoot')
@section('title','データの削除')
@section('main')
<meta http-equiv="refresh" content="2;url={{ route('bookshow', ['id' => $book_id]) }}">
    <h1>コメントが正常に削除されました。</h1>
    {{-- metaの中で2,3秒後に本の詳細画面normal.bookDetailに戻ります --}}
    @endsection
</body>
</html>
