@extends('layouts.masterAdmin')
@section('title', 'Ciao.ch - Administration - Actualités')

@section('content')
<script>
var actu = {!! $actu !!}; 
var categories = {!! $categories !!};  
var allActus = {!! $allActus !!};
</script>
<script src="//code.jquery.com/jquery-2.1.2.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
         $('select').material_select();
         $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year
    format: 'yyyy-mm-dd' });
    });
</script>

@foreach(json_decode($actu, true) as $value)
<main class="main">
<form action="/admin/actualites/{{ $value['id'] }}">
<input type="hidden" name="_method" value="PUT">
<!-- Titre -->
<div class="row">
    <div class="input-field col s6">
      <input value="{{ $value['titre'] }}" id="titre" name="titre" type="text" class="validate">
      <label class="active" for="titre">Titre de l'actualité</label>
      
    </div>
</div>
<!-- Texte -->
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" id="texte" class="materialize-textarea" name="texte" >{{ $value['texte'] }}</textarea>
          <label for="textarea1">Texte</label>
        </div>
      </div>
                      <!-- Selection de la date -->
                <div class="row">
                    <div class="input-field col s12 l6">
                        <label for"dateCreation">Date</label>
                        <input id="dateArticleAAjouter" name="dateCreation" type="date" class="datepicker">

                    </div>
                </div>
<!-- Image -->
      <div class="row">
        <div class="input-field col s12">
          <p>image</p>
        </div>
      </div>
@endforeach
<!-- Catégories -->
<div class="row">
    <div class="input-field col s12">      
<select multiple name="categorie_id" id="categorie_id" >
                      	@foreach(json_decode($actu, true) as $value)
                      		<option selected disabled value="{{ $value['categorie_id'] }}">Cliquez pour changer les catégories</option>
						@endforeach
                      	@foreach(json_decode($categories, true) as $value)
                      		<option value="{{ $value['id'] }}"> {{ $value['nom'] }} </option>
						@endforeach
</select>
<label for="categorie_id">Catégorie(s)</label>
</div>
</div>
<!-- Actualités liées-->
<div class="row">
    <div class="input-field col s12">      
<select multiple name="categorie_id" id="categorie_id" >
                      	@foreach(json_decode($actu, true) as $value)
                      		<option selected disabled value="{{ $value['actualiteLiee_id'] }}">Cliquez pour changer les actualités liées</option>
						@endforeach
                      	@foreach(json_decode($allActus, true) as $value)
                      		<option value="{{ $value['id'] }}"> {{ $value['titre'] }} </option>
						@endforeach
</select>
<label for="categorie_id">Actualité(s) liée(s)</label>
</div>
</div>    
<div class="input-field col s12">  
                <div id="buttons" class="row">
                    <div class="col s12 l4">
                        <a href="" id="boutonAnnuler" class="waves-effect waves-light btn">Annuler</a>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Enregistrer
    <i class="material-icons">done</i>
  </button>
                    </div>
</div>
                </div>
            </form>
        </div>
        </div>
</main>
@endsection