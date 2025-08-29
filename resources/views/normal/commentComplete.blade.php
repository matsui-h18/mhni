<?php
    $evaluation = $_POST["evaluation"];
    $comment = $_POST["comment"];
    if ($evaluation === "" || $comment === "") {
        $result = "おすすめ度の選択又はコメントが入力されていません";
    } else {
        $result = "コメントの投稿が完了しました";
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>コメント投稿完了画面</title>
</head>
<body>
    <h1><?= htmlspecialchars($result, ENT_QUOTES, 'UTF-8') ?></h1>
    <a href="/normal/bookDetail">本の詳細画面に戻る</a>     
</body>
</html>
