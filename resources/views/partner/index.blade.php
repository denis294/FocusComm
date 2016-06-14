@extends('layouts.masterAdmin')
@section('title', 'Partner')

@section('content')
<link rel="stylesheet" href="{{asset('assets/css/partner.css')}}">
<main class="main">
@if(!Session::has('group'))
<section id="introPartner">
<h3>Bienvenue sur la plateforme partenaire de ciao.ch</h3>
</section>

<section id ="loginPlateForme" class="row">
@if(Session::has('error'))
<div id="MessageErr">
    <h5 class="IconFail"></h5>
    <h6 id="MessErr">
        <ul>
        <li>{{Session::get('error')}}</li>
        </ul>
    </h6>
</div>
@endif
@if(Session::has('success'))
<div>
  <h2 class="green-text">Déconecté avec succès</h2>
</div>
@endif
</br>
    <form method="POST">
        <div id="nomUtilisateur" class="loginPlateForm row">
            <label class="labelLoginAdm col s12 m6" name="nomUtilisateurLabel" >Nom d'utilisateur ou e-mail</label>
            <input class ="inputLoginAdm col s12 m6" name="pseudo" type="text" placeholder="nom d'utilisateur ou e-mail">
        </div>
        <div id ="mdt" class="loginPlateForm wor">
            <label class="labelLoginAdm col s12 m6" name="mdtLabel">Mot de passe</label>
            <input class ="inputLoginAdm col s12 m6" name="motDePasse" type="password" placeholder="mot de passe"> <br>
        </div>
          <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
    </form>
    <a href="#" id ="mdtOublie">Mot de passe oublié ?</a>
</section>
@else
<div class="row">
<a href="/partner/quizz">
  <div class=" blue darken-2 col s12">
    <h2 class="white-text">Quizz</h2>
  </div>
  </a>
</div>
@endif



</main>
@endsection