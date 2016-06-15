@extends('layouts.master')
@section('title', 'Quizz')

@section('content')
<script src="{{asset('assets/js/tp/mainQuiz.js')}}"></script>
<link rel="stylesheet" href="{{asset('assets/css/main_quiz.css')}}">

<script>
var quizz = {!! $quizz !!};
</script>



<section id="contain">

<div id="quizozo">

<a href="/quizzs/"><h1 id="titleq">Quiz</h1></a>
<p id="choixQ">Choisis ton quiz</p>

</div>

</section>
@endsection