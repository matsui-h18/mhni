<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>データの削除</title>
</head>
<body>
    <h1>コメント削除完了</h1>
    <p>コメントが正常に削除されました。</p>
    <h2><?= htmlspecialchars($result, ENT_QUOTES, 'UTF-8') ?></h2>
    {{-- 2,3秒後に本の詳細画面に戻ります --}}
    <a href="/normal/bookDetail">本の詳細画面に戻る</a>     
</body>
</html>