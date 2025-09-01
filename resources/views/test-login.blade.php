<!DOCTYPE html>
<html>
<head>
    <title>テストログイン</title>
</head>
<body>
    <h1>テストユーザー選択</h1>

    <form method="POST" action="{{ route('test.login') }}">
    <form method="POST" action="{{ route('test.login') }}">
    @csrf
    <button type="submit" name="emp_id" value="1001">田中 太郎でログイン</button>
    <button type="submit" name="emp_id" value="2001">高橋 美咲でログイン</button>
</form>

</body>
</html>
