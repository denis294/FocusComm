@extends('layouts.master')
@section('title', 'Accueil')

@section('content')

                <script src="{{asset('assets/js/tp/main.js')}}"></script>

                <section id="categories" class="row accueil categories ">
<article id="intro">
                    <h3 id="titleIntro">Plateforme d’information, d’aide et d’échanges pour les 11 - 20 ans.</h3>
                </br>
                                </article>
                </section>

                <section id="contenu" class="content">
                    <nav id ="CategorieListe">
                    </nav>
                </section>

        <div class="test row delindex">
            <div class="col s12">
                <h4 class="slog">Ciao.ch, qui, pourquoi, comment ?</h4>
            </div>
            <div class="col s12 m7 l7 video" >
                <video class="responsive-video" id="mavideo" controls>
                <source src="{{asset('assets/img/video.mp4')}}" type="video/mp4">
                </video>
            </div>
            <div  class="col s12 m5 l5">
            </br>
             </br>
              </br>
             <div class="row">
                <div class="col s12">
                  <div class="card white darken-1 cartIntro">
                    <div class="card-content black-text">
                      <span class="card-title">Une <span id="ev">Impression</span>  </span>
                      <p>Donne-nous <span id="ev">UN</span> mot, adjectif ou verbe qui te viens à l'ésprit lorsque tu pense à <span id="ev">Ciao.ch</span></p>
                    </div>
                    <div class="card-action">
                        <div class="row">
                            <div class="input-field col s12">
                              <input placeholder="Utile" id="first_name2" type="text" class="validate">
                              <label class="active" for="first_name2">Impression</label>
                            </div>
                        </div>
                        <button class="btn waves-effect waves-light" id="boutonImpression"type="submit" name="action">Envoyer
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                  </div>
                </div>
              </div>


            <div class="row">
                <div class="col s12">
                <div class="card white darken-1 cartIntro">
                    <div class="card-content black-text">
                          <span class="card-title">Une <span id="ev">URGENCE</span></span>
                          <p><span class="iconUrgence"></span></p>
                        </div>
                </div>
                </div>
            </div>

            <div id="map-canvas"></div>
            </div>

        </div>

@endsection