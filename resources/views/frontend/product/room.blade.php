@extends('frontend.layouts.main')
@section('content')

    <section class="banner-product">
        <div class="slider">
            @foreach($banners as $item)
            <div class="slider-item">
                <div class="img">
                    <img src="{{ asset($item->image) }}" alt="Ảnh slider" class="img-fluid">
                </div>
            </div>
            @endforeach

        </div>
    </section>
    <div hidden>
        <input type="text" name="slug" value="phong-khach" />
        <input type="text" name="id" value="7" />
    </div>
    <section class="wrapper-product contd-flex justify-content-between box-title container">
        <section class="wrapper-product container" style="background-color: #fff">

        <div class="list-product">

            @foreach($categories as $category)
{{--                {{dd($category->name)}}--}}
            <div class="d-flex justify-content-between box-title">
                <h2> {{ $category->name }} </h2>

            </div>
            @endforeach
            <div class="box-product">
                <div class="row">
                    @foreach($products as $product)
{{--                        {{dd($product->image)}}--}}
                        <div class="col-lg-3 col-sm-6">
                            <div class="product">
                                <a href="{{ route('shop.getProductDetail', ['slug' => $product['slug'], 'id' => $product['id']]) }}">
                                <div class="img">
                                    <img src="{{ $product->image }}" alt="" class="img-fluid">
                                    </div>
                                        <div class="info">
                                            <p class="name"> <a href="{{ route('shop.getProductDetail', ['slug' => $product['slug'], 'id' => $product['id']]) }}">{{ $product->name }}  </a> </p>
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
                                            <a href="{{ route('shop.getProductDetail', ['slug' => $product['slug'], 'id' => $product['id']]) }}"
                                                    style="color: #1c2529;background-color: #d4d285;
                                                    padding: 0.25rem 0.3rem;border: aliceblue;border-radius: 0.3rem;">
                                                Chi tiết
                                            </a>
                                        </div>
                            </a>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>

        </div>
        </section>


    </section>
@endsection
