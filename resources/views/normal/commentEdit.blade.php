@extends('layouts.headFoot')
@section('title','タイトル設定する')
@section('main')
<style>
    body{
        text-align:center;
    }

    .btn btn-primary{
        font-size:50px;
        padding:10px;
        padding-left:100px;
        padding-right:100px;
    }
</style>

<!-- コメント編集画面 -->

<h1>コメント変更画面</h1>
<button type="button" class="btn btn-primary">変更</button>

@endsection