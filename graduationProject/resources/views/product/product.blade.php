@extends('layouts.master')

@section('head')
Spices and Seasonings - {{$item->title}}
@endsection

@section('content')
<section class="fullscreen-product">
    <div class="fullscreen__body-product">
        <div class="product__content">
            <div class="product__content-st">
                @php
                $image = '';
                if(count($item->images) > 0) {
                    $image = $item->images[0]['img'];
                } else {
                    $image = 'no-image.png';
                }
                @endphp

                <div class="presentation-content">
                    @if($image == 'no-image.png')
                        <div class="mySlides presentation-img">
                            <img src="../img/img_products/{{$image}}" alt="{{$item->title}}">
                        </div>
                    @else
                        @foreach($item->images as $img)
                            <div class="mySlides presentation-img">
                                <img src="../img/img_products/{{$img['img']}}">
                            </div>
                        @endforeach
                    @endif
                </div>
                    <hr>
                <div class="gallery-content">
                    @if($image == 'no-image.png')

                    @else    
                        @foreach($item->images as $img)
                            @if($loop->first)
                                <img class="demo product-img" src="../img/img_products/{{$img['img']}}" onclick="currentSlide({{$img->quantity}})" alt="{{$item->title}}">
                            @else
                                <img class="demo product-img ml-1" src="../img/img_products/{{$img['img']}}" onclick="currentSlide({{$img->quantity}})" alt="{{$item->title}}">
                            @endif
                        @endforeach
                    @endif
                </div>
    
            </div>
            <div class="product__content-nd">
                <div>
                    <!-- Product Content -->
                    <div class="product_title sz" data-id="{{$item->id}}">{{$item->title}}</div>
                    @if($item->new_price != null)
                    <div style="text-decoration: line-through;">${{$item->price}}</div>
                    <div style="color: red;">${{$item->new_price}}</div>
                    @else
                    <div>${{$item->price}}</div>
                    @endif

                    <!-- In Stock -->
                    <div>
                        Доступность:
                        @if($item->in_stock)
                        <span style="color: green">в наличии</span>
                        @else
                        <span style="color: #cc0000">нет в наличии</span>
                        @endif
                    </div>
                </div>
                <div class="container__links-products">
                    <div>Заказать можно:</div>
                    <div class="links_products">
                        <a href="#">Ozon</a>
                        <a href="#">Wildberries</a>
                        <a href="#">Яндекс маркет</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__details-text">
            <div><h3>Описание товара</h3></div>
            <div><p>{{$item->description}}</p></div>
        </div>   
    </div>
</section>

@endsection