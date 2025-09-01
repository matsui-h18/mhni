<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>

        /* 中身用のcss */
        .center{
            width:1500px;
            margin: 0 auto;
            font-family:  'メイリオ','arial black';
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

        /* BookMHNIのロゴ */
        #logo{
            margin-top:50px;
            font-size:50px;
            text-align: center;
            font-family:  serif,'arial black'; /* フォント変更する場合ここ */
        }

        /* BookMHNIのロゴ下の「書籍管理システム」 */
        #sub_logo{
            margin-bottom:30px;
            font-size:20px;
            text-align: center;
            font-family:  serif,'arial black'; /* フォント変更する場合ここ */
        }

        button{
          background-color:#c1e4e9;
        }

        #footer{
          background-color: black; /* フッターの背景 */
          color:white; /* 文字色 */
          height: 100px;
          display: flex; /* Flexboxを有効にする */
          justify-content: center; /* 横方向の中央揃え */
          align-items: center; /* 縦方向の中央揃え */
          text-align: center;
          margin-top:50px;
          margin-bottom:0px;
        }

    </style>
</head>
<body>
  <div class="center">
    <div id="logo">BookMHNI</div>
        <div id="sub_logo">－書籍管理システム－</div>
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

  <div id="footer">
    お困りごとがありましたら、経理部（内線8番）まで
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
