@extends('layouts.master')

@section('head')
    Spices and Seasonings - коллекция специй и пряностей
@endsection

@section('content')
<div class="wrapper">
    <section class="under-head">
        <div class="fullscreen-st fullscreen-bg-st"></div>
        <div class="under-head-text">
            <div class="under-head-logo"><a href="{{route('home')}}">
                    <h1>Spices and Seasonings</h1>
                </a></div>
            <div class="tagline">
                <div>
                    <h3>Cпеции и пряности</h3>
                </div>
                <div class="tagline-st">
                    <h5>которые превратят приготовление еды в <br> удовольствие и ваше блюдо станет <br> произведением
                        искусcтва</h5>
                </div>
                <div class="under-head-catalog"><a class="btn btn-outline-secondary" href="{{route('catalog')}}">наш каталог &raquo;</a>
                </div>
            </div>
        </div>
    </section>
    <section class="fullscreen">
        <div class="fullscreen__body">
            <h2 class="fullscreen__title">Еда как в ресторане - Наш выбор</h2>
            <div class="fullscreen__text">Популярные товары &rarr; <a href="{{route('catalog')}}">Все специи</a></div>
            <div class="slide-container site-section">
                <div class="owl-2-style">
                    <div class="owl-carousel owl-2">
                        @foreach($products as $product)
                            @php
                                $image = '';
                                    if(count($product->images) > 0) {
                                        $image = $product->images[0]['img'];
                                    } else {
                                        $image = 'no-image.png';
                                    }
                            @endphp
                        <a href="{{route('product', [$product->id])}}">
                            <div class="slide-container-cards media-29101">
                                <div><img src="../img/img_products/{{$image}}" alt="{{$product->title}}"></div>
                                <div>{{$product->title}}</div>
                                <div>{{$product->price}} <i>руб.</i></div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="under-slide-container-btn"><a href="{{route('catalog')}}">Все специи</a></div>
        </div>
    </section>
    <section class="fullscreen fullscreen-bg-sn"></section>
    <section class="fullscreen-nd">
        <div class="fullscreen__body-nd">
            <div><h2>Почему специи и пряности это важно?</h2></div>
            <div class="container__important-list">
                <div class="important-list">
                    <div class="numbered-list bg-1">1</div>
                    <div>Укрепляют иммунитет</div>
                </div>
                <div class="important-list-description">Все специи и пряности без исключения укрепляют иммунитет человека.
                    Связано это с их богатым и поистине уникальным составом. Ваш организм будет вам благодарен за такую поливитаминную добавку к рациону.</div>
            </div>

            <div class="container__important-list">
                <div class="important-list">
                    <div class="numbered-list bg-2">2</div>
                    <div>Успокаивают нервную систему</div>
                </div>
                <div class="important-list-description">Эфирные масла, которые содержатся в большинстве специй и пряностей самым положительным образом влияют на состояние нервной системы. 
                    Чувство тревожности куда-то уходит, первые симптомы депрессии испаряются, а сон становится крепче.</div>
            </div>

            <div class="container__important-list">
                <div class="important-list">
                    <div class="numbered-list bg-3">3</div>
                    <div>Помогают похудеть</div>
                </div>
                <div class="important-list-description">Если вы хотите запустить жиросжигательные процессы, то включите в рацион больше острых и пикантных специй. 
                    Это перец чили, молотый кайенский перец, хрен, горчица. Такими же свойствами обладают гвоздика и корица.</div>
            </div>

            <div class="container__important-list">
                <div class="important-list">
                    <div class="numbered-list bg-4">4</div>
                    <div>Улучшают работу желудочно-кишечного тракта</div>
                </div>
                <div class="important-list-description">Если вы хотите улучшить работу желудочно-кишечного тракта, то вам также не навредят специи и пряности. 
                    Включите в свой рацион куркуму, если у вас гастрит и некоторые другие заболевания желудка.</div>
            </div>

            <div class="container__important-list">
                <div class="important-list">
                    <div class="numbered-list bg-5">5</div>
                    <div>Замедляют старение организма</div>
                </div>
                <div class="important-list-description">В специях и пряностях содержится большое количество антиоксидантов. 
                    Именно они, попадая в организм человека, вступают в борьбу со свободными радикалами, которые разрушают иммунитет. 
                    Так что регулярное употребление специй и пряностей не дает клеткам организма стареть. </div>
            </div>
            <div class="bg-img"></div>
        </div>
    </section>
    <section class="container__frame">
        <div class="frame">
            <div><h2>Полезные советы</h2></div>
            <div class="frame-content">
            <iframe src="https://www.youtube.com/embed/N2SikTCEAUA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </section>
    <div class="fullscreen-rd">
        <div class="fullscreen__body">
            <h2>Часто задаваемые вопросы</h2>
            <div class="accordion-container">
                <div class="accordion-container-border">
                    <button class="accordion-tab">
                        <div class="accordion-tagline">Условия доставки</div>
                        <div class="accordion-icon"></div>
                    </button>
                    <div class="accordion-panel">
                        <div class="accordion-panel-content accordion-panel-content-st">
                            <p>У нас доступны любые способы доставки:</p>
                            <p>
                                &bull; курьером, <br>
                                &bull; cамовывоз, <br>
                                &bull; почта России и ЕМС, <br>
                                &bull; транспортными компаниями
                            </p>
                            <p>Так же возможна доставка в другие страны.</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-container-border">
                    <button class="accordion-tab">
                        <div class="accordion-tagline">Как оформить заказ?</div>
                        <div class="accordion-icon"></div>
                    </button>
                    <div class="accordion-panel">
                        <div class="accordion-panel-content accordion-panel-content-nd">
                            <p>Чтобы оформить заказ, необходимо:</p>
                            <p>
                                1. Выбрать необходимый товар в разделе "Каталог" <br>
                                2. Перейти на понравившуюся платформу <br>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="accordion-container-border">
                    <button class="accordion-tab">
                        <div class="accordion-tagline">Возврат товара</div>
                        <div class="accordion-icon"></div>
                    </button>
                    <div class="accordion-panel">
                        <div class="accordion-panel-content">
                            <p>Если у возвращаемого продукта будут видны явные следы порчи (плесень, посторонние элементы, грязь и т. д.), то мы обменяет на качественный аналог или вернем вам деньги.
                                Повреждение упаковки не является причиной отказа в возврате товара.</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-container-border">
                    <button class="accordion-tab">
                        <div class="accordion-tagline">Как отменить заказ?</div>
                        <div class="accordion-icon"></div>
                    </button>
                    <div class="accordion-panel">
                        <div class="accordion-panel-content">
                            <p>Если заказ добавлен в корзину, но еще не оформлен, то достаточно нажать на кнопку "Удалить из коризны".<br>
                            Если товар уже оформлен, то для отмены необходимо позвонить по номеру нашей службы или написать на почтовый адрес, указанный в разделе "Контакты".</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-container-border">
                    <button class="accordion-tab">
                        <div class="accordion-tagline">Забыли пароль (или логин и пароль) к личному кабинету?</div>
                        <div class="accordion-icon"></div>
                    </button>
                    <div class="accordion-panel">
                        <div class="accordion-panel-content">
                            <p>Пароль (или логин и пароль) от личного кабинета возможно восстановить, вам необходимо:</p>
                            <p>
                                &bull; нажать на кнопку "Войти", <br>
                                &bull; ниже нажать на ссылку "забыли пароль", <br>
                                &bull; ввести почтовый адрес,<br>
                                &bull; проверить почтовый адрес, перейти в письмо и нажать восстановить пароль.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="accordion-container-border">
                    <button class="accordion-tab">
                        <div class="accordion-tagline">Не получается сделать заказ</div>
                        <div class="accordion-icon"></div>
                    </button>
                    <div class="accordion-panel">
                        <div class="accordion-panel-content">
                            <p>Если у вас не получается сделать заказ, попробуйте повторить его,напишите нам на почту или позвоните:</p>
                            <p>
                                &bull; опишите трудности, которые у вас возникли., <br>
                                &bull; приложите скриншот ошибки или страницы, на которой возникла проблема, <br>
                                &bull; если знаете, укажите название и версию используемого браузера.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

