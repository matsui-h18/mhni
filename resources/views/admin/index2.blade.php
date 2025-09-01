<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>書籍登録</title>
<link rel="stylesheet" href="{{ asset('css/index2.css') }}">
</head>
<body>
<h2>書籍新規登録</h2>
<hr>

<a href="{{ route('newBook') }}"><button class="btn">新規登録</button></a>

<table class="book-table">
    <tr>
    <td>
      <img src="https://via.placeholder.com/100x120.png?text=Book" alt="本の画像" class="image-display">
    </td>
    <td>
      @foreach ($books as $book)
      <label for="title" class="field-label">{{$book->book_name}}</label>
      <div class="input-button-wrapper">
      <input type="text" id="title" value="" class="field-input">

     <label for="author" class="field-label">{{$book->author}}</label>
      <input type="text" id="author" value="" class="field-input">

      <label for="year" class="field-label">{{$book->pub_date}}</label>
      <input type="number" id="year" value="" class="field-input">
      @endforeach

      <div class="button-area">
        <button class="btn">編集</button>
        <button class="btn">削除</button>
        </div>
      </div>
    </td>
  </tr>
</table>

</body>
</html>