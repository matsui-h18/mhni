<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>一般ユーザー向けページ</h1><br>
    <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="text-red-600 hover:underline">
        ログアウト
    </button>
</form>
<form action="{{ route('back.to.start') }}" method="get">
    @csrf
    <button type="submit"
        class="px-4 py-2 bg-indigo-600 rounded hover:bg-indigo-700 transition">
        Topページに戻る
    </button>
</form>
</body>
</html>


