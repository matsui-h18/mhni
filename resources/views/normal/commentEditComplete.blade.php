<?php
    $evaluation = $_POST["evaluation"];
    $comment = $_POST["comment"];
    if ($evaluation === "" || $comment === "") {
        $result = "おすすめ度の選択又はコメントが入力されていません";
    } else {
        $result = "コメントの変更が完了しました";
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="2;url={{ route('normal.bookDetail') }}">
    <title>コメント変更完了画面</title>
</head>
<body>
    <h1>コメント変更完了</h1>
    <p>コメントが正常に変更されました。</p>//
    <h2><?= htmlspecialchars($result, ENT_QUOTES, 'UTF-8') ?></h2>
    {{-- metaの中で2,3秒後に本の詳細画面normal.bookDetailに戻ります --}}    
</body>
</html>