<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>検索結果</title>
</head>

<body>
    <h1>ISBN検索結果</h1>

    <h2>{{ $book_name }}</h2>
    <p>著者: {{ implode(', ', $author) }}</p>
    <p>出版日: {{ $pub_date }}</p>
    <p>説明: {{ $content }}</p>
    <br>
    @if($image)
    <img src="{{ $image }}" alt="本の画像">
    @else
    <p>サムネイル画像はありません。</p>
    @endif
    <br><br>
    <form method="POST" action="{{ route('isbnadd') }}">
        @csrf
        <input type="hidden" name="book_name" value="{{ $book_name }}">
        <input type="hidden" name="author" value="{{ implode(', ', $author) }}">
        <input type="hidden" name="pub_date" value="{{ $pub_date }}">
        <input type="hidden" name="content" value="{{ $content }}">
        <input type="hidden" name="image" value="{{ $image }}">
        <input type="hidden" name="isbn" value="{{ $isbn }}">

        <button type="submit">追加</button>
    </form>
    <br><br>

    <a href="/isbn">戻る</a>
</body>

</html>
