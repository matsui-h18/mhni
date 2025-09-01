<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>コメント、おすすめ度入力画面</title>
    <link rel="stylesheet" href="css/sumple.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="book-display">
    <!-- 選択された本の表示 -->
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuxOkwIGXzevDS_lS9CceoaHfTetR75g0IILx0NEOKVlqv55oZqfly6TI&s" alt="本サンプル">
        
        <div id="info">
            <h1 id="book_title" name="book_name">タイトル</h1>
                <div id="book_etcinfo">

                    著者： book->author <br>
                    出版日： book->pub_date <br>
                </div>
            
        </div>
    </div>

    <!-- 入力画面 -->
    <form action="" method="post">
        @csrf
        <!-- おすすめ度選択画面 -->
        おすすめ度：
        <div class="review">
            <div class="stars">
                <span>
                    <input id="review01" type="radio" name="review"><label for="review01">★</label>
                    <input id="review02" type="radio" name="review"><label for="review02">★</label>
                    <input id="review03" type="radio" name="review"><label for="review03">★</label>
                    <input id="review04" type="radio" name="review"><label for="review04">★</label>
                    <input id="review05" type="radio" name="review"><label for="review05">★</label>
                </span>
            </div>
        </div>

        <!-- 以下、おすすめ度トップダウンver
        <select name="example" required>
            <option value="">▼選択してください</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
        </select><br><br>
         -->

        <!-- コメント入力欄 -->
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">コメント入力</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>

        <!-- 投稿ボタン -->
        <div id="my_comment_post">
            <input type="submit" value="投稿" class="btn btn-primary">
        </div>
    {{-- 入力画面 --}}
    {{-- <form action="commentComplete.php" method="post">
    おすすめ度：<select name="evaluation" required>
    <option value=""selected>▼選択してください</option>
    <option value="おすすめ度1">☆☆☆☆★</option>
    <option value="おすすめ度2">☆☆☆★★</option>
    <option value="おすすめ度3">☆☆★★★</option>
    <option value="おすすめ度4">☆★★★★</option>
    <option value="おすすめ度5">★★★★★</option>
    </select><br><br> --}}

    </form>

    <!-- 他社員のコメント表示 -->
    <div class="all_comment">
        <div class="com_recommend_from">
            <h3 id="emp_name" name="emp_name">山田太郎</h2>
            <h3 id="other_star" name="evaluation">☆5</h2><br>
        </div>
        <div name="comment" class="comment_content">
                とても面白かったです！
        </div>
    </div>
    <div class="all_comment">
        <div class="com_recommend_from">
            <h3 id="emp_name" name="emp_name">佐藤花子</h2>
            <h3 id="other_star" name="evaluation">☆3</h2><br>
        </div>
        <div name="comment" class="comment_content">
                とても参考になりました！
        </div>
    </div>

    <!-- 自分のコメントがここに表示されるように -->
    <div class="all_comment">
        <div class="com_recommend_from">
            <h3 id="" name="">自分のコメント</h2>
            <h3 id="other_star" name="evaluation">☆1</h2><br>
        </div>
        <div name="comment" class="comment_content">
                良い本でした。
        </div>
        {{-- <div class="edit_del_btn">
            <a href="{{ route('commentEdit') }}" id="edit_btn">編集</a>
            <a href="{{ route('commentDelete') }}" id="del_btn">削除</a>
        </div> --}}

<div class="edit_del_btn" style="display: flex; gap: 10px;">
    <!-- 編集ボタン -->
    <form action="/normal/commentEdit" method="post">
        @csrf
        {{-- <input type="hidden" name="comment_id" value="{{ $comment->id }}"> --}}
        <input type="submit" value="編集" class="btn btn-warning">
    </form>

    <!-- 削除ボタン -->
    <form action="/normal/commentDelete" method="post">
        @csrf
        {{-- <input type="hidden" name="comment_id" value="{{ $comment->id }}"> --}}
        <input type="submit" value="削除" class="btn btn-danger">
    </form>
</div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>