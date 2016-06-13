@extends('layouts.master')
@section('title', 'Quizz')
@section('content')
<h1>Quizz</h1>

<script>
var quizz = {!! json_encode($quizz) !!};
var questions = {!! json_encode($questions)!!};
</script>

<section id ="quizz">
              
</section>

@endsection