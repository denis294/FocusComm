@extends('layouts.master')
@section('title', 'Quizzo')

@section('content')
<script src="{{asset('assets/js/tp/mainQuiz.js')}}"></script>
<link rel="stylesheet" href="{{asset('assets/css/main_quiz.css')}}">

<script>
var quizz = {!! $quizz !!};
</script>



<div id="quizozo">


</div>

@endsection