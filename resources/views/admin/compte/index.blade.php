@extends('layouts.masterAdmin')
@section('title', 'Ciao.ch - Administration - Mon compte')

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
			<form action="/admin/compte/{{ $user['id'] }}">
			<input type="hidden" name="_method" value="PUT">
			
			<!-- Pseudo -->
			<div class="row">
        		<div class="input-field col s12">
          		<input disabled value="{{ $user['pseudo'] }}" id="pseudo" type="text" class="validate" name="pseudo">
          		<label for="pseudo">Pseudo</label>
        	</div>
			
			<!-- Email -->
			<div class="row">
        		<div class="input-field col s12">
          		<input value="{{ $user['email'] }}" id="email" type="text" class="validate" name="pseudo">
          		<label for="email">E-mail</label>
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