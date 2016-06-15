@extends('layouts.masterAdmin')
@section('title', 'Admin')

@section('content')
<script>
var user = {!! $user !!};
var badges = {!! $badges !!};
var region = {!! $region !!};
</script>
<script src="//code.jquery.com/jquery-2.1.2.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
         $('select').material_select();
    });
</script>
<main class="main">
	<div class="row">
      <div class="col s12 m6 l6">
      	<b>Vos informations personnelles</b>
			<form action="/admin/compte/{{ $value['id'] }}">
			<input type="hidden" name="_method" value="PUT">
			
			<!-- Titre -->
<div class="row">
    <div class="input-field col s6">
      <input value="{{ $value['titre'] }}" id="titre" name="titre" type="text" class="validate">
      <label class="active" for="titre">Titre de l'actualité</label>
      
    </div>
</div>
            </form>

      </div>
      <div class="col s12 m6 l6">
      	<b>Vos badges</b>
      </div>
    </div>       
</main>
@endsection