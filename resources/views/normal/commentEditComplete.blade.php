<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="2;url={{ route('bookDetail', ['id' => $book_id]) }}">
    <title>コメント変更完了画面</title>
</head>
<body>
    <h1>コメントが正常に変更されました。</h1>
    <p>{{ $comment->user->emp_name }}</p>
    <p>{{ $comment->comment }}</p>

    {{-- metaの中で2,3秒後に本の詳細画面normal.bookDetailに戻ります --}}
</body>
</html>
