@extends('layouts.masterAdmin')
@section('title', 'Ciao.ch - Administration - Actualités')

@section('content')
<script>
var news = {!! $news !!};
var categories = {!! $categories !!};
</script>
<script src="//code.jquery.com/jquery-2.1.2.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year
    format: 'yyyy-mm-dd' });
    
      $('select').material_select();
    });
</script>
<main class="main">
@if(count($errors) > 0)
<div>
<ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
</div>
@endif
        <div id="ajouterActualiteAdmForm">
            <form files="true" method="POST" action="{{url('/admin/actualites')}}">
                <h2 id="titreAjouterActu">
                    Ajouter une actualité
                </h2>
                <div id="titre" class="loginPlateForm row">
                    <label id="placeholderTitre" class="labelLoginAdm col s12 m6" name="titre">Titre</label> <br>
                    <input class ="inputLoginAdm col s12 m6" id="titreInput" name="titre" type="text" placeholder="titre">
                </div>
                
                <!-- Selection de l'article -->
                
                <div class="row">
                    <div id ="mdt" class="loginPlateForm col s12 l6">
                        <label for="texte">Texte</label>
          				<textarea id="texte" name="texte" type="text" placeholder="article..." class="materialize-textarea"></textarea></textarea>
                    </div>
                </div>
                
                <!-- Selection de la date -->
                <div class="row">
                    <div class="input-field col s12 l6">
                        <label for"dateCreation">Date</label>
                        <input id="dateArticleAAjouter" name="dateCreation" type="date" class="datepicker">

                    </div>
                </div>
                
<!-- Catégories -->
                <div class="row">
                    <div class="input-field col s12 l6">   
<select multiple name="categorie_id" id="categorie_id" >
                      	@foreach(json_decode($categories, true) as $value)
                      		<option value="{{ $value['id'] }}"> {{ $value['nom'] }} </option>
						@endforeach
</select>
<label for="categorie_id">Catégorie(s)</label>
</div>
</div> 
<!-- Actualités liées-->
                <div class="row">
                    <div class="input-field col s12 l6">    
<select multiple name="actualiteLiee_id">
                      	@foreach(json_decode($news, true) as $value)
                      		<option value="{{ $value['id'] }}" name="actualiteLiee_id"> {{ $value['titre'] }} </option>
						@endforeach
</select>
<label for="categorie_id">Actualité(s) liée(s)</label>
</div>
</div>  
                <div class="row">
                    <label class="ajouterActuFormLabel col s12 l3" id ="choixMedia" for="test5">Choisir un média</label>
                    <div id ="choixFile" class="input-field col s12 l3">
                        <input id="cheminDossier" type="file" name="image">
                    </div>
                </div>
                <div id="buttons" class="row">
                    <div class="col s12 l4">
                        <a href="" id="boutonAnnuler" class="waves-effect waves-light btn">Annuler</a>
                       <button class="btn waves-effect waves-light" type="submit" name="action">Enregistrer
    <i class="material-icons">done</i>
  </button>
                    </div>
                </div>
            </form>
        </div>
        </div>
</main>
@endsection