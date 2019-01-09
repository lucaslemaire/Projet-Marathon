<!DOCTYPE html>
<html>
<head>
    <title> 500 erreur serveur</title>
    <link href="{{ asset('css/404500.css') }}" rel="stylesheet">
    <link href="{{ asset('typo/icones-typo/style.css') }}" rel="stylesheet">
</head>
<body>
<header class="v-header container">
    <div class="fullscreen-video-wrap">
        <video autoplay muted id="videoheader">
            <source src="{{ asset('images/animation404.mp4') }}" type="video/mp4">
        </video>
    </div>

    <div class="header-overlay"></div>
    <div class="header-content">
        <h1>Erreur 500</h1>
        <p>Le serveur est mort</p>
        <a href="{{ route('home') }}" class="btn"><span class="icon-chevron-down"></span></a>
    </div>
</header>
</body>
</html>