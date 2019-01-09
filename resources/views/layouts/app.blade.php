<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>DigiTale</title>
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('typo/icones-typo/style.css') }}" rel="stylesheet">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/android-icon-32x32') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon/android-icon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/android-icon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('favicon/ms-icon144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    @yield('header')

    <nav id="nav">
        <a href="{{ route('home') }}"><img src="{{ asset('images/logo.png') }}" alt="logo"></a>
    </nav>

    <div id="btn">
        <div id="top"></div>
        <div id="middle"></div>
        <div id="bottom"></div>
    </div>

    <div id="box">
        <div id="items">
            @guest
                <div class="item"><a href="{{ route('login') }}">Connexion</a></div>
                <div class="item"><a href="{{ route('register') }}">Inscription</a></div>
            @else
                    <div class="bjr"> Bonjour {{ Auth::user()->name }}</div>
                    <div class="item"><a href="{{ route('histoires_utilisateur') }}">Mes histoires</a></div>
                    <div class="item"><a href="{{ route('creer_histoire') }}">Ajouter une histoire</a></div>
                    <div class="item"><a href="{{ route('creer_chapitre') }}">Ajouter un chapitre</a></div>
                    <div class="item"><a href="{{ route('lier_choix_chapitre') }}">Lier un chapitre</a></div>

                    <div class="item"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
            @endguest
        </div>
    </div>

    @yield('content')

    <footer>
        <div>
            <a href="#">contact</a>
            <a href="#">mentions légales</a>
            <a href="#">Les joyeux lurons | groupe 15</a>
        </div>
    </footer>

<!-- Scripts -->
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
