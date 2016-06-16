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

        <div class="test row">
            <div class="col s12 m7 l7" >
                <video class="responsive-video" id="mavideo" controls>
                <source src="{{asset('assets/img/video.mp4')}}" type="video/mp4">
                </video>
            </div>
            <div  class="col s12 m5 l5">
            </br>
            <div id="map-canvas"></div>
            </div>

        </div>

@endsection