@extends('layouts.masterAdmin')
@section('title', 'Admin')

@section('content')
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
        <div class="col m4" id="utilisateursDiv">
            <a href="/admin/users/">
            <article class="categoriesAdmList categorieAdm" id="utilisateurs">
                <div class="boite">
                    <h1 class="titreCategorieAdm">Utilisateurs</h1>
                </div>
            </article>
            </a>
        </div>
        <div class="col m4" id="compteDiv">
                    <a href="/admin/compte/">
            <article class="categoriesAdmList categorieAdm" id="compte">
                <div class="boite">
                    <h1 class="titreCategorieAdm">Compte</h1>
                </div>
            </article>
            </a>
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
@endsection