@extends('layouts.headFoot')
@section('title','コメント、おすすめ度入力画面')
@section('main')

<link rel="stylesheet" href="{{ asset('css/sumple.css') }}">
<link rel="stylesheet" href="{{ asset('css/mordal.css') }}">


<!-- 以下body替わりのタグ -->
<div class="detailBody">

<div class="book-display">
    <!-- 選択された本の表示 -->
    <div class="image-wrapper">
        @if ($book->image)
        <img src="{{ $book->image }}" alt="本の画像" class="image-display">
        @else
        <img src="{{ asset('img/book.jpg') }}" alt="本の画像" class="image-display">
        @endif
    </div>

    <div id="info">
        <h1 id="book_title" name="book_name">{{ $book->book_name }}</h1>

        <div id="book_etcinfo">
            著者： {{ $book->author }}<br>
            出版日： {{ $book->pub_date }}<br>
            @if($average === null || $average == 0)
            平均評価： まだ評価はありません
            @else
            平均評価： {{ number_format($average, 1) }}
            @endif
            <br>
            <!-- 説明ボタン -->
<button onclick="openModal()">本の説明を見る</button>
        </div>

    </div>
</div>

<!-- 入力画面 -->
<form action="{{ route('commentAdd') }}" method="post" id="comment_form">
    @csrf
    <!-- おすすめ度選択画面 -->
    <div class="review">
    <div id="recommend-text">おすすめ度</div>
        <div class="stars">
            <span>
                <input id="review01" type="radio" name="review" value="5" required><label for="review01">★</label>
                <input id="review02" type="radio" name="review" value="4"><label for="review02">★</label>
                <input id="review03" type="radio" name="review" value="3"><label for="review03">★</label>
                <input id="review04" type="radio" name="review" value="2"><label for="review04">★</label>
                <input id="review05" type="radio" name="review" value="1"><label for="review05">★</label>
            </span>
        </div>
    </div>



<!-- モーダル本体 -->
<div id="bookModal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h1>本の内容</h1>
        <br>
        @if(empty($book->content))
        <p>本の説明はありません</p>
        @else
        <p>{{ $book->content }}</p>
        @endif
    </div>
</div>


    <!-- コメント入力欄 -->
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">コメント</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" name="comment" rows="3" required></textarea>
    </div>

    <input type="hidden" name="book_id" value="{{ $book->id }}">

    <!-- 投稿ボタン -->
    <div id="my_comment_post">
        <input type="submit" class="btn btn-primary"value="投稿" id="post_btn">
    </div>
</form>


{{-- 岩本　データベースから他社員　全件引用して表示 --}}
<!-- 他社員のコメント表示 -->
<div class="all_other_comment">
    <h1>投稿されたコメント</h1>
</div>
@if($comments->isempty())
<div class="no_comment">
    <h3>まだコメントがありません</h3>
</div>
@else
<div class="all_comment">
    @foreach ($comments as $comment)
    <div class="com_recommend_from">
        <h2 id="emp_name" name="emp_name">{{ $comment->user->emp_name }}</h2>
        <h2 id="other_star" name="evaluation">☆{{ $comment->evaluation }}</h2>
    </div>
    <hr>
    <div name="comment" class="comment_content">
        {{ $comment->comment }}
    </div>
    <!-- 編集・削除ボタン（自分のコメントだけ表示したいなら条件追加） -->
    @if (Auth::id() === $comment->user_id)
    <div class="edit_del_btn">
        <form action="{{ route('commentEdit') }}" method="post" class="edit_form">
            @csrf
            <input type="hidden" name="comment_id" value="{{ $comment->id }}">
            <input type="hidden" name="book_id" value="{{ $book->id }}">
            <input type="submit" class="btn btn-primary edit_btn" value="編集">
        </form>
        <form action="{{ route('commentDelete') }}" method="post">
            @csrf
            <input type="hidden" name="comment_id" value="{{ $comment->id }}">
            <input type="hidden" name="book_id" value="{{ $book->id }}">
            <input type="submit" class="btn btn-primary del_btn" value="削除">
        </form>
    </div>
    @endif
@endforeach
</div>
@endif
</div>

<!-- 以下body替わりのタグ -->
</div>
<script>
function openModal() {
    document.getElementById('bookModal').style.display = 'block';
}

function closeModal() {
    document.getElementById('bookModal').style.display = 'none';
}
</script>
@endsection
