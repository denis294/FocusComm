@extends('layouts.masterAdmin')
@section('title', 'Admin')

@section('content')
@if(Session::get('group') !== 'admin')
<main class="main">
    <section id ="loginPlateForme" class="row">
        <form method="POST">
            <div id="nomUtilisateur" class="loginPlateForm row">
                <label class="labelLoginAdm col s12 m6" name="pseudo">Nom d'utilisateur ou e-mail</label>
                <input class ="inputLoginAdm col s12 m6" name="pseudo" type="text" placeholder="nom d'utilisateur ou e-mail">
            </div>
            <div id ="mdt" class="loginPlateForm row">
                <label class="labelLoginAdm col s12 m6" name="motDePasse">Mot de passe</label>
                <input class ="inputLoginAdm col s12 m6" name="motDePasse" type="password" placeholder="mot de passe"> <br>
            </div>
             <button class="btn waves-effect waves-light" type="submit" name="action">Connexion
                <i class="material-icons right">send</i>
            </button>
        </form>
        <a href="#" id ="mdtOublie">Mot de passe oublié ?</a>
    </section>
</main>
@else
<main class="main">
    <section id="accueilEspaceAdm" class="row">
        <div class= "col m4" id="contenuDiv">
            <article class="categoriesAdmList categorieAdm" id="contenu">
                <div class="boite">
                    <h1 class="titreCategorieAdm">Contenu</h1>
                </div>
            </article>
        </div>
        <div class="col m4" id="actualiteDiv">
            <a href="/admin/actualites/">
                <article class="categoriesAdmList categorieAdm" id="actualite">
                    <div class="boite">
                        <h1 class="titreCategorieAdm">Actualité</h1>
                    </div>
                </article>
            </a>
        </div>
        <div class=" col m4" id="quizDiv">
            <article class="categoriesAdmList categorieAdm" id="quiz">
                <div class="boite">
                    <h1 class="titreCategorieAdm">Quiz</h1>
                </div>
            </article>
        </div>
        <div class="c col m4" id="utilisateursDiv">
            <article class="ategoriesAdmList categorieAdm" id="utilisateurs">
                <div class="boite">
                    <h1 class="titreCategorieAdm">Utilisateurs</h1>
                </div>
            </article>
        </div>
        <div class="col m4" id="compteDiv">
            <article class="categoriesAdmList categorieAdm" id="compte">
                <div class="boite">
                    <h1 class="titreCategorieAdm">Compte</h1>
                </div>
            </article>
        </div>
        <div class="col m4" id="autreDiv">
            <article class="categoriesAdmList categorieAdm" id="autre">
                <div class="boite">
                    <h1 class="titreCategorieAdm">Autre</h1>
                </div>
            </article>
        </div>
    </section>
</main>
@endif
@endsection