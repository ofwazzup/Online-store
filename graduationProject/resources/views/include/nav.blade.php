<div class="bg-nav">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top">
        <div class="container container-nav">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('catalog')}}">Каталог</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Контакты</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{route('articlesPublished')}}">Рецепты</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('articlesPublished')}}" data-toggle="dropdown" aria-expanded="false">Рецепты</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('articlesPublished')}}">Рецепты</a>
                            <a class="dropdown-item" href="{{route('articlesInProgress')}}">Не опубликованные рецепты</a>
                            @auth
                            <a class="dropdown-item" href="{{ route('articleUser') }}">Мои статьи</a>
                            @endauth
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('feedback')}}">Отзывы</a>
                    </li>
                </ul>
                <!-- <div class="mr-2">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Корзина</a>
                        </li>
                    </ul>
                </div> -->
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 sm:block d-flex align-items-center">
                        @auth
                                <a href="{{ route('profile.edit') }}" class="btn btn-outline-secondary mr-1">{{ Auth::user()->name }}</a>
                                
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <a class="btn btn-outline-secondary" href="route('logout')"
                                            onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Выйти') }}
                                    </a>
                                </form>

                            @else
                                <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-login mr-1">Войти</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-outline-secondary">Регистрация</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </nav>
</div>