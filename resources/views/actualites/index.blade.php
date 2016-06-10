@extends('layouts.master')
@section('title', 'Actualités')
<link rel="stylesheet" href="{{asset('assets/css/styleactu.css')}}">
@section('content')
<h1>Actualtés</h1>

<script>
var NEWS = {!! $news !!};
</script>

<section id ="news">
    <div id="wrapper">
        <div id ="columns">
            
        </div>
    </div>                
</section>

@endsection