@extends('layouts.master')

@section('title', 'Contenu')
@section('page', 'Stress')

@section('sidenav')
<link rel="stylesheet" href="{{asset('assets/css/sidenav.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/contenu.css')}}">
<script src="{{asset('assets/js/materialize.js')}}"></script>
<div id="sidenav">
  <ul class="side-nav fixed">
  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li><a href="#Stress" class="collapsible-header">Stress</a>
          <div class="collapsible-body">
              <ul>
                  <li><a href="#questcequelestress">Qu'est-ce que le stress?</a></li>
                  <li><a href="#mecanismedustress">Mécanismes du stress</a></li>
                  <li><a href="#!">Réponses au stress</a></li>
                  <li><a href="#!">Symptômes du stress</a></li>
                  <li><a href="#!">Sources du stress</a></li>
                  <li><a href="#!">Faire face au stress</a></li>
                  <li><a href="#!">Stress et sommeil</a></li>
                  <li><a href="#!">Stress et examens</a></li>
                  <li><a href="#!">Stress et puberté</a></li>
                  <li><a href="#!">Stress et quotidien</a></li>
                  <li><a href="#!">Stress et vie scolaire</a></li>
                  <li><a href="#!">Ressources contre le stress</a></li>
              </ul>
          </div>
      </li>
      
      
      <li><a href="#!" class="collapsible-header">Estime de soi</a></li>
      
      
      <li><a href="#!" class="collapsible-header">Sexualité</a></li>
      
      
      <li><a href="#!" class="collapsible-header">Boire, fumer, se droguer</a></li>
      
      
      <li><a href="#!" class="collapsible-header">Santé</a></li>
      
      
      <li><a href="#!" class="collapsible-header">Manger-bouger</a></li>
      
      
      <li><a href="#!" class="collapsible-header">Moi, toi et les autres</a></li>
      
      
      <li><a href="#!" class="collapsible-header">Violence</a></li>
      
      
      <li><a href="#!" class="collapsible-header">Formation et travail</a></li>
      
      
      <li><a href="#!" class="collapsible-header">Argent</a></li>
      
      
      <li><a href="#!" class="collapsible-header">Religion et croyance</a></li>
      
      
      <li><a href="#!" class="collapsible-header" >Discrimination et rasicmes</a>
        <div class="collapsible-body">
          <ul>
              <li><a href="#!">First N2</a></li>
              <li><a href="#!">Second N2</a></li>
              <li><a href="#!">Third N2</a></li>
              <li class="no-padding">
                  <ul class="collapsible collapsible-accordion">
                    <li><a href="#!" class="collapsible-header" >Second Sidebar Link</a>
                      <div class="collapsible-body">
                        <ul>
                            <li><a href="#!">First N2</a></li>
                            <li><a href="#!">Second N2</a></li>
                            <li><a href="#!">Third N2</a></li>
                            <li><a href="#!">Fourth N2</a></li>
                          </ul>
                      </div>
                    </li>
                  </ul>
                </li>
            </ul>
        </div>
      </li>
    </ul>
  </li>
  </ul>

  <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
</div>
@endsection

@section('content')

<section id="contenu" class="content">
    
    <h2 id="questcequelestress">Qu'est ce que le stress</h2>
    <h3>Le stress, c'est quoi?</h3>
    <p>Selon Hans Selye, le stress c’est la vie&nbsp; et puisqu'il fait partie de la vie, il faut apprendre à l’apprivoiser.</p>
    <p>Le stress est un phénomène naturel et utile. C’est l'ensemble des réponses d'un organisme soumis à des pressions ou des contraintes de la part de son environnement. Cela mobilise une certaine énergie qu’il est nécessaire de libérer pour retrouver un équilibre satisfaisant.</p>
    <p>L’état de stress provient du sentiment d’être débordé-e ou de manquer de contrôle face à une situation. <strong>Il traduit une difficulté d’adaptation.</strong></p>
    <p><img src='assets/img/adaptation_stress.jpg' alt="schéma explicatif du stress: une balance en équilibre flèche stress entraine déséquilibre de la balnce flèche adaptation qui entraine rééquilibre de la balance" width="400" height="105"></p>
    <p>Et il survient lorsqu’il y a un déséquilibre entre la perception qu’une personne a</p>
    <ul><li>des contraintes que l’environnement lui impose</li>
    <li>de ses propres moyens pour y faire face.</li>
    </ul>

    <h3> Stress aigü et stress chronique</h3>
    <p>Il existe 2 sortes de stress – le stress aigu et le stress chronique –&nbsp; qui entrainent des effets différents sur le corps et dans le cerveau&nbsp;:</p>
    <ul><li>Le<strong> stress aigu</strong> <strong>fait partie de la vie quotidienne </strong>et t'aide à faire face aux situations sur lesquelles tu as peu de contrôle. Il survient à un moment précis et reste ponctuel. Il te permet de répondre de manière plus efficace et adaptée aux situations nouvelles et/ou imprévisibles&nbsp;!<br><span style="line-height: 16px; font-size: 13px;">Par exemple&nbsp;: faire un exposé devant toute ta classe, éviter de justesse un accident de la route.</span></li>
    </ul><ul><li>Le <strong>stress chronique est l’exposition au stress de manière répétée</strong> <strong>et pendant une longue durée</strong>. Il mobilise beaucoup d’énergie et à la longue affaiblit corps et esprit. Il peut mener à l’épuisement ainsi qu'à &nbsp;des problèmes de santé (manque de motivation, envie de rien, fatigue, tristesse, états dépressifs…)</li>
    </ul><p><a href="http://www.inrs.fr/accueil/dms/inrs/CatalogueMultimedia/TI-Anim-005/stress-travail-anim-005.swf" onclick="window.open(this.href,'_blank');return false;" target="_blank">Explication en animation <img src="/midcom-serveattachmentguid-e891e60ee52511de8ab9ed5784164e474e47/new_window.png" alt="Lien externe, nouvelle fenêtre" width="12" height="12"></a></p>
    <p>On pourrait aussi dire que le stress c’est comme tenir un verre d’eau&nbsp;:</p>
    <ul><li><span style="font-size: 13px;">si je le tiens pendant une minute, ce n’est pas un problème.</span></li>
    <li><span style="font-size: 13px;">si je le tiens pendant une heure, j’aurai mal au bras.</span></li>
    <li><span style="font-size: 13px;">si je le tiens pendant une journée entière, mon bras se sera engourdi et paralysé.</span></li>
    </ul><p>Dans chaque cas, le poids du verre d’eau ne change pas. Mais plus je dois le tenir longtemps plus il devient lourd et plus je me fatigue.</p> 

    <h3> Les trois phases du stress</h3>
    <p><strong>Le stress appelé aussi réaction d’adaptation</strong> permet de réagir à son environnement. Ce syndrome général d’adaptation (selon Hans Selye, 1935) se déroule en 3 phases :</p>
    <p><img class="image_centree" src="assets/img/3_phases_du_stress.png" alt="schéma des 3 phases: alarme: une grosse pile de dossier tombe sur la tête d'un homme, il résiste en retenant les dossiers avec les mains et s'épuise: il est noyé sous les dossiers" width="388" height="204"></p>
    <ol><li><strong>La phase d’alarme </strong><span style="font-size: 13px;">: l’organisme se prépare à la fuite ou au combat.&nbsp;<br></span><span style="font-size: 13px;">Dans cette phase, tous les sens sont en alerte : tes forces de défense sont mobilisées, un peu comme une armée en marche. Tu mobilises toute ton énergie pour réagir.</span></li>
    <li><strong>La phase de résistance</strong><span style="font-size: 13px;"> : l’organisme s’adapte.&nbsp;<br></span><span style="font-size: 13px;">C’est la phase d’adaptation à l’agent stressant : tes mécanismes d’adaptation sont poussés au maximum pour préserver ton organisme de l’épuisement. Tu consommes tes réserves d’énergie.</span></li>
    <li><strong>La phase d’épuisement</strong><span style="font-size: 13px;"> : l’organisme est débordé.&nbsp;<br></span><span style="font-size: 13px;">C'est le stade ultime du stress, toutes tes réserves sont consommées, tes mécanismes de défenses dépassés, résistances et tensions s’installent jusqu’à l’épuisement entrainant des problèmes de santé (envie de rien, déprime, états dépressifs…). Tu épuises tes réserves d’énergie.</span></li>
    </ol>

    <h2 id="mecanismedustress">Mécanismes du stress</h2>
    <h3>Comprendre le stress</h3>
    <p>Comprendre les mécanismes du stress permet de le reconnaitre et de pourvoir agir pour le faire diminuer.</p>
    <p>Le stress est dû au déséquilibre entre&nbsp;:</p>
    <ul><li>d’une part les exigences de certaines situations      et/ou tes propres attentes face à celles-ci,</li>
    <li>et d’autre part tes capacités à faire face à ces      situations et/ou le fait que celles-ci te mettent sous pression.</li>
    </ul><p><img class="image_centree" src="assets/img/balance_stress.png" alt="schéma explicatif des mécanismes du stress" width="398" height="141"></p>
    <p>Pour diminuer le stress, il est nécessaire de ré-équilibrer la balance:</p>
    <ul><li> tu peux essayer de diminuer les pressions (exigences extérieures, attentes)</li>
    <li>et/ou augmenter les ressources (capacités, possibilités d’agir sur la situation)</li>
    </ul><p><img class="image_centree" src="assets/img/pression_stress.png" alt="schéma explicatif pour rétablir l'équilibre: diminuer les pressions ou augmenter les ressources" width="384" height="147"></p>


</section>

<aside>
    <h5>Zoom sur...</h5>
    <div class="row">

          <div class="card blue-grey darken-1 hoverable">
            <div class="card-content white-text">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
    </div>
</aside>
@endsection