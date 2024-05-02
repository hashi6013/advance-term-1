<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>
<body>
    <header class="header">
        <div  class="header-container">
            <div class="header__inner">
                <!-- ハンバーガーメニュー -->
                <button type="button" class="hamburger">
                    <span></span>
                </button>
                <a class="header__logo" href="{{route('index')}}">Rese</a>
            </div>
            <!-- ハンバーガーナビ -->
            <nav class="nav">
                <ul class="nav__list">
                    <li class="nav__item"><a class="nav__item-link" href="/">Home</a></li>
                    <li class="nav__item">
                        <form class="logout-form" action="/logout" method="post">
                            @csrf
                            <button class="nav__item-link nav__item-link--button">Logout</button>
                        </form>
                    </li>
                    <li class="nav__item"><a class="nav__item-link" href="/mypage">Mypage</a></li>
                    <li class="nav__item"><a class="nav__item-link" href="/register">Registration</a></li>
                    <li class="nav__item"><a class="nav__item-link" href="/login">Login</a></li>
                </ul>
            </nav>
            @yield('search')
        </div>
    </header>

    <main>
        @yield('content')
        <script src="https://kit.fontawesome.com/281a1830c2.js" crossorigin="anonymous"></script>
    </main>
    <script>
    {
        const hamburger = document.querySelector('.hamburger');
        const nav = document.querySelector('.nav');
        hamburger.addEventListener('click', function() {
        hamburger.classList.toggle("open");
        nav.classList.toggle('open');
        });
    }
</script>

</body>
</html>