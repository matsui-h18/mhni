<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>書籍一覧</title>

    <link rel="stylesheet" href="css/index.css">
</head>

<body>

    <h1 class="page-title">書籍一覧</h1>
    @foreach($records as $record)
    <div class="book-list">
        <div class="book-row">
            <div class="book-image">
                <img src="{{ $record -> image}}" alt="本{{ $loop->iteration }}" class="image-display">
            </div>
            <div class="book-info">
                <a href="{{route('bookshow', ['id' => $record->id]) }}"
                    class="book-title">
                    {{ $record->book_name }}
                </a>
            </div>
        </div>
    </div>
    @endforeach

        <!-- <div class="book-list">
            <div class="book-row">
                <div class="book-image">
                    <img src="book1.jpg" alt="本1" class="image-display">
                </div>
                <div class="book-info">
                    <a href="book1.html" class="book-title">吾輩は猫である</a>
                </div>
            </div>


            <div class="book-row">
                <div class="book-image">
                    <img src="book2.jpg" alt="本2" class="image-display">
                </div>
                <div class="book-info">
                    <a href="book2.html" class="book-title">人間失格</a>
                </div>
            </div>

            <div class="book-row">
                <div class="book-image">
                    <img src="book3.jpg" alt="本3" class="image-display">
                </div>
                <div class="book-info">
                    <a href="book3.html" class="book-title">人間失格</a>
                </div>
            </div>
        </div> -->
</body>

</html>
