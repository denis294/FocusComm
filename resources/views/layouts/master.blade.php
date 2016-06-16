<!DOCTYPE html>
<html lang="fr">
    <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <script src="{{asset('assets/js/packJs.php')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/materialize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <script src="{{asset('assets/js/tp/mainResponsiv.js')}}"></script>
    <script src="{{asset('assets/js/tp/main.js')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/responsiv.css')}}">

     <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div class="bigDiv"></div>
            <div class="menuMobile">
                                    <span class="cross"> Fermer</span>
                    <ul class="listeMenu">
                        <li class=""><a href="/">Accueil</a></li>
                        <li class=""><a href="actualites">Actualité</a></li>
                        <li class=""><a href="#">Adresse</a></li>
                        <li class=""><a href="#">Pose ta question</a></li>
                        <li class=""><a href="#">Forum</a></li>
                        <li class=""><a href="#">Urgence</a></li>
                        <li class=""><a href="quizzs">Quizzs</a></li>
                    </ul>
            </div>
            <div class="rechercheMobile">
            @if(!Session::has('user_id'))
                <span class="loggMobile"><p><a class="waves-effect waves-light btn he1" id="boutondepart" href="/login"><i class="material-icons left">person</i>Se connecter</a>
                </p><p><a class="waves-effect waves-light btn he2" id="boutondepart" href="/register"><i class="material-icons left">person_pin</i>S'enregistrer</a></p></span>
            @else
                <span class="loggMobile"><p>Bonjour,<span id="ev"> {{Session::get('pseudo')}} </span></p><p>
                <a class="waves-effect waves-light btn deco he3" id="boutondepart2" href="/logout"><i class="material-icons left">person</i>Déconnexion</a></p></span>
            @endif
            </div>
        <header class="row">

             <nav class="col s12">
                <div class="nav-wrapper">
                    <!--burger croix loupe gérer avec js-->
                    <span class="burger"></span>
                    <span class="loupe"></span>
                    <a href="/" class="brand-logo"><img class="logo" src="{{asset('assets/img/logo_ciao_rvb.png')}}"> <h5 class="donde">@yield('title')</h5></a>
                    <ul id="nav-mobile" class="hide-on-med-and-down">
                        <li id="home" class=""><a href="/">Accueil</a></li>
                        <li id="actualites" class=""><a href="actualites">Actualités</a></li>
                        <li id="" class=""><a href="#">Adresse</a></li>
                        <li id="" class=""><a  href="#">Pose ta question</a></li>
                        <li id="" class=""><a href="#">Forum</a></li>
                        <li id="" class=""><a  href="#">Urgence</a></li>
                        <li id="quizzs" class=""><a href="quizzs">Quizzs</a></li>
                    </ul>
                </div>
            </nav>
            @if(!Session::has('user_id'))
                <span class="loggEtAutre"><p><a class="waves-effect waves-light btn he1" id="boutondepart" href="/login"><i class="material-icons left">person</i>Se connecter</a>
                </p><p><a class="waves-effect waves-light btn he2" id="boutondepart" href="/register"><i class="material-icons left">person_pin</i>S'enregistrer</a></p></span>
            @else
                <span class="loggEtAutre"><p>Bonjour,<span id="ev"> {{Session::get('pseudo')}} </span></p><p>
                <a class="waves-effect waves-light btn deco he3" id="boutondepart2" href="/logout"><i class="material-icons left">person</i>Déconnexion</a></p></span>
            @endif
        </header>
        @yield('sidenav')
        <main class="main">
        @yield('content')
        </main>
    </body>


<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l3 s12">
                <h5>Soutenez CIAO</h5>
                <p class="text-lighten-4">CCP 10-5261-6</p>
                <img src="{{asset('assets/img/mecenes_logo_loro.gif')}}">
                <img src="{{asset('assets/img/mecenes_logo_oakfoundation.gif')}}">
              </div>
              <div class="col l3 s12 android">
                <p class="text-lighten-4">Application Ciao.ch disponible sur</p>
                <a href="https://play.google.com/store/apps/details?id=com.BleuVert.Ciao"><img src="{{asset('assets/img/google-play-badge.png')}}"></a>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5>CIAO c'est...</h5>
                <ul>
                  <li><a class="white-text text-lighten-3" href="http://association.ciao.ch/">Une association</a></li>
                  <li><a class="white-text text-lighten-3" href="#!">Une collaboration avec 15 institutions partenaires
                  </a></li>
                  <li>Des sites partenaires : <a class="grey-text text-lighten-3" href="http://www.feelok.ch/">feelok.ch</a> et <a class="grey-text text-lighten-3" href="http://www.tschau.ch/">tschau.ch</a></li>
                </ul>
              </div>
            </div>
          </div>
            <div class="footer-copyright">
              <div class="container">
                PARRAINS : Fondation Otto Beishein - Vaudoise Assurance
              </div>
            </div>
</footer>
 
</html>
