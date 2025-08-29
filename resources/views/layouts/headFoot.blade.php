<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>

        /* 中身用のcss */
        .center{
            width:1200px;
            margin: 0 auto;
        }

        /* ヘッダー：「ログアウト」の文字サイズ */
        .nav-link{
            text-align: right;
            font-size: 25px;
        }

        /* ヘッダー：「Home」の文字サイズ */
        .navbar-nav{
            font-size: 25px;
        }
    </style>
</head>
<body>
  <div class="center">
    <img src="" alt="BookMHNI" id="title">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="d-flex justify-content-between w-100">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </div>
            <div class="navbar-nav">
              <a class="nav-link" href="#">Logout</a>
            </div>
          </div>
        </div>
      </div>
    </nav>

    @section('main')
    @show
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>