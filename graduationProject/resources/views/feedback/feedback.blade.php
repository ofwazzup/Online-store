@extends('layouts.master')

@section('head')
    Spices and Seasonings - Отзывы
@endsection

@section('content')
<section class="under-head">
        <div class="fullscreen-st fullscreen__bg-feedback"></div>
        <div class="under-head-text">
            <div class="under-head-logo"><a href="{{route('home')}}">
                    <h1>Spices and Seasonings</h1>
                </a></div>
            <div class="tagline">
                <div>
                    <h3>Обратная связь</h3>
                </div>
                <div class="tagline-st">
                    <h5>Расскажите, <br> что вы думаете о нас. <br>Чтобы отправить отзыв, необходимо быть зарегистрированным</h5>
                </div>
                    @if (Route::has('login'))
                        @auth
                            <div class="under-head-catalog"><a class="btn btn-outline-secondary" href="{{route('feedbackCreate')}}">Поделиться &raquo;</a>
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
    <div class="fullscreen__body-feedback">
        <div>
            @foreach ($data as $el)
            <div>
                <div class="container__title-feedback">
                    <div>Имя: {{$el->name}}</div>
                    <div><p>{{$el->created_at}}</p></div>
                </div>
                <div class="container__text-feedback">
                    <p>{{$el->feedback}}</p>
                    <!-- <p>Обновлено: {{$el->updated_at}}</p> -->
                </div>
            </div>
            <hr>
            @endforeach
        </div>
    </div>
</section>
@endsection