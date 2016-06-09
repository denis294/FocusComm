@extends('layouts.master')

@section('title', 'Actualités')

@section('content')
<h1>Actualtés</h1>
<script>
var news = {!! $news !!};
</script>
@endsection