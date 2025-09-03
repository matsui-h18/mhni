@extends('layouts.headFoot')
@section('title','本の情報変更完了画面')
@section('main')
<meta http-equiv="refresh" content="2;url={{ route('support') }}">
<link rel="stylesheet" href="{{ asset('css/DeleteComplete and Ebit.css') }}">

<div id="center">
    <h1>変更が完了しました</h1>
    <div id="moji">自動的に一覧へ戻ります</div>
</div>    
@endsection
