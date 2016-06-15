@extends('layouts.masterAdmin')
@section('title', 'Administration - Actualités')

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
    });
</script>

<main class="main">

  	@foreach(json_decode($actu, true) as $value)
<!-- Titre -->
<div class="row">
    <div class="input-field col s6">
      <input value="{{ $value['titre'] }}" id="titre" type="text" class="validate">
      <label class="active" for="titre">Titre de l'actualité</label>
      
    </div>
</div>
<!-- Texte -->
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" >{{ $value['texte'] }}</textarea>
          <label for="textarea1">Texte</label>
        </div>
      </div>
<!-- Image -->
      <div class="row">
        <div class="input-field col s12">
          <textarea id="textarea1" class="materialize-textarea" >{{ $value['texte'] }}</textarea>
          <label for="textarea1">Texte</label>
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
</main>
@endsection