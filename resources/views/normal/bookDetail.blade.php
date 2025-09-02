@extends('layouts.headFoot')
@section('title','コメント、おすすめ度入力画面')
@section('main')

  <link rel="stylesheet" href="css/sumple.css">

    <div class="book-display">
        <!-- 選択された本の表示 -->
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuxOkwIGXzevDS_lS9CceoaHfTetR75g0IILx0NEOKVlqv55oZqfly6TI&s" alt="本サンプル">

        <div id="info">
            <h1 id="book_title" name="book_name">{{ $book->book_name }}</h1>

            <div id="book_etcinfo">
                著者： {{ $book->author }}<br>
                出版日： {{ $book->pub_date }}<br>
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
                    <input id="review01" type="radio" name="review" value="1"><label for="review01">★</label>
                    <input id="review02" type="radio" name="review" value="2"><label for="review02">★</label>
                    <input id="review03" type="radio" name="review" value="3"><label for="review03">★</label>
                    <input id="review04" type="radio" name="review" value="4"><label for="review04">★</label>
                    <input id="review05" type="radio" name="review" value="5"><label for="review05">★</label>
                </span>
            </div>
        </div>

        <!-- コメント入力欄 -->
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">コメント入力</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="comment" rows="3"></textarea>
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
    <@foreach ($comment as $comment)
        <div class="all_comment">
        <div class="com_recommend_from">
            <h3>{{ $comment->user->name ?? '匿名' }}</h3>
            <h3>☆{{ $comment->evaluation }}</h3><br>
        </div>
        <div class="comment_content">
            {{ $comment->comment }}
        </div>

        <!-- 編集・削除ボタン（自分のコメントだけ表示したいなら条件追加） -->
        @if (Auth::id() === $comment->user_id)
        <div class="edit_del_btn" style="display: flex; gap: 10px;">
            <form action="/normal/commentEdit" method="post">
                @csrf
                <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                <input type="submit" value="編集" class="btn btn-warning">
            </form>

            <form action="/normal/commentDelete" method="post">
                @csrf
                <input type="hidden" name="comment_id" value="{{ $comment->id }}">
                <input type="submit" value="削除" class="btn btn-danger">
            </form>
        </div>
        @endif
        </div>
        @endforeach

        <!-- <div class="edit_del_btn" style="display: flex; gap: 10px;">

<<<<<<< HEAD
    <form action="/normal/commentEdit" method="post">
        @csrf
        <input type="hidden" name="comment_id" value="{{ $comment->id }}">
=======

<div class="edit_del_btn" style="display: flex; gap: 10px;">
    <!-- 編集ボタン -->
    <form action="/normal/commentEdit" method="post">
        @csrf
        <input type="hidden" name="comment_id" value="">
>>>>>>> 2af0b1d7b230c6ebb8887296878362d4213f7994
        <input type="submit" value="編集" class="btn btn-warning">
    </form>

        <form action="/normal/commentDelete" method="post">
            @csrf
            {{-- <input type="hidden" name="comment_id" value=""> --}}
            <input type="submit" value="削除" class="btn btn-danger">
        </form>
    </div> -->


<<<<<<< HEAD
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
=======
    </div>
@endsection
>>>>>>> 2af0b1d7b230c6ebb8887296878362d4213f7994
