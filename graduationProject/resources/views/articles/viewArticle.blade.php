@extends('layouts.master')

@section('head')
  Spices and Seasonings - Просмотр рецепта
 @endsection

@section('content')
  <section class="fullscreen">
    <div class="fullscreen__body-articles">
      <div>
        <h2>{!! $data->nameArticle !!}</h2>
      </div>
      <div>
        {!! $data->annotation !!}
      </div>
      <div class="content__viewArticle">
        {!! $data->content !!}
      </div>
    </div>
</section>
  @endsection