@extends('layouts.masterPartner')
@section('title', 'Partner')

@section('content')
<main class="main">

<section id="introPartner">
<h3>Bienvenue sur la plateforme partenaire de ciao.ch</h3>
</section>

<section id ="loginPlateForme" class="row">

<div id="MessageErr">
    <h5 class="IconFail"></h5>
    <h6 id="MessErr">
        <ul>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </h6>
</div>

</br>

    <form>
        <div id="nomUtilisateur" class="loginPlateForm row">
            <label class="labelLoginAdm col s12 m6" name="nomUtilisateurLabel" >Nom d'utilisateur ou e-mail</label>
            <input class ="inputLoginAdm col s12 m6" name="nomUtilisateurInput" type="text" placeholder="nom d'utilisateur ou e-mail">
        </div>
        <div id ="mdt" class="loginPlateForm wor">
            <label class="labelLoginAdm col s12 m6" name="mdtLabel">Mot de passe</label>
            <input class ="inputLoginAdm col s12 m6" name="mdtInput" type="password" placeholder="mot de passe"> <br>
        </div>
        <a class="waves-effect waves-light btn boutonConnexion" type="submit" id="bouton_connection">Connexion</a>
    </form>
    <a href="#" id ="mdtOublie">Mot de passe oublié ?</a>
</section>




</main>
@endsection