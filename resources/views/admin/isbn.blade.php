<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISBN入力</title>
</head>

<body>
    <h1>ISBN入力</h1>
    <form action="{{ route('isbnsearch') }}" method="post">
        @csrf
        ISBN<input type="text" name="isbn" id="isbn-input" pattern="\d+" inputmode="numeric"><br><br>
        <input type="submit" value="確認">
    </form>
    <br><br>
    <a href=" {{ route('support')}} ">一覧に戻る</a>
    <script>
        window.onload = function() {
            document.getElementById('isbn-input').focus();
        };
    </script>
</body>

</html>
