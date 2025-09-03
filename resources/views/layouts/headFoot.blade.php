<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/headfoot.css') }}">
</head>
<body>

<header>
  <div class="header-container">
    <div class="logout-area">
      <a class="logout-text" href="#">Logout</a>
    </div>
    <div class="logo-area">
      <img src="/img/logo.png" alt="" id="logoImg"><br>
      書籍管理システム
    </div>
  </div>
</header>

  @section('main')
  @show

<footer>
  <div id="help">
    お困りごとがありましたら、経理部（内線8番）まで
  </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>