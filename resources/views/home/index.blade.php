@extends('layouts.master')
@section('title', 'Home')

@section('content')

				<script src="{{asset('assets/js/tp/main.js')}}"></script>

<!-- DEBUT CHANGEMENT : SUPPRIMER LA CLASS CATEGORIE -->
                <section id="categories" class="row accueil">
<!-- FIN CHANGEMENT  -->


                                        <article id="intro">
                    <h3 id="titleIntro">Qu'est ce que Ciao.ch ?</h3>
                    <p id="introDescription"> ciao.ch est destiné aux jeunes romands de 11 à 20 ans.</p><p>
12 rubriques et plus de 1700 fiches d’information rédigées pour toi sur des thématiques qui t’intéressent (clique sur les onglets du menu pour y accéder).</p>
                    </article>
                </section>

                <section id="contenu" class="content">
                    <nav id ="CategorieListe">
                    </nav>
                </section>

@endsection