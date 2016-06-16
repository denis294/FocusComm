@extends('layouts.master')

@section('title', 'Contenu')
@section('page', 'Stress')

@section('sidenav')
<link rel="stylesheet" href="{{asset('assets/css/sidenav.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/contenu.css')}}">
<script src="{{asset('assets/js/materialize.js')}}"></script>
<script src="{{asset('assets/js/tp/mainContenu.js')}}"></script>
<div id="sidenav">
    <!--Colonne pour les catégories-->
<ul id="slide-out" class="side-nav fixed">
      <li><a href="#!" class="filter waves-effect waves-teal active" data-cat=1>Stress</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal" data-cat=2>Estime de soi</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal" data-cat=3>Sexualité</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal" data-cat=4>Boire, fumer, se droguer</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal" data-cat=5>Santé</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal" data-cat=6>Manger-bouger</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal" data-cat=7>Moi, toi et les autres</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal" data-cat=8>Violence</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal" data-cat=9>Formation et travail</a></li>
      <li><a href="argent" class="filter waves-effect waves-teal" data-cat=10>Argent</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal" data-cat=11>Religion et croyance</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal" data-cat=12>Discrimination et rasicmes</a></li>
    </ul>
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
</div>
@endsection

@section('content')

<section id="contenu" class="content">
    <div class="row">
        <div class="col s12 m9 l10 texteContenu">
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
            <div id="reponse" class="section scrollspy">
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

            <div id="symptome" class="section scrollspy">
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
            <div id="sources" class="section scrollspy">

                <h2>Sources du stress</h2>                  
                <p>Pour qu’une situation entraine une réaction de stress, elle doit comporter un ou plusieurs des éléments. Le mot <br class="_mce_marker">«SPIN» <em>(Dr S. Lupien, 2009) </em>réunit les quatre sources de stress:</p>
                <table border="0" summary="SPIN, menaces et sentiments"><thead><tr><th scope="col"> Menace </th> <th scope="col"> Sentiment </th>
                </tr></thead><tbody><tr><td><strong> S</strong>ens du contrôle diminué
                <p>&nbsp;</p>
                </td>
                <td>
                <p>Sensation d'avoir très peu ou aucun contrôle sur la situation.</p>
                </td>
                </tr><tr><td><strong> P</strong>ersonnalité menacée
                <p>&nbsp;</p>
                </td>
                <td>
                <p>Les   compétences et la personnalité sont mises à l’épreuve :<br> doute de ses  capacités et estime de soi chahutée.</p>
                </td>
                </tr><tr><td><strong> I</strong>mprévisibilité
                <p>&nbsp;</p>
                </td>
                <td>
                <p>Ne   pas savoir à l’avance ce qui va se produire.</p>
                </td>
                </tr><tr><td><strong> N</strong>ouveauté
                <p>&nbsp;</p>
                </td>
                <td>
                <p>Quelque   chose arrive encore jamais expérimenté.</p>
                </td>
                </tr></tbody></table><p>Plus il y a d’éléments présents, plus il est naturel de se sentir stressé !</p>
                <p>Le niveau du stress dépend à la fois de ta capacité d’adaptation et de <a href="/f/estime_de_soi/infos/71659178a93011df802da7af9ef9a8a2a8a2/la_definition">ton estime de soi</a></p>
                <p>Important : le <strong>P</strong> de <strong>SPIN</strong> est le seul élément sur lequel tu peux vraiment agir.</p>
                <p>Par exemple, tu ne choisis pas le divorce ou le déménagement de tes parents. C’est une situation sur laquelle tu n’as pas de contrôle. Donc, tu ne peux pas éviter la nouveauté et l’imprévisibilité de cette situation. Mais tu peux identifier la source de ton stress et développer une <a href="/f/stress/infos/89070e403cea11e48add2326329231e231e2/plus2-les_trois_phases_du_stress">stratégie d'adaptation.</a></p>
                <p>Si tu n'as pas le contrôle sur la situation, tu peux avoir le contrôle sur tes réactions face à&nbsp; cette situation.</p>
                <p>Une situation est stressante si tu l’interprètes comme étant stressante. Dans ce cas-là, tu sens que tu perds le <strong>S</strong>ens du contrôle, que la situation est <strong>I</strong>mprévisible ou <strong>N</strong>ouvelle ou encore que quelque chose menace ta <strong>P</strong>ersonnalité.</p>
                <p>Ce qui est nouveau pour toi ne l’est pas nécessairement pour une autre personne. C’est pour cette raison que le stress est une expérience profondément individuelle et personnelle.</p>

            </div>
            <div id="face" class="section scrollspy">
                <h2>Faire face au stress</h2>
                <h3>Stratégies d'adaptation</h3>
                <p>Bien souvent tu ne peux pas changer la situation, mais tu peux l’analyser différemment : modifier ta façon de penser, tes attentes, tes représentations du monde, tes valeurs et tes attitudes.</p>
                <p>Cette analyse modifiera tes réponses au stress (détresse physique, émotionnelle et comportementale).</p>
                <p>L’adaptation est différente selon les personnes et les situations mais il existe quelques trucs à utiliser&nbsp;:</p>
                <ul><li>Etre/ Rester positif,</li>
                <li>Faire un choix,</li>
                <li>Etre objectif face à chaque situation,</li>
                <li><a href="/f/relations/infos/a830368897c811deb479bb2db6b98eea8eea/que_faire">En parler</a></li>
                <li><a href="/f/estime_de_soi/infos/8eaf7cd8a93211dfbfb7a505f4e747c347c3/bonne_ou_juste_estime_de_soi">S’accepter soi</a> et accepter les autres,</li>
                <li>Trouver du soutien parmi ses proches (le soutien social est la clé)</li>
                <li><a href="/f/estime_de_soi/infos/f1eb65d8d07811dfbb4ba78bb4ac8b1e8b1e/quand_tu_fais_bien">Composer de façon efficace avec les erreurs et avec le succès aussi,</a></li>
                </ul>

                <h3> 3 étapes contre le stress</h3>
                <p>Eliminer le stress de sa vie est impossible, en revanche apprendre à vivre avec, est souhaitable&nbsp;!</p>
                <p>Le stress est individuel et il n’y a donc pas de recette universelle, chacun fait face à son stress différemment mais le fait par étapes&nbsp;:</p>
                <p>La première étape demande <strong>d’Accepter la situation telle qu’elle est</strong>, c’est-à-dire&nbsp;:</p>
                <ul><li>éviter la dramatisation,</li>
                <li>être plus flexible,</li>
                <li>contrôler l’anxiété,</li>
                <li>maîtriser la colère</li>
                <li>être dans l’instant présent « ici et maintenant ».</li>
                </ul><p>La deuxième étape permet de <strong>Choisir le meilleur comportement</strong> :</p>
                <ul><li>agir sur la situation,</li>
                <li>organiser le temps,</li>
                <li>revoir ses attentes.</li>
                </ul><p>Ici, il est possible d’analyser et changer ses représentations, ses valeurs.</p>
                <p>La troisième étape permet de <strong>Trouver l’action appropriée</strong> :</p>
                <ul><li> rester optimiste,</li>
                <li>apprendre à dire « non »,</li>
                <li>maintenir une attitude positive</li>
                <li> éloigner les pensées négatives,</li>
                <li>changer sa perception des choses.</li>
                </ul><p><strong><em>En résumé : </em></strong><strong>ACT </strong>(F. de Riba, 2003)</p>
                <ul><li><strong>Accepter </strong>la situation, la perception de la réalité</li>
                <li><strong>Choisir </strong>le meilleur comportement</li>
                <li><strong>Trouver </strong>la décision appropriée</li>
                </ul>

                <h3> Trucs et astuces</h3>                       
                <p>Pour apprivoiser le stress et pouvoir s’en détacher, il est nécessaire d’en décortiquer la source afin de rester maître à bord:</p>
                <h2>Qu’est-ce qui te fait stresser?</h2>
                <ul><li>Exigences scolaires </li>
                <li>Déménagement ou changement d’école </li>
                <li>Trop grand nombre d’activités </li>
                <li>Disputes avec les amis </li>
                <li>Sentiment d’insécurité dû à l’environnement </li>
                <li>Séparation ou divorce des parents </li>
                <li>Décès d’une personne proche </li>
                <li>Problèmes financiers familiaux </li>
                <li>Sexualité et relation copain-copine</li>
                </ul><h2>Quelles réactions&nbsp;adopter face à ton stress?</h2>
                <p>Se souvenir du mot <a href="/f/stress/infos/6dc0cecc4e1b11e4943dcb7d78e014a014a0/sources_du_stress">SPIN</a> <em>(Dr S. Lupien, 2009) </em>qui réunit les quatre sources de stress. Face à une situation nouvelle ou imprévue dans laquelle tu sens que tu n'as pas le contrôle et que ta personnalité est mise en danger, essaie d'imaginer d'autres solutions, un plan B et C (souvent juste pour te rassurer et avoir une porte de sortie). Cela te permet d’avoir la possibilité de rebondir rapidement et de te sentir aux commandes de ton stress et d’être donc acteur de ta vie.<strong> </strong></p>
                <h2>Faire face au stress</h2>
                <ul><li>Tu peux faire face à ton stress en t’adaptant de manière positive et en cherchant à rebondir face aux situations.</li>
                <li> Plus tu rebondis face aux situations imprévues, plus tu te fais confiance, plus tu développes ton <a href="/f/estime_de_soi/infos/1daa3600a93611dfad194fab245dfbdcfbdc/comment_faire">estime de soi</a><em> </em> et plus tu fais face au stress</li>
                <li>Tu peux également 'canaliser' ton stress en pratiquant une activité sportive ou méditative (respiration ventrale), ou en pratiquant une activité qui te fait du bien comme chanter, rire, danser.</li>
                </ul><table><tbody><tr><th><img class="emotion" style="border: 0px none;" title="Pas bien" src="http://asgard.ciao.ch:8001/midcom-static/midcom.helper.datamanager2/tinymce/plugins/emotions/img/smiley-frown.gif" alt="Pas bien" width="18" height="18"></th> <th><img class="emotion" style="border: 0px none;" title="Bien" src="http://asgard.ciao.ch:8001/midcom-static/midcom.helper.datamanager2/tinymce/plugins/emotions/img/smiley-smile.gif" alt="Bien" width="18" height="18"></th>
                </tr><tr><td>
                <p>Viser la perfection</p>
                </td>
                <td>
                <p>Viser l’excellence (faire de son mieux)</p>
                </td>
                </tr><tr><td>
                <p>Rester assis</p>
                </td>
                <td>
                <p>Bouger pour dépenser son énergie</p>
                </td>
                </tr><tr><td>
                <p>Dire toujours «&nbsp;oui&nbsp;»</p>
                </td>
                <td>
                <p>Savoir dire non</p>
                </td>
                </tr><tr><td>
                <p>S’écraser devant la TV</p>
                </td>
                <td>
                <p>Choisir un moment de détente et plaisir</p>
                </td>
                </tr><tr><td>
                <p>Se mettre régulièrement en colère</p>
                </td>
                <td>
                <p>Exprimer ses émotions</p>
                </td>
                </tr></tbody></table>

                <h3> Stressé moi?</h3>
                <p><a href="http://www.prevention.ch/stressemoi.html" onclick="window.open(this.href,'_blank');return false;" target="_blank">Paul, Juliette et Pierre se présentent à leur 1er emploi <img src="/midcom-serveattachmentguid-e891e60ee52511de8ab9ed5784164e474e47/new_window.png" alt="Lien externe, nouvelle fenêtre" width="12" height="12"></a></p>
            </div>


            <div id="sommeil" class="section scrollspy">

                <h2>Stress et sommeil</h2>
                <p>Les soucis parfois nombreux reviennent tout à coup au moment de se coucher: l'exposé pas terminé, les difficultés de relations avec les amis, les parents, les profs, le travail, etc. Le stress peut entrainer des difficultés à s’endormir, des réveils au cours de la nuit.</p>
                <h2>Que faire pour<strong> </strong>retrouver un bon rythme de sommeil&nbsp;?</h2>
                <p>Il est essentiel&nbsp;de:</p>
                <ul><li>limiter le temps      passé au lit sans dormir (se relever après 15 min.)</li>
                <li>choisir un      rituel du coucher (tisane, bain, etc.)</li>
                <li>éviter de      travailler dans son lit </li>
                <li>se coucher quand      la fatigue se ressent</li>
                <li>lire un moment :      cela aide à déconnecter du stress ou des soucis</li>
                <li>noter<strong> </strong>chaque nuit (sur un calendrier par exemple) le      nombre d’allers et retours. Si la tête est pleine de choses à faire le      lendemain, les noter sur un carnet et le matin classer les tâches par      ordre de priorité</li>
                <li>si une sieste est nécessaire, la limiter à 30 minutes et la faire      assez tôt</li>
                <li> éviter ce qui      excite deux heures avant le coucher<strong> </strong>: stimulants (café, thé), sport intense,&nbsp;<span style="line-height: 16px; font-size: 13px;">écrans (jeux vidéos), etc.</span></li>
                <li>aérer la chambre      avant de se coucher</li>
                </ul>

            </div>
            <div id="examens" class="section scrollspy">

                <h2>Stress et examens</h2>
                <p>Panique&nbsp;: tu sens que ton stress monte d'un coup ?</p>
                <p>En cas de montée de stress, c'est <strong>l'adrénaline qui s'active</strong> pour lutter et ne pas fuir !!!</p>
                <p>C'est<strong> une force que tu peux utiliser</strong>: le stress est un élément positif qui te permet d'être à ton plus haut niveau de vigilance.</p>
                <table style="width:300px;" border="0" align="center"><thead><tr align="center" valign="middle"><th scope="col">
                <p><img class="emotion" title="Déçu" src="http://asgard.ciao.ch:8001/midcom-static/midcom.helper.datamanager2/tinymce/plugins/emotions/img/smiley-frown.gif" border="0" alt="Déçu"></p>
                </th> <th scope="col">
                <p><img class="emotion" title="Sourire" src="http://asgard.ciao.ch:8001/midcom-static/midcom.helper.datamanager2/tinymce/plugins/emotions/img/smiley-smile.gif" border="0" alt="Sourire"></p>
                </th>
                </tr></thead><tbody><tr><td>
                <p><em><em>Je   subis&nbsp;:</em></em></p>
                <blockquote>
                <p><em>«oh là là, mon cœur bat, ma bouche se dessèche, je commence à paniquer,   je vais échouer»</em></p>
                </blockquote>
                </td>
                <td>
                <p><em>Je prends les commandes&nbsp;:</em></p>
                <blockquote>
                <p><em> «Ça y est, mon organisme s'active et me   met en condition de donner le meilleur de moi-même» <br></em></p>
                </blockquote>
                </td>
                </tr></tbody></table>

            </div>
            <div id="puberté" class="section scrollspy">

                <h2>Stress et puberté</h2>
                <p><a href="/f/sante/infos/95f8768a753e11dea9f8ab8f1e5d3b093b09/debuts_de_la_puberte">Les transformations pubertaires</a> peuvent être déroutantes à l'adolescence. Elles sont individuelles, se passent à des périodes différentes et entrainent des différences d’évolution chez les jeunes du même âge. Souvent plus tard pour les <a href="/f/sexualite/infos/afe825a09c6111de8a4637de0c7efe0efe0e/plus2-les_signes_de_la_puberte_chez_les_garcons">garçons</a> que pour <a href="/f/sexualite/infos/47334c3327028556beec3828cf9ab4ed/la_puberte">les filles</a> pour des raisons biologiques, ces différences peuvent provoquer de l’inquiétude et des sources de stress.</p>
                <p>Si le garçon est pubère avant les autres, c’est bien souvent une fierté. En revanche, chez les filles une puberté avant les autres peut être source de gêne et d’embarras, de décalage avec les autres de la même classe.</p>
                <p>Si les <a href="/f/sante/infos/06d7ccb6753f11dea391ef0547a6ce25ce25/plus1-puberte_et_changements_de_reperes">changements physiques</a> se voient, l'adolescence entraine aussi un chambardement psychique qui entraine de nombreuses questions sur la notion d'identité sexuelle, l'imaginaire, les désirs sexuels, les fantasmes etc…</p>
                <p>Ces changements du corps et de l’imaginaire amènent la question de l’identité&nbsp;: qui suis-je&nbsp;? qu’est-ce qu’être un homme, une femme&nbsp;?</p>

            </div>
            <div id="quotidien" class="section scrollspy">

                <h2>Stress et quotidien</h2>
                <p>Il y a mille et une raisons de se retrouver en situation de stress chaque jour mais l'important est d'y faire face en trouvant des façons saines de canaliser les différentes énergies provoquées par le stress.</p>
                <p>Par exemple en pratiquant un sport , ou une autre activité qui te procure du plaisir et te permet de te vider la tête (le chant, la danse, la cuisine, la méditation).</p>
                <p>Chacun vit les situations à sa manière, une situation stressante pour toi, ne l'est pas forcement pour tes ami-es, et vice versa. Il n'y a pas de honte à ressentir du stress et en parler avec ses proches permet de prendre du recul et de faire face.</p>
                <p>La prise de recul permet de relativiser et bien souvent d'en rire&nbsp;! <strong>Le rire est l'anti-stress par excellence.</strong></p>
                <p><a href="http://www.youtube.com/embed/aNUonUzo3Lg?rel=0" onclick="window.open(this.href,'_blank');return false;">Eclater de rire <img src="/midcom-serveattachmentguid-e891e60ee52511de8ab9ed5784164e474e47/new_window.png" alt="Lien externe, nouvelle fenêtre" width="12" height="12"></a><strong><br></strong></p>
                <p>Les questions à se poser&nbsp;:</p>
                <ul><li>Qu’est-ce qui me tracasse ?</li>
                <li>Quelle est la pire chose qui pourrait arriver ?</li>
                <li>Quelle est la meilleure ?</li>
                <li>Est-ce que je peux faire quelque chose pour résoudre ce problème ? </li>
                <li>À qui puis-je demander de l’aide – ou parler – à propos de cette peur ou de ce souci ?</li>
                </ul>

            </div>
            <div id="scolaire" class="section scrollspy">

                <h2>Stress et vie scolaire</h2>
                <p>La vie d’élève, d’étudiant ou d’apprenti-e peut être source de stress&nbsp;: &nbsp;entre les horaires, les cours, la recherche personnelle, les examens ,le désir d'avoir de bonnes notes - ou de ne plus avoir de mauvaises notes si on a vécu des échecs précédemment - et bien sûr la volonté de bien réussir dans les sports et activités parascolaires.</p>
                <p>Les questions à se poser&nbsp;:</p>
                <ul><li>Qu’est-ce qui me tracasse ?</li>
                <li>Quelle est la pire chose qui pourrait arriver ?</li>
                <li>Quelle est la meilleure ?</li>
                <li>Est-ce que je peux faire quelque chose pour résoudre ce problème ?</li>
                <li>À qui puis-je demander de l’aide – ou parler – à propos de cette peur ou de ce souci ?</li>
                </ul>

                <h3> Et les présentations orales?</h3>
                <p>Les examens oraux sont pour beaucoup des situations particulièrement stressantes. Etre le centre d’attention n'est pas facile et il est normal d’envisager la possibilité de bafouiller ou de ne pas réussir à capter l’intérêt de la classe aussi bien que souhaité.</p>
                <ul><li>En fait, est-ce que cette éventualité est si dramatique que tu peux l’imaginer&nbsp;?</li>
                <li>Lorsque tu écoutes un enseignant, ne lui arrive-t-il pas à lui aussi de chercher ses mots?</li>
                </ul><p>En faisant attention, tu t'aperçois que si les orateurs professionnels performent si bien c’est parce qu’ils réagissent adéquatement aux inévitables petites «&nbsp;accroches&nbsp;» qui surviennent lors d’une présentation.</p>
                <p>Pour diminuer le stress, il est important de poursuivre des objectifs réalistes: on ne peut pas s’assurer d’une performance exceptionnelle à chaque fois que l’on prend la parole.</p>
                <p>Par contre, on peut éviter d’être paralysé par le trac en connaissant non seulement le contenu de sa présentation, mais aussi ses réactions aux moments difficiles. Lorsque vient à l’esprit la peur de bafouiller, il ne faut pas essayer de repousser cette idée. Au contraire, il est préférable de l’affronter et &nbsp;d’utiliser sa méthode préférée&nbsp;;</p>
                <ul><li>fermer les yeux quelques secondes, </li>
                <li>faire une micro-pause, </li>
                <li>consulter ses notes permet souvent de reprendre son discours.</li>
                </ul><p>Plus tu te familiarises avec cette technique et plus tu seras à même de garder ton calme lorsque la situation se présentera.</p>

            </div>
            <div id="ressources" class="section scrollspy">

                <h2>Ressource contre le stress</h2>
                
                <h3>Kit d'urgence</h3>
                <p>Au choix, quelques conseils pour agir rapidement, et des exercices à faire dès que tu sens que le stress monte&nbsp;:</p>
                <h4>Bouger</h4>
                <ul><li>Tend tes muscles pour mieux les détendre !</li>
                <li>Debout, imagine que tu es une poupée de chiffon qui doit se maintenir debout.</li>
                <li>Saute sur place.</li>
                </ul><h4>Respirer</h4>
                <ul><li>Utilise la respiration abdominale&nbsp;: Gonfle ton ventre en inspirant, relâche en expirant et dis-toi que tu évacues ton stress à chaque expiration, grâce à la respiration.</li>
                </ul><h4>Se relaxer quelques minutes</h4>
                <ul><li>Active ta phrase ou ton geste qui calme ou qui donne confiance, et répète-les !</li>
                <li>Mets-toi dans ta <a href="/f/stress/infos/c126d144546d11e4ba4e073af3a5afefafef/plus9-la_bulle_de_lumiere">bulle de lumière</a><strong> </strong>: laisse venir à toi les couleurs et les sensations qui te font du bien et t'enveloppent</li>
                <li>Ecoute une chanson que tu aimes</li>
                </ul><h4>Boire ou manger quelque chose lentement</h4>
                <ul><li>Les bananes sont pleines de potassium, elles redonnent de l'énergie sans sucre ajouté !</li>
                <li>Un verre d’eau donne une sensation de calme dans le corps. </li>
                </ul><h4>Visualiser sa réussite</h4>
                <ul><li>Dans quelques heures ton stress ne sera qu'un vieux souvenir ! Visualise-toi ayant réussi ton activité, fier-e de toi et libre de prendre du temps pour toi !</li>
                </ul>


                <h3> Concentration</h3>
                <p>Pendant 3 à 10 mn, concentre-toi sur…</p>
                <h4>1. Ta respiration</h4>
                <p>Bien installé dans un fauteuil, tu prends conscience de ton corps sur le fauteuil, de tes pieds sur le sol, de tes mains posées sur tes cuisses. Laisse ta bouche s'entrouvrir légèrement afin de&nbsp; permettre à ta mâchoire de se détendre. Commence à observer ta respiration sans rien faire, ne chercher pas à modifier le rythme. Suis en conscience ta respiration. Fais de l'autosuggestion : <em>«&nbsp;Je respire calmement et ne pense qu'à ma respiration.... mes pensées</em> <em>sont remplacées par ma respiration... Mes pensées sont cette respiration... Je respire et je</em> <em>souffle....j'accompagne en pensée ma respiration... J'évacue mon stress, mes soucis grâce</em> <em>à la respiration, l'oxygène emmène loin mon stress...&nbsp;».</em></p>
                <h4>2. Un objet</h4>
                <p>Bien installé dans un fauteuil, tu prends conscience de ton corps sur le fauteuil, de tes pieds sur le sol, de tes mains posées sur les cuisses. Fixe un point sur le mur (ou une flamme de bougie) jusqu'à ce que tes yeux soient fatigués. Dans cet exercice, ce sont tes yeux qui captent et mobilisent tes pensées. Pousse tes pensées à rester sur ce point. Ne vois et ne pense qu'à ce point. Tu peux ensuite fermer les yeux et continuer à penser au point sur ton front depuis l'intérieur. Sens sa présence, deviens ce point etc.</p>
                <h4>3. Un son</h4>
                <p>même début d'exercice, avec un bruit répétitif comme un métronome.</p>
                <h4>4. Un goût</h4>
                <p>même début d'exercice, puis tu peux sucer un bonbon et te concentrer sur le goût.</p>
                <h4>5. Une odeur</h4>
                <p>même début d'exercice, puis mets sur un mouchoir une senteur que tu aimes, qui te donne confiance, et respire cette senteur.</p>
                <p>Tu peux aussi combiner les exercices 2, 3, 4, 5 et te concentrer sur les sensations les unes après les autres.</p>
                <h4>6. Le stop</h4>
                <p>visualise un panneau stop dans ta tête et dis-toi « STOP » en le voyant !</p>
                <h4>7. Mettre la conscience dans tes mains ou dans tes pieds</h2>
                <p>Concentre ta pensée dans tes mains ou dans la plante de tes pieds. Sens la chaleur dans tes mains ou dans tes pieds ; reste bien concentré sur tes mains ou tes pieds.</p>
                <h4>8. Le 5-4-3-2-1</h4>
                <p>Nomme dans ta tête ou à haute voix 5 choses que tu vois, puis 5 choses que tu entends, puis 5 choses que tu ressens ou touche, puis idem avec 4 choses, 3, 2, 1 chose. Fais des phrases répétitives : ex : Je vois le mur, je vois la table, je vois un tableau, etc.</p>
                <h4>9. La bulle de lumière</h4>
                <p>Objectif : quand tu as besoin de te protéger du monde extérieur, des bruits, des agressions&nbsp;<span style="font-size: 13px;">ou simplement de t'évader.</span></p>
                <p>Commence par te centrer avec 3 respirations profondes. Puis, utilise ta respiration pour gonfler une bulle autour de toi. Prends le temps de t'y installer et de ressentir toutes les sensations agréables associées à cette bulle. Colore ta bulle avec toutes les couleurs de l'arc-en-ciel, retiens la couleur avec laquelle tu te sens le mieux et laisse-toi bercer par cette lumière. Envole-toi ; ressource-toi.</p>
                <p>Tous ces petits exercices permettent de canaliser rapidement ton mental et facilitent également l'immersion dans un exercice qui demande plus de temps.</p>
            </div>
            <div id="histoire" class="section scrollspy">

                <h2>Petites histoires</h2>

                <h3>Le verre d'eau</h3>
                <p>« Une psychologue marchait vers le podium tout en enseignant la gestion du stress à une audience avertie. Comme elle a soulevé un verre d’eau, tout le monde s’attendait à question du 'verre à moitié vide ou à moitié plein…’.</p>
                <p>Au lieu de cela, avec un sourire sur son visage, elle demanda : « Combien pèse ce verre d’eau? »Les réponses entendues variaient de 200 à 500 grammes.</p>
                <p>Elle a répondu : " Le poids absolu n’a pas d’importance. Cela dépend de combien de temps je le tiens.</p>
                <p>Si je le tiens pendant une minute, ce n’est pas un problème.</p>
                <p>Si je le tiens pendant une heure, j ’aurai une douleur dans mon bras.</p>
                <p>Si je le tiens pendant une journée entière, mon bras se sentira engourdi et paralysé.</p>
                <p>Dans chaque cas, le poids du verre ne change pas, mais plus longtemps je le tiens, le plus lourd, il devient. "<br>
                <br> Elle a poursuivi : "Le stress et les inquiétudes dans la vie sont comme ce verre d ’eau. Pensez-y pendant un moment et rien ne se passe. Pensez-y un peu plus longtemps et ils commencent à faire mal. Et si vous y pensez toute la journée, vous vous sentez paralysés – incapable de faire quoi que ce soit. Pensez à déposer le verre! " &nbsp;<img class="emotion" title="Clin d'oeil" src="http://asgard.ciao.ch:8001/midcom-static/midcom.helper.datamanager2/tinymce/plugins/emotions/img/smiley-wink.gif" border="0" alt="Clin d'oeil"> (Auteur inconnu)</p>  

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
            <li><a href="#sources">Sources du stress</a></li>
            <li><a href="#face">Faire face au stress</a></li>
            <li><a href="#sommeil">Stress et sommeil</a></li>
            <li><a href="#examens">Stress et examens</a></li>
            <li><a href="#puberté">Stress et puberté</a></li>
            <li><a href="#quotidien">Stress et quotidien</a></li>
            <li><a href="#scolaire">Stress et vie scolaire</a></li>
            <li><a href="#ressources">Ressources contre le stress</a></li>
            <li><a href="#histoire">Petites histoires</a></li>
          </ul>
            
            
            
        </div>
    </div>

    

</section>


@endsection