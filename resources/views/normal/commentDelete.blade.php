<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>コメントの削除</title>
</head>
<body>
    <h1>コメント削除</h1>
    <form action="/nomal/commentDelete" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $record->id }}"readonly><br>
    本id{{$recprd ->id}} <br>
    投稿者<input type="text" name="user_name" value="{{ $record->user_name }}"readonly><br>
    コメント<textarea name="comment" readonly>{{$record->comment}}</textarea><br>
    <input type="submit" value="削除">
    <a href="/normal/bookDetail">本の詳細画面に戻る</a>
    </form>
    
</body>
</html>