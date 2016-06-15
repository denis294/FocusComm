@extends('layouts.masterAdmin')
@section('title', 'ListeQuiz')

@section('content')
 <link rel="stylesheet" href="{{asset('assets/css/partner.css')}}">
<main class="main">
<section id="listQuiz">

      <a href="/partner/quizz/create/" class="btn-floating btn-large waves-effect waves-light green" id="boutonAjouterQuiz"><i class="material-icons">add</i></a>
      <div id="quizList">

      </div>

</section>
<table class="stripped">
<h3>Vos quizz</h3>
<thead>
	<tr>
		<th>Titre</th>
		<th>date création</th>
		<th>Etat</th>
		<th>Catégorie</th>
	</tr>
</thead>
<tbody>
	@foreach ($quizzs as $quizz)
		<tr>
			<td>{{$quizz->titre}}</td>
			<td>{{$quizz->date}}</td>
			<td>{{$quizz->etat}}</td>
			<td>{{$quizz->categorie->nom}}</td>
		</tr>
	@endforeach
</tbody>
</table>
</main>
@endsection