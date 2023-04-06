@extends('layouts.master')

@section('head')
  Spices and Seasonings - Страница ошибки
@endsection

@section('content')
<section class="fullscreen">
  <div class="fullscreen__body-articles">
    <h1 class="display-3">Нет доступа для редактирования</h1>
    <p><a class="btn btn-secondary btn-lg" href="{{route('articlesAll')}}" role="button">Назад &raquo;</a></p>
  </div>
</section>
  @endsection
