@extends('layouts.headFoot')
@section('title','本の情報変更')
@section('main')
<link rel="stylesheet" href="{{ asset('css/newBook.css') }}">
    <h1>情報変更画面</h1>

    <form  action="/admin/bookEditComplete" method="POST" >
        @csrf

        <div class="info">
            <p>
                本の名前：
                <input type="text" id="book_name" name="book_name" maxlength="50" required>
            </p>
        <br>
            <p>
                著者：
                <input type="text" id="author" name="author" maxlength="16">
            </p>
        <br>
            <p>
                出版日：
                <input type="date" id="pub_date" name="pub_date">
            </p>
        <br>
            <p>
                ISBN（13桁）：
                <input type="number" id="isbn" name="isbn" required>
            </p>
        </div>

        <a href="{{ route('bookEditComplete') }}"><input type="submit" id="button" value="変更" class="btn btn-primary new-book-btn"></a>
    </form>

@endsection