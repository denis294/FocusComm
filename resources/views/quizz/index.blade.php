@extends('layouts.master')
@section('title', 'Quizz')

@section('content')
<script src="{{asset('assets/js/tp/mainCatQuiz.js')}}"></script>
<link rel="stylesheet" href="{{asset('assets/css/main_quiz_index.css')}}">
<script>
var categories = {!! $categories !!};
</script>



<div class="contain2">
    <h1 class="titleq">Quiz</h1>
    <p id="choixQ">Choisis une catégorie de quiz</p>


    <div class="liensCatQ row categories">
    </div>

</div>

@endsection