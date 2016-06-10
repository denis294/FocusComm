@extends('layouts.master')

@section('title', 'Contenu')

@section('content')
<h1>Contenu</h1>
<section id="contenu" class="content">
    <nav id ="CategorieListe">
    </nav>
</section>

<script>
var contenus = {!! $contenus !!};
</script>
@endsection