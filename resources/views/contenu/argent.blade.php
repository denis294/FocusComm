@extends('layouts.master')

@section('title', 'Contenu')
@section('page', 'Argent')

@section('sidenav')
<link rel="stylesheet" href="{{asset('assets/css/sidenav.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/contenu.css')}}">
<script src="{{asset('assets/js/materialize.js')}}"></script>
<script src="{{asset('assets/js/tp/mainContenu.js')}}"></script>
<div id="sidenav">
    <!--Colonne pour les catégories-->
<ul id="slide-out" class="side-nav fixed">
      <li><a href="stress" class="filter waves-effect waves-teal" data-cat=1>Stress</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal" data-cat=2>Estime de soi</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal" data-cat=3>Sexualité</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal" data-cat=4>Boire, fumer, se droguer</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal" data-cat=5>Santé</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal" data-cat=6>Manger-bouger</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal" data-cat=7>Moi, toi et les autres</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal" data-cat=8>Violence</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal" data-cat=9>Formation et travail</a></li>
      <li><a href="#!" class="filter waves-effect waves-teal active" data-cat=10>Argent</a></li>
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
            
            <div id="argent" class="section scrollspy">
                <h2>Argent</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vel augue in lorem faucibus dapibus vel accumsan mauris. Aliquam sit amet magna eu nunc dapibus tempus. Morbi nec tincidunt ligula. Proin nec nulla at dolor ultrices facilisis. Nam ex metus, ullamcorper vel feugiat scelerisque, porttitor in tortor. Pellentesque rutrum magna massa, quis rutrum odio pulvinar ut. Pellentesque elementum vulputate nulla, nec pellentesque augue suscipit non. Sed non dolor eu nisi consequat lacinia vitae eget felis.</p>
                <p>Aliquam at urna consequat, auctor erat nec, consequat augue. Duis hendrerit gravida sapien at ornare. Proin pharetra nisl ut urna vehicula fringilla. Mauris molestie, augue et luctus lacinia, erat lorem gravida nunc, nec vestibulum ligula libero sit amet sapien. Phasellus dignissim sed sapien sit amet euismod. Vestibulum commodo mi non porttitor tincidunt. Nunc lobortis tortor nec condimentum molestie.</p>
                <p>Aenean arcu nulla, porttitor pretium congue sed, maximus et neque. Nam in dapibus urna. Donec sit amet eros sem. Aliquam vitae diam aliquam, euismod erat sit amet, ullamcorper justo. Vestibulum sed interdum arcu, eget accumsan orci. Ut tincidunt arcu quis arcu fringilla venenatis. Nullam efficitur facilisis sapien, vel lobortis lectus tristique sed. In vulputate nibh vitae semper facilisis. Curabitur sit amet interdum odio. Sed facilisis justo et quam rutrum, id tincidunt odio fringilla. Phasellus et pellentesque mi. Donec tincidunt enim suscipit urna lobortis fermentum. Integer pellentesque viverra nisi, posuere lobortis mi tempor id. Aenean non nisl ut leo ultricies posuere. Nunc ante lorem, lacinia commodo commodo sed, tempor quis dui. Vestibulum luctus felis tellus, vel pellentesque nunc blandit id.</p>
            </div>
            <div id="budget" class="section scrollspy">
                <h2>Budget</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vel augue in lorem faucibus dapibus vel accumsan mauris. Aliquam sit amet magna eu nunc dapibus tempus. Morbi nec tincidunt ligula. Proin nec nulla at dolor ultrices facilisis. Nam ex metus, ullamcorper vel feugiat scelerisque, porttitor in tortor. Pellentesque rutrum magna massa, quis rutrum odio pulvinar ut. Pellentesque elementum vulputate nulla, nec pellentesque augue suscipit non. Sed non dolor eu nisi consequat lacinia vitae eget felis.</p>
                <p>Aliquam at urna consequat, auctor erat nec, consequat augue. Duis hendrerit gravida sapien at ornare. Proin pharetra nisl ut urna vehicula fringilla. Mauris molestie, augue et luctus lacinia, erat lorem gravida nunc, nec vestibulum ligula libero sit amet sapien. Phasellus dignissim sed sapien sit amet euismod. Vestibulum commodo mi non porttitor tincidunt. Nunc lobortis tortor nec condimentum molestie.</p>
                <p>Aenean arcu nulla, porttitor pretium congue sed, maximus et neque. Nam in dapibus urna. Donec sit amet eros sem. Aliquam vitae diam aliquam, euismod erat sit amet, ullamcorper justo. Vestibulum sed interdum arcu, eget accumsan orci. Ut tincidunt arcu quis arcu fringilla venenatis. Nullam efficitur facilisis sapien, vel lobortis lectus tristique sed. In vulputate nibh vitae semper facilisis. Curabitur sit amet interdum odio. Sed facilisis justo et quam rutrum, id tincidunt odio fringilla. Phasellus et pellentesque mi. Donec tincidunt enim suscipit urna lobortis fermentum. Integer pellentesque viverra nisi, posuere lobortis mi tempor id. Aenean non nisl ut leo ultricies posuere. Nunc ante lorem, lacinia commodo commodo sed, tempor quis dui. Vestibulum luctus felis tellus, vel pellentesque nunc blandit id.</p>
            </div>
            <div id="consommation" class="section scrollspy">
                <h2>Consommation</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vel augue in lorem faucibus dapibus vel accumsan mauris. Aliquam sit amet magna eu nunc dapibus tempus. Morbi nec tincidunt ligula. Proin nec nulla at dolor ultrices facilisis. Nam ex metus, ullamcorper vel feugiat scelerisque, porttitor in tortor. Pellentesque rutrum magna massa, quis rutrum odio pulvinar ut. Pellentesque elementum vulputate nulla, nec pellentesque augue suscipit non. Sed non dolor eu nisi consequat lacinia vitae eget felis.</p>
                <p>Aliquam at urna consequat, auctor erat nec, consequat augue. Duis hendrerit gravida sapien at ornare. Proin pharetra nisl ut urna vehicula fringilla. Mauris molestie, augue et luctus lacinia, erat lorem gravida nunc, nec vestibulum ligula libero sit amet sapien. Phasellus dignissim sed sapien sit amet euismod. Vestibulum commodo mi non porttitor tincidunt. Nunc lobortis tortor nec condimentum molestie.</p>
                <p>Aenean arcu nulla, porttitor pretium congue sed, maximus et neque. Nam in dapibus urna. Donec sit amet eros sem. Aliquam vitae diam aliquam, euismod erat sit amet, ullamcorper justo. Vestibulum sed interdum arcu, eget accumsan orci. Ut tincidunt arcu quis arcu fringilla venenatis. Nullam efficitur facilisis sapien, vel lobortis lectus tristique sed. In vulputate nibh vitae semper facilisis. Curabitur sit amet interdum odio. Sed facilisis justo et quam rutrum, id tincidunt odio fringilla. Phasellus et pellentesque mi. Donec tincidunt enim suscipit urna lobortis fermentum. Integer pellentesque viverra nisi, posuere lobortis mi tempor id. Aenean non nisl ut leo ultricies posuere. Nunc ante lorem, lacinia commodo commodo sed, tempor quis dui. Vestibulum luctus felis tellus, vel pellentesque nunc blandit id.</p>
            </div>
            <div id="dette" class="section scrollspy">
                <h2>Dettes</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vel augue in lorem faucibus dapibus vel accumsan mauris. Aliquam sit amet magna eu nunc dapibus tempus. Morbi nec tincidunt ligula. Proin nec nulla at dolor ultrices facilisis. Nam ex metus, ullamcorper vel feugiat scelerisque, porttitor in tortor. Pellentesque rutrum magna massa, quis rutrum odio pulvinar ut. Pellentesque elementum vulputate nulla, nec pellentesque augue suscipit non. Sed non dolor eu nisi consequat lacinia vitae eget felis.</p>
                <p>Aliquam at urna consequat, auctor erat nec, consequat augue. Duis hendrerit gravida sapien at ornare. Proin pharetra nisl ut urna vehicula fringilla. Mauris molestie, augue et luctus lacinia, erat lorem gravida nunc, nec vestibulum ligula libero sit amet sapien. Phasellus dignissim sed sapien sit amet euismod. Vestibulum commodo mi non porttitor tincidunt. Nunc lobortis tortor nec condimentum molestie.</p>
                <p>Aenean arcu nulla, porttitor pretium congue sed, maximus et neque. Nam in dapibus urna. Donec sit amet eros sem. Aliquam vitae diam aliquam, euismod erat sit amet, ullamcorper justo. Vestibulum sed interdum arcu, eget accumsan orci. Ut tincidunt arcu quis arcu fringilla venenatis. Nullam efficitur facilisis sapien, vel lobortis lectus tristique sed. In vulputate nibh vitae semper facilisis. Curabitur sit amet interdum odio. Sed facilisis justo et quam rutrum, id tincidunt odio fringilla. Phasellus et pellentesque mi. Donec tincidunt enim suscipit urna lobortis fermentum. Integer pellentesque viverra nisi, posuere lobortis mi tempor id. Aenean non nisl ut leo ultricies posuere. Nunc ante lorem, lacinia commodo commodo sed, tempor quis dui. Vestibulum luctus felis tellus, vel pellentesque nunc blandit id.</p>
            </div>
            <div id="poursuites" class="section scrollspy">
                <h2>Poursuites</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vel augue in lorem faucibus dapibus vel accumsan mauris. Aliquam sit amet magna eu nunc dapibus tempus. Morbi nec tincidunt ligula. Proin nec nulla at dolor ultrices facilisis. Nam ex metus, ullamcorper vel feugiat scelerisque, porttitor in tortor. Pellentesque rutrum magna massa, quis rutrum odio pulvinar ut. Pellentesque elementum vulputate nulla, nec pellentesque augue suscipit non. Sed non dolor eu nisi consequat lacinia vitae eget felis.</p>
                <p>Aliquam at urna consequat, auctor erat nec, consequat augue. Duis hendrerit gravida sapien at ornare. Proin pharetra nisl ut urna vehicula fringilla. Mauris molestie, augue et luctus lacinia, erat lorem gravida nunc, nec vestibulum ligula libero sit amet sapien. Phasellus dignissim sed sapien sit amet euismod. Vestibulum commodo mi non porttitor tincidunt. Nunc lobortis tortor nec condimentum molestie.</p>
                <p>Aenean arcu nulla, porttitor pretium congue sed, maximus et neque. Nam in dapibus urna. Donec sit amet eros sem. Aliquam vitae diam aliquam, euismod erat sit amet, ullamcorper justo. Vestibulum sed interdum arcu, eget accumsan orci. Ut tincidunt arcu quis arcu fringilla venenatis. Nullam efficitur facilisis sapien, vel lobortis lectus tristique sed. In vulputate nibh vitae semper facilisis. Curabitur sit amet interdum odio. Sed facilisis justo et quam rutrum, id tincidunt odio fringilla. Phasellus et pellentesque mi. Donec tincidunt enim suscipit urna lobortis fermentum. Integer pellentesque viverra nisi, posuere lobortis mi tempor id. Aenean non nisl ut leo ultricies posuere. Nunc ante lorem, lacinia commodo commodo sed, tempor quis dui. Vestibulum luctus felis tellus, vel pellentesque nunc blandit id.</p>
            </div>
            <div id="jeuxhasard" class="section scrollspy">
                <h2>Jeux de hasard</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vel augue in lorem faucibus dapibus vel accumsan mauris. Aliquam sit amet magna eu nunc dapibus tempus. Morbi nec tincidunt ligula. Proin nec nulla at dolor ultrices facilisis. Nam ex metus, ullamcorper vel feugiat scelerisque, porttitor in tortor. Pellentesque rutrum magna massa, quis rutrum odio pulvinar ut. Pellentesque elementum vulputate nulla, nec pellentesque augue suscipit non. Sed non dolor eu nisi consequat lacinia vitae eget felis.</p>
                <p>Aliquam at urna consequat, auctor erat nec, consequat augue. Duis hendrerit gravida sapien at ornare. Proin pharetra nisl ut urna vehicula fringilla. Mauris molestie, augue et luctus lacinia, erat lorem gravida nunc, nec vestibulum ligula libero sit amet sapien. Phasellus dignissim sed sapien sit amet euismod. Vestibulum commodo mi non porttitor tincidunt. Nunc lobortis tortor nec condimentum molestie.</p>
                <p>Aenean arcu nulla, porttitor pretium congue sed, maximus et neque. Nam in dapibus urna. Donec sit amet eros sem. Aliquam vitae diam aliquam, euismod erat sit amet, ullamcorper justo. Vestibulum sed interdum arcu, eget accumsan orci. Ut tincidunt arcu quis arcu fringilla venenatis. Nullam efficitur facilisis sapien, vel lobortis lectus tristique sed. In vulputate nibh vitae semper facilisis. Curabitur sit amet interdum odio. Sed facilisis justo et quam rutrum, id tincidunt odio fringilla. Phasellus et pellentesque mi. Donec tincidunt enim suscipit urna lobortis fermentum. Integer pellentesque viverra nisi, posuere lobortis mi tempor id. Aenean non nisl ut leo ultricies posuere. Nunc ante lorem, lacinia commodo commodo sed, tempor quis dui. Vestibulum luctus felis tellus, vel pellentesque nunc blandit id.</p>
            </div>
            <div id="dictionnaire" class="section scrollspy">
                <h2>Dictionnaire</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vel augue in lorem faucibus dapibus vel accumsan mauris. Aliquam sit amet magna eu nunc dapibus tempus. Morbi nec tincidunt ligula. Proin nec nulla at dolor ultrices facilisis. Nam ex metus, ullamcorper vel feugiat scelerisque, porttitor in tortor. Pellentesque rutrum magna massa, quis rutrum odio pulvinar ut. Pellentesque elementum vulputate nulla, nec pellentesque augue suscipit non. Sed non dolor eu nisi consequat lacinia vitae eget felis.</p>
                <p>Aliquam at urna consequat, auctor erat nec, consequat augue. Duis hendrerit gravida sapien at ornare. Proin pharetra nisl ut urna vehicula fringilla. Mauris molestie, augue et luctus lacinia, erat lorem gravida nunc, nec vestibulum ligula libero sit amet sapien. Phasellus dignissim sed sapien sit amet euismod. Vestibulum commodo mi non porttitor tincidunt. Nunc lobortis tortor nec condimentum molestie.</p>
                <p>Aenean arcu nulla, porttitor pretium congue sed, maximus et neque. Nam in dapibus urna. Donec sit amet eros sem. Aliquam vitae diam aliquam, euismod erat sit amet, ullamcorper justo. Vestibulum sed interdum arcu, eget accumsan orci. Ut tincidunt arcu quis arcu fringilla venenatis. Nullam efficitur facilisis sapien, vel lobortis lectus tristique sed. In vulputate nibh vitae semper facilisis. Curabitur sit amet interdum odio. Sed facilisis justo et quam rutrum, id tincidunt odio fringilla. Phasellus et pellentesque mi. Donec tincidunt enim suscipit urna lobortis fermentum. Integer pellentesque viverra nisi, posuere lobortis mi tempor id. Aenean non nisl ut leo ultricies posuere. Nunc ante lorem, lacinia commodo commodo sed, tempor quis dui. Vestibulum luctus felis tellus, vel pellentesque nunc blandit id.</p>
            </div>
            <div id="lien" class="section scrollspy">
                <h2>Liens</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vel augue in lorem faucibus dapibus vel accumsan mauris. Aliquam sit amet magna eu nunc dapibus tempus. Morbi nec tincidunt ligula. Proin nec nulla at dolor ultrices facilisis. Nam ex metus, ullamcorper vel feugiat scelerisque, porttitor in tortor. Pellentesque rutrum magna massa, quis rutrum odio pulvinar ut. Pellentesque elementum vulputate nulla, nec pellentesque augue suscipit non. Sed non dolor eu nisi consequat lacinia vitae eget felis.</p>
                <p>Aliquam at urna consequat, auctor erat nec, consequat augue. Duis hendrerit gravida sapien at ornare. Proin pharetra nisl ut urna vehicula fringilla. Mauris molestie, augue et luctus lacinia, erat lorem gravida nunc, nec vestibulum ligula libero sit amet sapien. Phasellus dignissim sed sapien sit amet euismod. Vestibulum commodo mi non porttitor tincidunt. Nunc lobortis tortor nec condimentum molestie.</p>
                <p>Aenean arcu nulla, porttitor pretium congue sed, maximus et neque. Nam in dapibus urna. Donec sit amet eros sem. Aliquam vitae diam aliquam, euismod erat sit amet, ullamcorper justo. Vestibulum sed interdum arcu, eget accumsan orci. Ut tincidunt arcu quis arcu fringilla venenatis. Nullam efficitur facilisis sapien, vel lobortis lectus tristique sed. In vulputate nibh vitae semper facilisis. Curabitur sit amet interdum odio. Sed facilisis justo et quam rutrum, id tincidunt odio fringilla. Phasellus et pellentesque mi. Donec tincidunt enim suscipit urna lobortis fermentum. Integer pellentesque viverra nisi, posuere lobortis mi tempor id. Aenean non nisl ut leo ultricies posuere. Nunc ante lorem, lacinia commodo commodo sed, tempor quis dui. Vestibulum luctus felis tellus, vel pellentesque nunc blandit id.</p>
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
            <li><a href="#argent">Argent</a></li>
            <li><a href="#budget">Budget</a></li>
            <li><a href="#consommation">Consommation</a></li>
            <li><a href="#dette">Dettes</a></li>
            <li><a href="#poursuites">Poursuites</a></li>
            <li><a href="#jeuxhasard">Jeux de hasard</a></li>
            <li><a href="#dictionnaire">Dictionnaire</a></li>
            <li><a href="#lien">Liens</a></li>
          </ul>
            
            
            
        </div>
    </div>

    

</section>


@endsection