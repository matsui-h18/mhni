<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="refresh" content="2;url={{ route('bookshow', ['id' => $book_id]) }}">
    <title>コメント投稿完了画面</title>
</head>
<body>
    <h1>コメントが正常に登録されました。</h1>
    <p>{{ $comment_text }}</p>



</body>
</html>
