@extends('layouts.master')
@section('title', 'Home')

@section('content')

                <script src="//code.jquery.com/jquery-2.1.2.min.js"></script>
                <script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
                <script src="{{asset('assets/js/tp/register.js')}}"></script>
                <link rel="stylesheet" href="{{asset('assets/css/register.css')}}">
                <link rel="stylesheet" href="{{asset('assets/css/styleactu.css')}}">

                <section id="register">

                    <h3>S'inscrire sur Ciao.ch</h3>
                        <div class="row">
                            <form class="col s12">
                                <div class="partie1 row">
                                <div class="input-field col s12 m6">
                                      <i class="material-icons prefix">account_circle</i>
                                      <input id="icon_prefix" type="text" name="pseudo "class="validate">
                                      <label for="icon_prefix">Pseudo</label>
                                </div>
                                <div class="input-field col s12 m6">
                                      <i class="material-icons prefix">mail</i>
                                      <input id="icon_telephone" name="email" type="tel" class="validate">
                                      <label for="icon_telephone">Adresse email</label>
                                </div>
                                </div>
                            </br>
                                <div>
                                <label class="lab">date de naissance</label> </br>
                                <input type="date" name="dateNaissance" class="datepicker">
                                </div>
                                <div>
                                </br>
                                <label class="lab">Sexe</label> </br>
                                </br>
                                <p class="genre">
                                  <input name="sexe" type="radio" id="test1" />
                                  <label for="test1">Fille</label>
                                  <input name="sexe" type="radio" id="test2" />
                                  <label for="test2">Garçon</label>
                                </p>
                                </div>
                                <div class="partie1 row">
                                <div class="input-field col s6">
                                      <i class="material-icons prefix">vpn_key</i>
                                      <input id="icon_prefix" type="text" name="motDePasse"class="validate">
                                      <label for="icon_prefix">Mot de passe</label>
                                </div>
                                <div class="input-field col s6">
                                      <i class="material-icons prefix">done</i>
                                      <input id="icon_telephone" type="tel" class="validate">
                                      <label for="icon_telephone">Confirmation du mot de passe</label>
                                </div>
                                </div>

                            </br>
                            </br>

                                <button class="btn waves-effect waves-light" type="submit" name="action">S'enregistrer
                                    <i class="material-icons left">perm_identity</i>
                                </button>



                            </form>
                        </div>
                </section>

@endsection