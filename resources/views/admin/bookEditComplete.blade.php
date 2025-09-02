@extends('layouts.headFoot')
@section('title','本の情報変更完了画面')
@section('main')
<style>


    h1{
        text-align:center;
        margin-top: 50px;
        margin-bottom: 50px;
    }

    p{
        text-align:center;
        font-size:30px;
    }

    .editData{
        margin:50px;
    }
</style>
<meta http-equiv="refresh" content="2;url={{ route('support')}}">

    <h1>変更が完了しました</h1>
    <div class="editData">
        <p>{{ $book_name }}</p>
        <p>{{ $author }}</p>
        <p>{{ $pub_date }}</p>
        <p>{{ $isbn }}</p>
    </div>
@endsection
