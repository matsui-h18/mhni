@extends('layouts.headFoot')
@section('title','本の新規登録')
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

    .newData{
        margin:50px;
    }
</style>
<meta http-equiv="refresh" content="2;url={{ route('admin.index2') }}">

    <h1>新規登録が完了しました</h1>
    <div class="newData">
        <p>{{$book_name}}</p>
        <p>{{$author}}</p>
        <p>{{$pub_date}}</p>
        <p>{{$isbn}}</p>
    </div>
@endsection
