<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>本の新規登録</title>
</head>
<body>
    <h1>本の新規登録画面</h1>

    <form method="POST" action="/book/store">
        @csrf

        <div>
            <label for="book_name">書名：</label><br>
            <input type="text" id="book_name" name="book_name" maxlength="50" required>
        </div>
        <br>

        <div>
            <label for="author">著者：</label><br>
            <input type="text" id="author" name="author" maxlength="16">
        </div>
        <br>

        <div>
            <label for="pub_date">出版日：</label><br>
            <input type="date" id="pub_date" name="pub_date">
        </div>
        <br>

        <div>
            <label for="isbn">ISBN（13桁）：</label><br>
            <input type="number" id="isbn" name="isbn" required>
        </div>
        <br>

        <button type="submit">登録</button>
    </form>
</body>
</html>