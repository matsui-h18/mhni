@extends('layouts.headFoot')
@section('title','本の情報削除')
@section('main')
<link rel="stylesheet" href="{{ asset('css/newBook.css') }}">
    <h1>削除画面</h1>

    <form  action="/admin/bookDeleteComplete" method="POST" >
        @csrf

        <div class="info">
            <p>
                本の名前：
                <input type="text" id="book_name" name="book_name" maxlength="50" readonly>
            </p>
        <br>
            <p>
                著者：
                <input type="text" id="author" name="author" maxlength="16" readonly>
            </p>
        <br>
            <p>
                出版日：
                <input type="date" id="pub_date" name="pub_date" readonly>
            </p>
        <br>
            <p>
                ISBN（13桁）：
                <input type="number" id="isbn" name="isbn" readonly>
            </p>
        </div>

        <h1>本当に削除しますか？</h1>
        <a href="{{ route('bookDeleteComplete') }}" class="btn btn-primary new-book-btn">はい</a>
        <a href="{{ route('backToIndex2') }}" class="btn btn-secondary new-book-btn">いいえ</a>
   
    </form>

@endsection