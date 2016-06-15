@extends('layouts.masterAdmin')
@section('title', 'Ciao.ch - Administration - Actualités')

@section('content')
<script>
var news = {!! $news !!};
</script>
<main class="main">
    <div id="ajouterActualiteAdm">
        <a href="/admin/actualites/create" class="buttonAdd btn-floating btn-large waves-effect waves-light green">
            <i id="buttonAdd" class="material-icons">add</i>
        </a>
    </div>
    @if(Session::has('success'))
<div class="col l4 offset-l4">
<div class="card-panel green lighten-4">
          <span class="green-text text-darken-4">{{Session::get('success')}}
          </span>
</div>
</div>
@endif
    <table id="tableUser" class="responsive-table row">
  <thead>
    <tr>
        <th data-field="titre">Titre</th>
        <th data-field="dateCreation">Date de création</th>
        <th data-field="texte">Texte</th>
        <th data-field="actualiteLiee_id">Actualité liée</th>
        <th data-field="user_id">Propriétaire</th>
        <th data-field="categorie_id">Catégorie</th>
    </tr>
  </thead>
  <tbody id="quizPart">
  
  	@foreach(json_decode($news, true) as $value)
		<tr>
    		<td><a href="/admin/actualites/{{ $value['id'] }}/edit" title="{{ $value['titre'] }}">{{ $value['titre'] }}</a></td>
    		<td>{{ $value['dateCreation'] }} </td>   
<td>
    		{{ str_limit($value['texte'], $limit = 100, $end = '...') }}</td>
    		<td>{{ $value['actualiteLiee_id'] }} </td>
    		<td>{{ $value['user_id'] }} </td> 
    		<td>{{ $value['categorie_id'] }} </td> 
		</tr>
	@endforeach

  
  </tbody>
</table>
</main>
@endsection