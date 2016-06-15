@extends('layouts.master')
@section('title', 'Accès interdit')
<link rel="stylesheet" href="{{asset('assets/css/styleactu.css')}}">
<script src="//code.jquery.com/jquery-2.1.2.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
@section('content')
<div class="row">
<h1>Accès restreint !</h1>
<a href="/" class="waves-effect waves-light btn"><i class="material-icons left">cloud</i>Retour à l'accueil</a>
@endsection