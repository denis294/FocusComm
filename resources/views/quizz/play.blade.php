@extends('layouts.master')
@section('title', 'Quizz')
@section('content')




<script>
var quizz = {!! json_encode($quizz) !!};
var questions = {!! json_encode($questions)!!};
</script>

<section id ="question">
    <h1>Quizz</h1>



</section>

@endsection