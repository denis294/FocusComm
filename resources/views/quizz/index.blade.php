@extends('layouts.master')
@section('title', 'Quizz')


@section('content')
<script src="{{asset('assets/js/tp/mainCatQuiz.js')}}"></script>
<link rel="stylesheet" href="{{asset('assets/css/main_quiz.css')}}">
<h1>Quizz</h1>


<script>
var quizz = {!! $quizz !!};
</script>

<div id="liensCatQ">

</div>

@endsection