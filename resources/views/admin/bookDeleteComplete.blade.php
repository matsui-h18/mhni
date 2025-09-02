@extends('layouts.headFoot')
@section('title','本の情報削除完了画面')
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

    .delData{
        margin:50px;
    }
</style>
<meta http-equiv="refresh" content="2;url={{ route('backToIndex2') }}">

    <h1>削除が完了しました</h1>
    <div class="delData">
        <p>ほんのなまえ</p>
        <p>ちょしゃ</p>
        <p>しゅっぱんび</p>
        <p>ISBN</p>
    </div>
@endsection