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
    <p>本当に削除しますか？</p>

    {{-- <form action="/nomal/commentDeleteComplete" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $record->id }}"readonly><br>
    本id{{$recprd ->id}} <br>
    投稿者<input type="text" name="user_name" value="{{ $record->user_name }}"readonly><br>
    コメント<textarea name="comment" readonly>{{$record->comment}}</textarea><br>
    </form> --}}

    <form action="/normal/commentDeleteComplete" method="post">
        @csrf
    <!-- 削除ボタン -->
     {{-- <input type="hidden" name="comment_id" value="{{ $comment->id }}"> --}}
    <input type="submit" value="削除" class="btn btn-danger">
    </form>
      
</body>
</html>