<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>書籍一覧</title>
  <link rel="stylesheet" href="css/index.css">
</head>
<body>

  <h1 class="page-title">書籍一覧</h1>
  @foreach ($books as $book)
    <a href="{{ route('normal.bookDetail.get', ['id' => $book->id]) }}">
    @csrf
    <input type="hidden" name="id" value="{{ $book->id }}">
    <button type="submit" class="book-list" style="all: unset; cursor: pointer;">
      <div class="book-list">
        <div class="book-row">
          <div class="book-image">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTuxOkwIGXzevDS_lS9CceoaHfTetR75g0IILx0NEOKVlqv55oZqfly6TI&s" alt="本サンプル">
          </div>
          <div class="book-info">
            {{ $book->book_name }}<br>
            {{ $book->author }}<br>
            {{ $book->pub_date }}
          </div>
        </div>
      </div>
    </button>
  </a>
  @endforeach
  


  
</body>
</html>
