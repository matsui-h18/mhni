<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>コメント、おすすめ度入力画面</title>
    <link rel="stylesheet" href="/css/sumple.css">
   
</head>
<body>
    <div class="book-display">
    {{-- 選択された本の表示 --}}
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuxOkwIGXzevDS_lS9CceoaHfTetR75g0IILx0NEOKVlqv55oZqfly6TI&s" alt="本サンプル" width="200" height="150">
    <div id="info">
        本のタイトルbook_name<br>
        著者author<br>
        本の内容content<br>
        出版日pub_date<br>
        おすすめ度の平均 evaluation
        あいうえお
    </div>
</div>

    {{-- 入力画面 --}}
    <form action="" method="post">
    おすすめ度：<select name="example" required>
<option value="">▼選択してください</option>
<option>おすすめ度　1</option>
<option>おすすめ度　2</option>
<option>おすすめ度　3</option>
<option>おすすめ度　4</option>
<option>おすすめ度　5</option>
</select><br><br>
    コメント入力：<textarea name="comment"></textarea><br><br>
    <input type="submit" value="投稿">
    </form>

    <table border="1" class="table">
        <tr><th>投稿者</th><th>おすすめ度</th></tr>
        <tr><th colspan="2">コメント</th></tr>
        <tr>
            <td>社員名emp_name</td>
            <td>評価evaluation</td>   
        </tr><br>
        <tr><td colspan="2">コメントcomment</td></tr>     
    </table>
    </div>
</body>
</html>
