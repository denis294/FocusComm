@extends('layouts.masterAdmin')
@section('title', 'Ciao.ch - Administration - Mon compte')

@section('content')
<script>
var user = {!! $user !!};
var badges = {!! $badges !!};
var regions = {!! $regions !!};
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
			<form method="POST" action="{{url('/admin/compte/'.$user['id'])}}">
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
          		<input value="{{ $user['email'] }}" id="email" type="text" class="validate" name="email">
          		<label for="email">E-mail</label>
        	</div>
        	
			<!-- Mot de passe -->
			<div class="row">
        		<div class="input-field col s12">
          		<input placeholder="Veuillez entrer votre nouveau mot de passe" id="motDePasse" type="password" class="validate" name="motDePasse">
          		<label for="motDePasse">Mot de passe</label>
        	</div>
        	
			<!-- Date de naissance -->
			<div class="row">
        		<div class="input-field col s12">
          		<input disabled value="{{ $user['dateNaissance'] }}" id="dateNaissance" type="text" class="validate" name="dateNaissance">
          		<label for="dateNaissance">Date de naissance</label>
        	</div>
        	
			<!-- Région -->
			<div class="row">
    			<div class="input-field col s12">      
					<select name="region_id" id="region_id" >
                      	@foreach(json_decode($regions, true) as $value)
                      		<option value="{{ $value['id'] }}"> {{ $value['nom'] }} </option>
						@endforeach
					</select>
					<label for="categorie_id">Région</label>
				</div>
			</div>
		</div>
		</div>
<div class="input-field col s12">  
                <div id="buttons" class="row">
                    <div class="col s12 l4">
                        <a href="" id="boutonAnnuler" class="waves-effect waves-light btn">Annuler</a>
                        <button class="btn waves-effect waves-light" type="submit" name="action">Enregistrer
    <i class="material-icons">done</i>
  </button>
                    </div>
</div>
                </div>
            </form>
      </div>
      </div>

    </div>      
          <div class="col s12 m6 l6">
      	<b>Vos badges</b>
      </div>
</main>
@endsection