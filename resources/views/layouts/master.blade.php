<!DOCTYPE html>
<html lang="fr">
    <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <script src="{{asset('assets/js/packJs.php')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/materialize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">

     <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <header class="row">

             <nav class="col s8">
                <div class="nav-wrapper">
                    <a href="/" class="brand-logo"><img class="logo" src="{{asset('assets/img/logo_ciao_rvb.png')}}"> <h5 class="donde">Sexualité</h5></a>
                    <ul id="nav-mobile" class="hide-on-med-and-down">
                        <li><a class="ici" href="/">Accueil</a></li>
                        <li class=""><a href="actualites">Actualité</a></li>
                        <li class=""><a href="#">Adresse</a></li>
                        <li class=""><a href="#">Pose ta question</a></li>
                        <li class=""><a href="#">Forum</a></li>
                        <li class=""><a href="#">Urgence</a></li>
                        <li class=""><a href="quizzs">Quizzs</a></li>
                    </ul>
                </div>
            </nav>
            <div id="log" class="col s4a">

                        <span><h6 class="logg">Login :</h6>
                        <input id="pseudo" type="text" required placeholder=" Pseudo">
                        <input id="mdp" type="text" required placeholder=" Mot de passe">
                        <a id="btn_login"class="waves-effect waves-light btn"> login</a><br/>
                        <a id="sign">Créer un compte</a>
                        <input id="search" type="search" required placeholder=" Recherche"></span>
            </div>
        </header>
        @yield('sidenav')
        <main class="main">
        @yield('content')
        </main>

        <!-- <footer class="page-footer">
          <div class="container foot">
            <div class="row">
            <div class=" sectionSoutien col s6b">
            <h6 class="row">Avec le soutien de </br></br>
            <span class="lesSoutiens col s12">
                <span class="row" >
                    <img class="col s4" src="{{asset('assets/img/mecenes_logo_loro.gif')}}">
                    <img class="col s4" src="{{asset('assets/img/mecenes_logo_oakfoundation.gif')}}">
                    <span class="col s4">
                        <span class="row ccp" >
                        Soutenez CIAO </br>CCP-10-5261-6
                        </span>
                    </span>
                    </span>
                </span>
            </h6>
            <h6 class="row parr">
                PARRAINS : Fondation Otto Beishein - Vaudoise Assurance

            </h6>
            </div>
              <div class="sectionDispo col s2b">
                <h6 class="white-text">Application Ciao.ch disponible sur
            </br></br>
            <span class="lesSoutiens">
                <a href="https://play.google.com/store/apps/details?id=com.BleuVert.Ciao"><img src="{{asset('assets/img/google-play-badge.png')}}"></a>
            </span>
              </br></h6></div>
              <div class="col s4e">
                <h6>
                <span>
                    CIAO c'est...</br>
                    Une association</br>
                    Un site internet créé en 1997, certifié accessible et HON</br>
                    Une collaboration avec 15 institutions partenaires</br>
                    Des sites partenaires : feelok.ch et tschau.ch</br>
                    En 2015 plus de 13 000 visiteurs par semaine en moyenne, 2000 000 de pages vues et 2848 questions posées
                </span>
                </h6>

              </div>
            </div>
          </div>
        </footer>
 -->    </body>


<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
 
</html>
