@extends('layouts.masterAdmin')
@section('title', 'Admin')

@section('content')
<script>
var news = [];
$(document).ready(function() {
    $("#ajouterActualiteAdmForm").show();
    $("#visualisationArticle").hide();
});
</script>
<main class="main">
        <div id="ajouterActualiteAdmForm">
            <form>
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
                <div class="row">
                    <label class="ajouterActuFormLabel col s12 l3" id ="choixMedia" for="test5">Choisir un média</label>
                    <div id ="choixFile" class="input-field col s12 l3">
                        <input id="cheminDossier" type="file" name="image">
                    </div>
                </div>
                <div id="buttons" class="row">
                    <div class="col s12 l4">
                        <a href="" id="boutonAnnuler" class="waves-effect waves-light btn">Annuler</a>
                    </div>
                    <div class="col s12 l4">
                        <a href="#!" id="boutonAjouter" class="waves-effect waves-light btn">Terminer</a>
                    </div>
                </div>
            </form>
        </div>

        <div id ="visualisationArticle" class="row">
            <div id="actualiteInfos" class="col s12">
                <nav id="breadcrumbs" class="row">
                    <div class="nav-wrapper">
                        <div>
                            <a href="liste.blade.php" id="listeArticle" class="breadcrumb">Liste articles</a>
                            <a href="#!" id="creation" class="breadcrumb">Création</a>
                            <a href="#!" id="confirmation" class="breadcrumb">Confirmation</a>
                        </div>
                    </div>
                </nav>
                <div class="row">
                    <div class="col s12 l4">
                        <a id="boutonPrecedent" class="waves-effect waves-light btn">Précédent</a>
                    </div>
                    <div class="col s12 l4">
                        <a id="boutonConfirmer" class="waves-effect waves-light btn">Confirmer</a>
                    </div>
                </div>
            </div>
            <div id="articleAVisualise" class="col s12">
                <article>
                    <h1 id="titreVisualisation">Visualisation de l'article</h1>
                    <img id="imageForm" src="">
                    <h2 id="titreForm"></h2>
                    <div><p id="descriptionForm"></p></div>
                    <div><p id="dateForm"></p></div>
                </article>
            </div>
        </div>
</main>
@endsection