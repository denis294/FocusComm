@extends('layouts.master')
@section('title', 'Home')

@section('content')

				<script src="{{asset('assets/js/tp/main.js')}}"></script>

                <section id="categories" class="row accueil categories">
<article id="intro">
                    <h3 id="titleIntro">Plateforme d’information, d’aide et d’échanges pour les 11-20 ans.</h3>
                    </article>
                </section>

                <section id="contenu" class="content">
                    <nav id ="CategorieListe">
                    </nav>
                </section>

        <section class="test">
            <div id="mavideo">
                <video id="mavideo" controls src="{{asset('assets/img/video.mp4')}}">blablabla</video>
            </div>
        </section>

@endsection