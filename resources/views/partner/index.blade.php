@extends('layouts.masterAdmin')
@section('title', 'Partner')

@section('content')
<main class="main">
    <section id="accueilEspaceAdm" class="row">
        <div class=" col m3"></div>
        <div class=" col m3" id="quizDiv">
        <a href="/partner/quizz">
            <article class="categoriesAdmList categorieAdm" id="quiz">
                <div class="boite">
                    <h1 class="titreCategorieAdm">Quiz</h1>
                </div>
            </article></a>
        </div>
        <div class="col m3" id="compteDiv">
                    <a href="/partner/compte/">
            <article class="categoriesAdmList categorieAdm" id="compte">
                <div class="boite">
                    <h1 class="titreCategorieAdm">Compte</h1>
                </div>
            </article>
            </a>
        </div>
        <div class=" col m3"></div>
    </section>
</main>
@endsection