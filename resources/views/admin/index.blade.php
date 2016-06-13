@extends('layouts.masterAdmin')
@section('title', 'Admin')

@section('content')
<main class="main">
    <section id ="loginPlateForme" class="row">
        <form method="POST">
            <div id="nomUtilisateur" class="loginPlateForm row">
                <label class="labelLoginAdm col s12 m6" name="pseudo">Nom d'utilisateur ou e-mail</label>
                <input class ="inputLoginAdm col s12 m6" name="pseudo" type="text" placeholder="nom d'utilisateur ou e-mail">
            </div>
            <div id ="mdt" class="loginPlateForm row">
                <label class="labelLoginAdm col s12 m6" name="motDePasse">Mot de passe</label>
                <input class ="inputLoginAdm col s12 m6" name="motDePasse" type="password" placeholder="mot de passe"> <br>
            </div>
             <button id="connexionLogin" class="btn waves-effect waves-light" type="submit" name="action">Connexion
                <i class="material-icons right">send</i>
            </button>
        </form>
        <a href="#" id ="mdtOublie">Mot de passe oublié ?</a>
    </section>
</main>
@endsection