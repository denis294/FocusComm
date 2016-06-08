<!DOCTYPE html>
<html lang="fr">
    <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <script src="assets/js/packJs.php"></script>
    <link rel="stylesheet" href="{{asset('assets/css/materialize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
     <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <header class="row">

             <nav class="col s8">
                <div class="nav-wrapper">
                    <a href="#" class="brand-logo"><img class="logo" src="{{asset('assets/img/logo_ciao_rvb.png')}}"> <h5 class="donde">Sexualité</h5></a>
                    <ul id="nav-mobile" class="hide-on-med-and-down">
                        <li><a class="ici" href="sass.html">Accueil</a></li>
                        <li class=""><a href="badges.html">Actualité</a></li>
                        <li class=""><a href="collapsible.html">Adresse</a></li>
                        <li class=""><a href="collapsible.html">Pose ta question</a></li>
                        <li class=""><a href="mobile.html">Forum</a></li>
                        <li class=""><a href="mobile.html">Urgence</a></li>
                        <li class=""><a href="mobile.html">Quiz</a></li>
                    </ul>
                </div>
            </nav>
            <div id="log" class="col s4a">

                        <span><h6 class="logg">Login :</h6>
                        <input id="pseudo" type="text" required placeholder=" Pseudo &#128587;">
                        <input id="mdp" type="text" required placeholder=" Mot de passe &#128272;">
                        <a id="btn_login"class="waves-effect waves-light btn"> login</a><br/>
                        <a id="sign">&#128203; Créer un compte</a>
                        <input id="search" type="search" required placeholder=" Recherche &#128269;"></span>
            </div>
        </header>
        <main class="main">
        @yield('content')
        </main>

        <footer class="page-footer">
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
    </body>
</html>
