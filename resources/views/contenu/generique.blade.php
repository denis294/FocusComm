@extends('layouts.master')

@section('title', 'Contenu')
@section('page', 'Argent')

@section('sidenav')
<link rel="stylesheet" href="{{asset('assets/css/sidenav.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/contenu.css')}}">
<script src="{{asset('assets/js/materialize.js')}}"></script>
<script src="{{asset('assets/js/tp/mainContenu.js')}}"></script>
<div id="sidenav">
    <!--Colonne pour les catégories-->
<ul id="slide-out" class="side-nav fixed">
      <li><a href="stress" class="filter waves-effect waves-teal" data-cat=1>Stress</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal" data-cat=2>Estime de soi</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal" data-cat=3>Sexualité</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal" data-cat=4>Boire, fumer, se droguer</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal" data-cat=5>Santé</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal" data-cat=6>Manger-bouger</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal" data-cat=7>Moi, toi et les autres</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal" data-cat=8>Violence</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal" data-cat=9>Formation et travail</a></li>
      <li><a href="argent" class="filter waves-effect waves-teal active" data-cat=10>Argent</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal" data-cat=11>Religion et croyance</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal" data-cat=12>Discrimination et rasicmes</a></li>
    </ul>
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
</div>
@endsection

@section('content')

<div class="actualite" id="card_{{id}}">
            <div class="card">
                <div class="imageActu">
                    <img src="../assets/img/news/{{image}}">
               </div>
               <div class="contenuActu">
                    <span class="card-title">{{titre}}</span>
                    <p>
                           {{texte}}
                    </p>
                    {{#if link.titre}}<p>Autres article en lien</p>
                        <div class="footerActu"> 
                            <a class="articleliee" data-actualiteLiee_id="{{actualiteLiee_id}}" data-actualite_id="{{id}}" href="#{{dateCreation}}{{titre}}">{{link.titre}}</a>
                        </div>
                    {{/if}}
                    <div class="footerActu">
                        <span class="dateActu">{{dateCreation}}</span>
                        <a href="http://www.facebook.com"><img src="../assets/img/facebook.png"></a>
                    </div>
               </div>
            </div>
        </div>


@endsection