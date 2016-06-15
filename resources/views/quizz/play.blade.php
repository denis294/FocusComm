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
    <a href="/quizzs/"><h1>Quiz</h1></a>




</section>

<a href="/quizzs/"><p id="backLink">Retour aux quizs</p></a>


<section id="DonneesEnvoie">

    <form method="post" action="traitement.php">
        <div id="quiz_id"></div>




    </form>

</section>

@endsection