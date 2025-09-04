<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/headfoot.css') }}">
</head>

<body>

    <header>
        <div class="header-container">
            <div class="logout-area">
                <a href="#" class="logout-text"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" method="POST" action="{{ route('logout') }}">
                    @csrf
                </form>
            </div>

            <div class="logo-area">
                <a href="{{ route('back.to.start') }}">
                    <img src="/img/logo.png" alt="" id="logoImg"><br>
                    <span style="color: black;">書籍管理システム</span>
                </a>
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
