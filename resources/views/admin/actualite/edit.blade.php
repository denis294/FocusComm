@extends('layouts.masterAdmin')
@section('title', 'Administration - Actualités')

@section('content')
<script>
var actu = {!! $actu !!};
</script>
<main class="main">

  	@foreach(json_decode($actu, true) as $value)
		<tr>
    		<td>{{ $value['titre'] }} </td>
    		<td>{{ $value['texte'] }} </td>   
    		<td>{{ $value['actualiteLiee_id'] }} </td>
    		<td>{{ $value['categorie_id'] }} </td> 
		</tr>
	@endforeach
<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" id="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input disabled value="I am not editable" id="disabled" type="text" class="validate">
          <label for="disabled">Disabled</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
    </form>
  </div>
</main>
@endsection