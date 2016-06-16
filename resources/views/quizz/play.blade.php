@extends('layouts.master')
@section('title', 'Quizz')


@section('content')
<script src="{{asset('assets/js/tp/mainQuestion.js')}}"></script>
<script src="{{asset('assets/js/tp/mainBadgeQuizz.js')}}"></script>
<link rel="stylesheet" href="{{asset('assets/css/main_quiz.css')}}">



<script>
var quizz = {!! json_encode($quizz) !!};
var questions = {!! json_encode($questions)!!};
var badges = {!! json_encode($badges)!!};
</script>



<section id ="question">
    <a href="/quizzs/"><h1>Quiz</h1></a>




</section>

<a href="/quizzs/"><p id="backLink">Retour aux quizs</p></a>


<p id="idBadgeScred" style="display:none"></p>


<!-- <section id="DonneesEnvoie">
    <form id="donnees" method="post" action="">
       <div class="Vid">send</div>
    </form>
</section> -->



@endsection