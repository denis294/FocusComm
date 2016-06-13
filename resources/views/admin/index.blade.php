@extends('layouts.masterAdmin')
@section('title', 'Admin')

@section('content')
<main class="main">
    <section id ="loginPlateForme" class="row">
        <form>
            <div id="nomUtilisateur" class="loginPlateForm row">
                <label class="labelLoginAdm col s12 m6" name="nomUtilisateurLabel">Nom d'utilisateur ou e-mail</label>
                <input class ="inputLoginAdm col s12 m6" name="nomUtilisateurInput" type="text" placeholder="nom d'utilisateur ou e-mail">
            </div>
            <div id ="mdt" class="loginPlateForm row">
                <label class="labelLoginAdm col s12 m6" name="mdtLabel">Mot de passe</label>
                <input class ="inputLoginAdm col s12 m6" name="mdtInput" type="password" placeholder="mot de passe"> <br>
            </div>
            <a href="accueil.blade.php" id="connexionAdm"class="waves-effect waves-light btn">Connexion</a>
        </form>
        <a href="#" id ="mdtOublie">Mot de passe oublié ?</a>
    </section>
</main>
@endsection