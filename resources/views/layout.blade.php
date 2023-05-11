<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"> <!--Meta-->
    <meta name="description" content="site rencontre">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('../css/normalize.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('../css/layout.css')}}">
    <link rel="icon" href="{{ asset("/img/Meet&Love.png")}}">
    <link rel="stylesheet" href="{{ url('../css/style.css')}}">
    <link rel="stylesheet" href="{{ url('../css/login.css')}}">
    <link rel="stylesheet" href="{{ url('../css/register.css')}}">
    <link rel="stylesheet" href="{{ url('../css/loading.css')}}">
    <link rel="stylesheet" href="{{ url('../css/profil.css')}}">
    <link rel="stylesheet" href="{{ url('../css/modify.css')}}">

    <title>meet&love</title> <!--title of page-->
</head>
<body>
<header>
    <!-- LES DIV LINEAR SONT LES DEGRADER SUR LES COTER -->
    <h1>Meet&Love</h1>
    <!-- LE STYLE DE L'ARTICLE CONTENT EST CELUI QUI EST A MODIFIER -->
    @yield('content')

    <nav>
        @if(isset(Auth::user()->name))
            <p>{{ "Bienvenue sur Meet & Love " . Auth::user()->name . "!" }}</p>

<ul>
            <li>
                <form action="{{route('logout') }}" method="POST" id="d-flex-logout">
                    @csrf

                    <button type="submit" class="logout-button">
                        <img src="{{asset("../img/option-de-deconnexion.png")}}" class="icon" alt="">
                    </button>

                </form>

            </li>

            <li>
                <a href="">
                    <img src="{{asset("img/modifier-le-profil-utilisateur.png")}}" class="icon" alt="profil">
                </a>
            </li>

            <li>
                <a href="">
                    <img src="{{asset("img/swipe.png")}}" class="icon" alt="swipe">
                </a>
            </li>

            <li>
                <a href="{{ route('user', ['user' => Auth::user()->id]) }}">
                    <img src="{{ asset("img/user.png") }}" class="icon" alt="profil">
                </a>
            </li>
</ul>
        @else
            <a href="{{route('login')}}">login</a>
            <a href="{{route('register')}}">register</a>
    </nav>
    @endif
</header>
<main>
    @if(!isset(Auth::user()->name))
        @if(Request::is('/'))
            <section id="accueil">
                <a href="{{route('register')}}"><h2>S'inscrire</h2></a>
                <img src="{{asset("../img/imageRencontre.png")}}" id="background" alt="deconnexion">
            </section>
        @endif


    @endif
</main>
</body>
<script src="{{ url('../js/loading.js')}}"></script>
</html>
