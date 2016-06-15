@extends('layouts.masterAdmin')
@section('title', 'Ciao.ch - Administration - Actualités')

@section('content')
<script>
var news = [];
$(document).ready(function() {
    $("#ajouterActualiteAdmForm").show();
    $("#visualisationArticle").hide();
});
</script>
<script>
var categories = {!! $categories !!};
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
                <div class="row">
                    <div id ="mdt" class="loginPlateForm col s12 l6">
                        <label class="labelLoginAdm" name="mdtLabel">Article</label>
                        <textarea id="placeholderArticle" name="texte" type="texta" placeholder="article..."></textarea><br>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 l6">
                        <input id="dateArticleAAjouter" name="dateCreation" type="date" class="ajouterActuFormInput ajouterActuFormLabel">
                    </div>
                </div>
                <div id="categorie_id" class="loginPlateForm row">
                    <label id="placeholderCategorie" class="labelLoginAdm col s12 m6" name="categorie_id">Categorie</label> <br>
                    <select name="categorie_id" style="display:inline; width:300px;">
                      	@foreach(json_decode($categories, true) as $value)
                      		<option value="{{ $value['id'] }} "> {{ $value['nom'] }} </option>
						@endforeach
					</select>
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
                                            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
    <i class="material-icons right">send</i>
  </button>
                    </div>

                </div>
            </form>
        </div>
        </div>
</main>
@endsection