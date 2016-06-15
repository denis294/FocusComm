@extends('layouts.masterAdmin')
@section('title', 'Administration - Utilisateurs')

@section('content')
<script>
var user = {!! $user !!};
</script>
<main class="main">

<table id="tableUser" class="responsive-table row">
  <thead>
    <tr>
        <th data-field="name">Pseudo</th>
        <th data-field="title">Email</th>
        <th data-field="date">Date de naissance</th>
        <th data-field="date">Sexe</th>
        <th data-field="date">Action</th>
    </tr>
  </thead>
  <tbody id="quizPart">
  
  	@foreach(json_decode($user, true) as $value)
		<tr>
    		<td>{{ $value['pseudo'] }} </td>
    		<td>{{ $value['email'] }} </td>   
    		<td>{{ $value['dateNaissance'] }} </td> 
    		<td>{{ $value['sexe'] }} </td>
    		<td><a class="waves-effect waves-light btn" name="deleteUser" style="margin:0;" >Supprimer<i class="material-icons left">delete</i></a></td>    		
		</tr>
	@endforeach

  
  </tbody>
</table>
</main>
@endsection



