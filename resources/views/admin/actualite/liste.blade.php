@extends('layouts.masterAdmin')
@section('title', 'Admin')

@section('content')
<script>
var news = {!! $news !!};
</script>
<main class="main">
    <div id="ajouterActualiteAdm">
        <a href="/admin/actualites/create" class="buttonAdd btn-floating btn-large waves-effect waves-light green">
            <i id="buttonAdd" class="material-icons">add</i>
        </a>
        <i class="material-icons boutonInput waves-effect waves-light">input</i>
    </div>
</main>
@endsection