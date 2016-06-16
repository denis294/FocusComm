@extends('layouts.master')

@section('title', 'Contenu')
@section('page', 'Argent')

@section('sidenav')
<link rel="stylesheet" href="{{asset('assets/css/sidenav.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/contenu.css')}}">
<script src="{{asset('assets/js/materialize.js')}}"></script>
<script src="{{asset('assets/js/tp/mainContenu.js')}}"></script>
<div id="sidenav">
  <ul class="side-nav fixed">
  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li><a href="stress" class="collapsible-header waves-effect waves-teal">Stress</a></li>
      <li><a href="#!" class="collapsible-header">Estime de soi</a></li>
      <li><a href="#!" class="collapsible-header">Sexualité</a></li>
      <li><a href="#!" class="collapsible-header">Boire, fumer, se droguer</a></li> 
      <li><a href="#!" class="collapsible-header">Santé</a></li> 
      <li><a href="#!" class="collapsible-header">Manger-bouger</a></li> 
      <li><a href="#!" class="collapsible-header">Moi, toi et les autres</a></li> 
      <li><a href="#!" class="collapsible-header">Violence</a></li>    
      <li><a href="#!" class="collapsible-header">Formation et travail</a></li> 
      <li><a href="" class="collapsible-header waves-effect waves-teal active">Argent</a></li>
      <li><a href="#!" class="collapsible-header">Religion et croyance</a></li>  
      <li><a href="#!" class="collapsible-header" >Discrimination et rasicmes</a></li>
    </ul>
  </li>
  </ul>

  <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
</div>
@endsection

@section('content')

<section id="contenu" class="content">
    <div class="row">
    <div class="col s12 m9 l10 contenuStress">
        <div id="stress" class="section scrollspy">
            <h2>Qu'est ce que le stress</h2>
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
        </div>
        <div id="mecanisme" class="section scrollspy">
            <h2>Mécanismes du stress</h2>
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
        </div>
        <div id="reponseaustress" class="section scrollspy">
            <h2>Réponse au stress</h2>
            <h3>Les différentes réactions au stress</h3>
            <p>Les êtres humains comme les animaux ont une réaction psychophysiologique innée face à tout type de stress : On répond soit par le combat, soit par la fuite ou le freeze (se sentir tétanisé).<strong></strong></p>
            <p>Quand tu es en situation de stress, très vite ton corps sécrète des hormones (adrénaline et cortisol) qui activent certaines de tes fonctions corporelles et psychiques et en diminuent d’autres, par exemple:</p>
            <ul><li> Ton corps est prêt à être plus performant,</li>
            <li>Ta vigilance mentale s’aiguise, </li>
            </ul><p>mais</p>
            <ul><li>Tu perçois moins la douleur et certains détails de ton environnement / la situation,</li>
            <li>et ta mémoire te joue des tours : elle garde en priorité ce qu’elle juge nécessaire à ta survie&nbsp;; elle se fixe sur ces détails et t'empêche de te concentrer sur autre chose (par ex : en salle d’examen, tu te rappelles où est la porte de sortie, mais tu ne trouves plus la formule mathématique…) .</li>
            </ul>
            <h3> En savoir plus</h3>
            <p>D'après les recherches en neurobiologie de MacLean, le cerveau humain, dans son évolution, s’est développé de manière séquentielle : Premièrement le cerveau reptilien, puis le limbique et enfin le neocortex (Le Cerveau Triunique<strong>, </strong>MacLean P., Neurobiologiste, 1970).</p>
            <p><img src="assets/img/cerveau_stress.png" alt="image du cerveau représentant son évolution avec le cerveau reptilien (survie, grandes fonctions, fuite, plaisir et peur) au dessus le cerveau limbique (mémoire et émotions, premiers apprentissages d'acquisition et instinct grégaire) enfin le cortex ( intelligences, créativité, solidarité)" width="400" height="320"></p>
            <p>On aurait en quelques sortes 2 cerveaux&nbsp;: un logique et rationnel (cortex) et un émotionnel&nbsp; (reptilien-limbique) plus primitif. Ils sont étroitement liés et s’activent ensemble pour nous permettre de fonctionner correctement et d’avoir des réponses adaptées à notre environnement. (ex&nbsp;: se couvrir quand il fait froid, rire à une blague, fuir devant un danger etc….)</p>
            <p><a href="http://www.youtube.com/embed/CO-b5Y8jo14?rel=0" onclick="window.open(this.href,'_blank');return false;">vidéo;le cerveau émotionnel: David Servan Schreiber <img src="/midcom-serveattachmentguid-e891e60ee52511de8ab9ed5784164e474e47/new_window.png" alt="Lien externe, nouvelle fenêtre" width="12" height="12"></a></p>
            <p>Les techniques de gestion du stress telles que la relaxation, le sport etc… tendent à renforcer l’activation de ce système « créatif » en te permettant d'imaginer des solutions nouvelles aux situations auxquelles tu fais face.</p>
        </div>    

        <div id="symptomes" class="section scrollspy">
            <h2>Symptômes du stress</h2>
            <h3>Quels symptômes?</h3>
            <p>Le stress entraine des manifestations physiques, émotionnelles ou au niveau du comportement. Reconnaitre et comprendre les messages envoyés par le stress plutôt que chercher à lutter contre peut t'aider à avoir une meilleure connaissance de toi et rester ainsi aux commandes. Peut-être détectes-tu dans les listes suivantes ce qu’il t’arrive en période de stress&nbsp;?</p>

            <h3> Au niveau physique</h3>

            <ul><li>Maux de ventre/boule dans l’estomac</li>
            <li>Mains moites/transpiration</li>
            <li>Tensions dans la nuque ou le cou/boule dans la gorge</li>
            <li>Maux de dos</li>
            <li>Maux de tête </li>
            <li>Bégaiements</li>
            <li>Nausée/vertiges</li>
            <li>Fatigue</li>
            <li>Problèmes de sommeil</li>
            <li>Allergies/maladies de peau</li>
            <li>Alimentation augmentée ou diminuée</li>
            <li>Petites maladies à répétition </li>
            </ul>

            <h3> Au niveau émotionnel</h3>
            <ul><li>Peur</li>
            <li>Inquiétude ++</li>
            <li>Impatience</li>
            <li>Irritabilité/nerfs à fleur de peau</li>
            <li>Agressivité/colère</li>
            <li>Sautes d'humeur/tristesse/dépression</li>
            <li>Anxiété/paniques</li>
            <li>Sentiment de vide</li>
            <li>Diminution/perte de l’estime de soi</li>
            <li>Troubles de mémoire</li>
            <li>Perte du sens de l’humour</li>
            </ul>

            <h3> Au niveau du comportement</h3>

            <ul><li>Absentéisme /tendance à s’isoler/difficultés dans les relations</li>
            <li>Difficulté à terminer son travail/ faire plusieurs choses à la fois</li>
            <li>Parler trop vite, trop fort</li>
            <li>Agitation/agressivité /consommations à risque (drogues, jeux, écrans, nourriture…) </li>
            <li>Difficultés à décider/indécision</li>
            <li>Idées fixes<em>/</em><em> </em>perfectionnisme</li>
            <li>Difficultés à se concentrer </li>
            <li>Confusion/tourbillon d’idées dans la tête</li>
            </ul>
        </div>
            
            
            
            
            
            
      </div>
    
        <div class="col hide-on-small-only m3 l2">

            <div class="card blue-grey darken-1 hoverable">
                <div class="card-content white-text">
                  <span class="card-title">Card Title</span>
                  <p>
                     bref description de l'actualité
                  </p>
                </div>
                <div class="card-action">
                  <a href="#">This is a link</a>
                </div>
              </div>

          <ul class="section table-of-contents">
            <li><a href="#stress">Qu'est ce que le stress</a></li>
            <li><a href="#mecanisme">Mécanismes du stress</a></li>
            <li><a href="#reponse">Réponses au stress</a></li>
            <li><a href="#symptome">Symptômes du stress</a></li>
            <li><a href="#Sources">Sources du stress</a></li>
            <li><a href="#face">Faire face au stress</a></li>
            <li><a href="#sommeil">Stress et sommeil</a></li>
            <li><a href="#examens">Stress et examens</a></li>
            <li><a href="#puberté">Stress et puberté</a></li>
            <li><a href="#quotidien">Stress et quotidien</a></li>
            <li><a href="#scolaire">Stress et vie scolaire</a></li>
            <li><a href="#Ressources">Ressources contre le stress</a></li>
          </ul>
            
            
            
        </div>
    </div>

    

</section>


@endsection