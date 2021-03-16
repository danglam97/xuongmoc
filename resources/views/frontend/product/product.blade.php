@extends('frontend.layouts.main')
@section('content')
    <section class="banner-product">
        <div class="slider">
            @foreach($banners as $item)

                <div class="slider-item">
                    <img src="{{ asset($item->image) }}" alt="Ảnh slider" class="img-fluid">
                </div>
                {{--                <div class="content">--}}
                {{--                    <h1 class="text-center"> Sản Phẩm </h1>--}}
                {{--                </div>--}}
            @endforeach
        </div>
    </section>
    <section class="wrapper-product container">
        @foreach($arr as $key => $item)
            <div class="list-prouduct">
                <div class="d-flex justify-content-between box-title">
                    <h2> {{ $key }} </h2>
                    <p class="see-all"> <a href="{{ route('shop.getListProduct', ['slug' => $arr2[$key][0]] )  }}"> Xem tất cả </a></p>
                </div>
                <div class="box-product">
                    <div class="row">
                        @foreach($item as $key1 => $product)
                            @if( $key1 == 4 )
                                @break.
                            @else
                                <div class="col-lg-3 col-sm-6">
                                    <a href="{{ route('shop.getProductDetail', ['slug' => $product['slug'], 'id' => $product['id']]) }}">
                                        <div class="product">
                                            <div class="img">
                                                <img src="{{ $product->image }}"
                                                     alt="{{ $product->name }}" class="img-fluid">

                                            </div>
                                            <div class="info">
                                                <p class="name" style="color: #1c2529">  {{ $product->name }}  </p>
                                                <p class="vote">
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="fas fa-star"></i></span>
                                                    <span><i class="fas fa-star"></i></span>
                                                </p>
                                                <p class="desc">
                                                    {{ @$product->materials->name }}
                                                </p>
                                                {{--                                        <div style="background-color: #d4d285; margin: 0.5rem 2rem 2rem 4rem;width: 50%;">--}}
                                                <a href="{{ route('shop.getProductDetail', ['slug' => $product['slug'], 'id' => $product['id']]) }}"
                                                   style="color: #1c2529;background-color: #d4d285;
                                                    padding: 0.25rem 0.3rem;border: aliceblue;border-radius: 0.3rem;">

                                                    Chi tiết

                                                </a>
                                                {{--                                        </div>--}}
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>

        @endforeach

    </section>

@endsection
