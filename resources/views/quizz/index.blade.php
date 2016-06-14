@extends('layouts.master')
@section('title', 'Quizz')

@section('content')
<script src="{{asset('assets/js/tp/mainCatQuiz.js')}}"></script>
<link rel="stylesheet" href="{{asset('assets/css/main_quiz_index.css')}}">
<script>
var categories = {!! $categories !!};
</script>



<div class="contain2">
    <h1 class="titleq">Quizz</h1>


<div id="liensCatQ" class="row" "categories">
</div>
</div>

@endsection