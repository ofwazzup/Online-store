@extends('layouts.master')

@section('head')
  Spices and Seasonings - Рецепты
@endsection

@section('content')
<section class="under-head">
        <div class="fullscreen-st fullscreen__bg-articles"></div>
        <div class="under-head-text">
            <div class="under-head-logo"><a href="{{route('home')}}">
                    <h1>Spices and Seasonings</h1>
                </a></div>
            <div class="tagline">
                <div>
                    <h3>Обратная связь</h3>
                </div>
                <div class="tagline-st">
                    <h5>Поделитесь с, <br> пользователями рецептом. <br>Чтобы отправить, необходимо быть зарегистрированным</h5>
                </div>
                    @if (Route::has('login'))
                        @auth
                            <div class="under-head-catalog"><a class="btn btn-outline-secondary" href="{{route('articleCreate')}}">Поделиться &raquo;</a>
                        @else
                            <div class="under-head-catalog"><a class="btn btn-outline-secondary" href="{{route('register')}}">Регистрация &raquo;</a>
                        @endauth
                    </div>
                    @endif
                </div>
            </div>
        </div>
</section>

<section class="fullscreen">
    <div class="fullscreen__body-articles">
      @if(session('success'))
        <p>{{ session('success') }}</p>
      @endif

      @foreach ($data as $el)
        <div class="container__article-card">
          <div class="container__article-card-head">
              <div>Автор: {{ $el->nameAutor }}</div>
              <div class="data-nd-status-public">
                <div>Статус:
                  @if($el->statusArticle == 0)
                  <u>Не опубликовано</u>
                  @endif
                  @if($el->statusArticle == 1)
                  <u>Oпубликовано</u>
                  @endif
                  @if($el->statusArticle == 2)
                  <u>На проверке</u>
                  @endif
                </div>
                <div>Дата публикации: {{ $el->publishedDate }}</div>
              </div>
          </div>
          <div class="container__article-card-content">
            <div>
              <h5>{{ $el->nameArticle }}</h5>
            </div>
            <div class="annotation">
              <p>{!! $el->annotation !!}</p>
            </div>
            <div class="mt-3">
            <a href="{{ route('articleView', $idArticle = $el->id) }}" class="btn btn-secondary">Смотреть статью</a>
            @if($el->id_user == Auth::id())
              <a href="{{ route('articleEdit', $idArticle = $el->id) }}" class="btn btn-secondary">Редактировать статью</a>
              @if($el->statusArticle !== 1)
              <a href="{{ route('articlePublished', $idArticle = $el->id) }}" class="btn btn-secondary">Опубликовать статью</a>
              @endif
              @if($el->statusArticle == 1)
              <a href="{{ route('articleUnPublished', $idArticle = $el->id) }}" class="btn btn-secondary">Снять с публикации статью</a>
              @endif
              <a href="{{ route('articleDelete', $idArticle = $el->id) }}" class="btn btn-danger">Удалить статью</a>
            @endif
            </div>
          </div>
        </div>
        <hr>
      @endforeach
    </div>
</section>
@endsection