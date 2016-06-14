@extends('layouts.master')
@section('title', 'Quizz')


@section('content')
<script src="{{asset('assets/js/tp/mainQuestion.js')}}"></script>
<link rel="stylesheet" href="{{asset('assets/css/main_quiz.css')}}">



<script>
var quizz = {!! json_encode($quizz) !!};
var questions = {!! json_encode($questions)!!};
</script>

<section id ="question">
    <h1>Quizz</h1>



</section>

@endsection