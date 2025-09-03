@extends('layouts.headFoot')
@section('title','ISBN入力')
@section('main')
<link rel="stylesheet" href="{{ asset('css/isbn.css') }}">

    <h1>ISBN入力</h1>
    <form action="{{ route('isbnsearch') }}" method="post">
        @csrf
        ISBN<input type="text" name="isbn" id="isbn-input" pattern="\d+" inputmode="numeric"><br><br>
        <input type="submit" value="確認">
    </form>
    <br><br>
    <a href=" {{ route('support')}} " id="backToIndex">一覧に戻る</a>
    <script>
        window.onload = function() {
            document.getElementById('isbn-input').focus();
        };
    </script>
</body>

</html>
@endsection
