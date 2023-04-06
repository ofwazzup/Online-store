@extends('layouts.master')

@section('head')
    Spices and Seasonings - Каталог
@endsection

@section('content')
    <section class="under-head">
        <div class="fullscreen-st fullscreen__bg-catalog"></div>
        <div class="catalog__under-head-text">
            <div class="under-head-logo">
                <a href="{{route('home')}}"><h1>Spices and Seasonings</h1></a>
            </div>
        </div>
    </section>

    <section class="fullscreen">
        <div class="fullscreen__body mb-5 justify-content-between">
            <h2 class="fullscreen__title-catalog">Все специи</h2>
            <div class="fullscreen__text">Обратная связь &rarr; <a href="{{route('feedback')}}">Отзывы</a></div>
            <div class="container_catalog-products">
                <div class="products">
                    @foreach($products as $product)
                            @php
                                $image = '';
                                    if(count($product->images) > 0) {
                                        $image = $product->images[0]['img'];
                                    } else {
                                        $image = 'no-image.png';
                                    }
                            @endphp
                        <a class="product" href="{{route('product', [$product->id])}}">
                            <div class="product_image"><img src="../img/img_products/{{$image}}" alt="{{$product->title}}"></div>
                            <div class="product_title">{{$product->title}}</div>
                            @if($product->new_price != null)
                                <div class="container-price">
                                    <div class="ptoduct_price" style="text-decoration: line-through;">{{$product->price}} <i>руб.</i></div>
                                    <div class="ptoduct_price ml-3" style="color: red;">{{$product->new_price}} <i>руб.</i></div>
                                </div>
                                @else
                                <div class="ptoduct_price">{{$product->price}} <i>руб.</i></div>
                            @endif
                        </a>
                    @endforeach
                </div>
            </div>
            {{$products -> links()}}
        </div>
    </section>

@endsection