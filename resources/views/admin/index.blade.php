@extends('layouts.masterAdmin')
@section('title', 'Admin')

@section('content')
@if(Session::has('group'))
<h1>Vous êtes connecté en tant qu'admin !</h1>

@else
<main class="main">
@if(Session::has('success'))
<div style="color:green">
    <h5>{{Session::get('success')}}</h5>
</div>
@endif
@if(Session::has('error'))
<div style="color:red">
    <h5>{{Session::get('error')}}</h5>
</div>
@endif
<section id ="loginPlateForme" class="row">
    <form method="POST">
        <div id="nomUtilisateur" class="loginPlateForm row">
            <label class="labelLoginAdm col s12 m6" name="nomUtilisateurLabel">Nom d'utilisateur ou e-mail</label>
            <input class ="inputLoginAdm col s12 m6" name="pseudo" type="text" placeholder="nom d'utilisateur ou e-mail">
        </div>
        <div id ="mdt" class="loginPlateForm wor">
            <label class="labelLoginAdm col s12 m6" name="mdtLabel">Mot de passe</label>
            <input class ="inputLoginAdm col s12 m6" name="motDePasse" type="text" placeholder="mot de passe"> <br>
        </div>
        <input type="submit" name="" value="Connexion">
        <a class="waves-effect waves-light btn">Connexion</a>
    </form>
    <a href="#" id ="mdtOublie">Mot de passe oublié ?</a>
</section>
<section id="accueilEspaceAdm">

</section>

<section id="actualiteAdm">

</section>

</main>
@endif
@endsection