@extends('layouts.master')
@section('title', 'Login')
<link rel="stylesheet" href="{{asset('assets/css/styleactu.css')}}">
<script src="//code.jquery.com/jquery-2.1.2.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
@section('content')
<div id="login-page" class="row">
@if(Session::has('error'))
<div class="col l4 offset-l4">
<div class="card-panel red lighten-4">
          <span class="red-text text-darken-4">{{Session::get('error')}}
          </span>
</div>
</div>
@endif
@if(Session::has('success'))
<div class="col l4 offset-l4">
<div class="card-panel green lighten-4">
          <span class="green-text text-darken-4">{{Session::get('success')}}
          </span>
</div>
</div>
@endif
      <form method="post" class="login-form col l4 offset-l4 col m12 col s12 center" action="{{url('/')}}">
        <div class="row">
          <div class="input-field col s12 center">
            <p class="center login-form-text">Se connecter sur Ciao.ch</p>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m12 l12">
            <i class="mdi-social-person-outline prefix"></i>
            <input id="username" type="text" name="pseudo">
            <label for="username" class="center-align">Pseudo</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m12 l12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input id="password" type="password" name="motDePasse">
            <label for="password">Mot de passe</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12 m12 l12">
              <button class="btn waves-effect waves-light" type="submit" name="action">Se connecter
                <i class="material-icons right">send</i>
              </button>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6">
            <p class="margin medium-small"><a href="page-register.html">Pas de compte? S'enregistrer!</a></p>
          </div>
          <div class="input-field col s6">
              <p class="margin right-align medium-small"><a href="page-forgot-password.html">Mot de passe perdu ?</a></p>
          </div>          
        </div>

      </form>
  </div>

@endsection