@extends('layouts.masterAdmin')
@section('title', 'ListeQuiz')

@section('content')
 <link rel="stylesheet" href="{{asset('assets/css/partner.css')}}">
<main class="main">
<section id="listQuiz">

      <a href="/partner/quizz/create/" class="btn-floating btn-large waves-effect waves-light green" id="boutonAjouterQuiz"><i class="material-icons">add</i></a>
      <div id="quizList">

      </div>

      <a class="waves-effect waves-light btn BtnBackHome"><i class="material-icons left">call_missed</i>Back Home</a>

</section>
</main>
@endsection