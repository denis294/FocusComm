@extends('layouts.master')

@section('title', 'Contenu')
@section('page', 'Argent')

@section('sidenav')
<link rel="stylesheet" href="{{asset('assets/css/sidenav.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/contenu.css')}}">
<script src="{{asset('assets/js/materialize.js')}}"></script>
<div id="sidenav">
  <ul class="side-nav fixed">
  <li class="no-padding">
    <ul class="collapsible collapsible-accordion">
      <li><a href="stress" class="collapsible-header">Stress</a>
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
      
      
      <li><a href="#" class="collapsible-header waves-effect waves-teal active">Argent</a>
        <div class="collapsible-body">
            <ul>
                <li><a href="#questcequelestress">Argent</a></li>
                <li><a href="#mecanismedustress">Budget</a></li>
                <li><a href="#!">Consommation</a></li>
                <li><a href="#!">Dettes</a></li>
                <li><a href="#!">Poursuites</a></li>
                <li><a href="#!">Jeux de Hasard</a></li>
                <li><a href="#!">Dictionnaire</a></li>
                <li><a href="#!">Liens</a></li>
            </ul>
          </div>
      </li>
      
      
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
    
        <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent blandit dictum vestibulum. Etiam laoreet, magna eu congue placerat, ligula odio gravida quam, ac fringilla ante dui in leo. Aenean ut odio porta, viverra metus eu, tristique lorem. Suspendisse sit amet mauris interdum, ultricies purus id, maximus tortor. Aenean ac nunc nec urna interdum dapibus. Nulla facilisi. Integer et leo viverra, gravida purus id, pellentesque nisl. Proin rhoncus purus vitae mattis convallis. Fusce eu fermentum diam. Maecenas ultrices eu quam at convallis. Suspendisse aliquam sed metus eget pretium. Donec ac accumsan tortor. Curabitur vel massa erat.
        </p>
        <p>
        Nulla facilisi. Praesent scelerisque est euismod, varius ex et, fringilla arcu. Nulla dapibus hendrerit volutpat. Phasellus pharetra eget arcu non tincidunt. Pellentesque tristique, neque sit amet condimentum volutpat, odio magna blandit odio, eget tempus felis massa vitae urna. In hac habitasse platea dictumst. Nulla dapibus convallis purus eget placerat. Sed at accumsan sapien, quis porttitor diam. Proin et aliquet purus. Nam rutrum, lacus sed placerat fermentum, augue lacus sollicitudin velit, sit amet venenatis erat nisi vel augue. Cras vel urna in neque viverra fermentum. Fusce a euismod sem.
        </p>
        <p>
        Cras molestie tellus at eleifend tempus. Aliquam in pellentesque nisl, tempor ullamcorper lectus. Donec aliquet ante arcu, vel vulputate odio auctor in. Cras non ante sem. In nec nibh ac felis sollicitudin faucibus et sit amet sapien. Aenean varius dignissim nulla sit amet hendrerit. Sed venenatis justo in lacus gravida, sed blandit sem ornare. Vestibulum imperdiet nulla vel neque cursus dapibus. Aliquam tempus tellus et lobortis rhoncus. Nunc tempus lacinia faucibus. Integer hendrerit sodales porta. Duis dictum ut augue in laoreet. Duis ornare odio id nisl finibus, et aliquet libero faucibus. Integer eu nulla tincidunt, finibus orci nec, tempus est. Sed facilisis auctor diam, tincidunt aliquam nibh convallis ornare. Proin et aliquam lacus, et vulputate velit.
        </p>
        <p>
        Suspendisse imperdiet auctor erat, vitae gravida velit. Cras eget est in elit eleifend ullamcorper. Fusce rutrum accumsan convallis. Mauris in ex placerat, porttitor nisl ac, tincidunt dolor. Donec vehicula, ante et ullamcorper dictum, enim nunc pulvinar est, eu tempor neque risus a leo. Donec a commodo neque, id feugiat elit. Morbi at metus vehicula, pharetra nibh sit amet, mattis quam. Proin dictum arcu eu magna lobortis, molestie facilisis neque malesuada. Pellentesque egestas metus non laoreet blandit. Integer sodales ut nunc vitae semper. Proin aliquam, massa sit amet ultrices lobortis, dolor dolor vestibulum neque, eu imperdiet massa odio at libero. Quisque vel dolor in nunc rutrum aliquet. Cras vehicula lectus eu tortor volutpat, ac congue mauris bibendum. Fusce sagittis, libero ut sodales faucibus, tellus augue sagittis libero, eget rhoncus augue lacus ac enim. Mauris cursus eu ligula in suscipit.
        </p>
        <p>
        Phasellus finibus urna elit, et pellentesque nulla pretium ultricies. Phasellus quis ultrices mi. In et nunc ac erat blandit vestibulum. In varius tempus sem, tempus ultricies risus luctus vitae. Vivamus faucibus porta urna. Maecenas at mi commodo, commodo ante malesuada, fringilla mi. Curabitur augue ligula, volutpat ut erat sed, vehicula porttitor nibh.
        </p>
        <p>
        Duis laoreet nec mi laoreet dictum. Integer eget erat non turpis mollis efficitur et sit amet lectus. Quisque mi metus, hendrerit quis tempor in, dignissim a enim. Duis quis pharetra ligula. Curabitur in ultrices lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
        </p>
        <p>
        Donec vitae nulla urna. Nunc magna est, elementum id mollis porttitor, gravida ac quam. Phasellus vitae lacus maximus, consectetur leo a, efficitur elit. Vivamus eget nibh fermentum, feugiat ligula a, eleifend sem. Morbi purus nunc, eleifend eu erat in, finibus pretium leo. Proin congue in lacus at lacinia. Etiam consequat, augue sit amet lacinia pulvinar, tortor metus fermentum justo, condimentum rutrum enim sem id tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum dictum ex vel mauris venenatis, ac feugiat tortor gravida. Pellentesque in fermentum leo, in elementum turpis. Praesent ac facilisis tellus. Nunc varius nisl efficitur velit pretium interdum. Cras malesuada nisl ut tortor ultrices, in faucibus sapien suscipit. Morbi in lorem non lacus porta venenatis id quis turpis. Aliquam venenatis nulla a felis dictum elementum.
        </p>
        <p>
        Phasellus id vehicula sem. Nam at volutpat tellus. Proin condimentum lorem eget massa consectetur, sed posuere mi aliquam. In luctus massa tristique interdum euismod. Fusce viverra, sapien at porta facilisis, nisi erat placerat dolor, nec ultricies quam arcu nec est. In eu ex id arcu mollis ornare in vel est. Integer interdum elit eget enim cursus, sit amet egestas nulla semper. Proin gravida egestas ex, eu semper metus tincidunt non. Sed sollicitudin, magna et dapibus rutrum, nisl sapien aliquet neque, ut iaculis ex lacus quis arcu. Pellentesque malesuada id magna a tempor. Suspendisse auctor facilisis est, eu interdum orci lobortis non. Nam sit amet erat posuere, congue ante ut, pulvinar velit.
        </p>
        <p>
        Integer aliquet ac nunc vitae hendrerit. Fusce at sapien facilisis, ultrices ipsum in, tempor urna. Curabitur aliquam risus vel leo tempus porttitor. In non lorem facilisis, dapibus lectus fermentum, maximus urna. Sed vestibulum odio egestas, hendrerit ligula a, porta neque. Curabitur nec rhoncus augue. Mauris augue velit, elementum sed ipsum vel, eleifend tempus ante. Vivamus nec purus non nibh venenatis tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse in leo arcu. Sed sollicitudin leo ut leo dictum consectetur tincidunt sed odio. Donec aliquam dui eget suscipit ultrices. Quisque vulputate metus id feugiat convallis. Mauris pretium, tortor viverra suscipit elementum, quam ex imperdiet est, eget sollicitudin velit risus sit amet neque. Mauris congue fermentum nisi et placerat. Sed vitae diam dapibus, maximus orci non, mollis odio.
        </p>
        <p>
        Nullam sit amet diam nec nunc suscipit pellentesque. Donec porta iaculis mi non vulputate. Vestibulum pharetra maximus dui ac venenatis. Quisque eleifend vestibulum sapien, quis faucibus mauris efficitur at. Pellentesque pellentesque risus erat. Fusce sollicitudin nec nunc sit amet hendrerit. Donec volutpat ligula justo, hendrerit aliquet eros laoreet sit amet. Ut dolor lacus, efficitur quis felis hendrerit, placerat consectetur libero. Nullam condimentum nisl arcu, et aliquet metus rhoncus ac. Fusce consectetur lobortis venenatis. Maecenas placerat quis ex eu vehicula. Sed ac erat in metus pretium malesuada.
        </p>
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