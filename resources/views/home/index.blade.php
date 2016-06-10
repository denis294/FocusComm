@extends('layouts.master')
@section('title', 'Home')

@section('content')


                <section id="categories" class="row accueil categories">
                    <article id="intro">
                    <h3 id="titleIntro">Ciao.ch est destiné aux jeunes romands de 11 à 20 ans </h3>
                    <p id="introDescription"> - Il présente des informations rédigées par des experts.</p>
<p>- Il permet de poser des questions anonymement et gratuitement à des spécialistes qui répondent dans les deux jours ouvrables.</p>
<p>- Il donne des informations nécessaires en cas d’urgence et des adresses utiles.</p>
<p>- Il offre un espace interactif de forums, tchats et témoignages.</p>
                    </article>
                </section>

                <section id="contenu" class="content">
                    <nav id ="CategorieListe">
                    </nav>
                </section>




                <article id="quiz">

                    <h2>Choisir Catégorie</h2>

                        <section id="categoriesQuiz" class="row catQuiz">
                        </section>

                        <section id="contenu_quizz" class="contentQuiz">
                        </section>

                </article>
@endsection