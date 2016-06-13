@extends('layouts.masterAdmin')
@section('title', 'Admin')

@section('content')
<main class="main">
        <div id="ajouterActualiteAdm">
            <a href="formulaire.blade.php" class="buttonAdd btn-floating btn-large waves-effect waves-light green">
                <i id="buttonAdd" class="material-icons">add</i>
            </a>
            <i class="material-icons boutonInput waves-effect waves-light">input</i>
        </div>
</main>
@endsection