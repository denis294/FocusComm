<!DOCTYPE html>
<html lang="fr">
    <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <script src="{{asset('assets/js/packJs.php')}}"></script>
    <link rel="stylesheet" href="{{asset('assets/css/materialize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/admin.css')}}">
     <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <header class="row">
            <a href="#" class="brand-logo"><img class="logo"src="../assets/img/logo_ciao_rvb.png">
            <h5 class="loginAdmTitre">Plateforme administrateur</h5>
            </a>
    </header>
        <main class="main">
        @yield('content')
        </main>
</html>
