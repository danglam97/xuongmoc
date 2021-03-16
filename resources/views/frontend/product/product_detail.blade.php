@extends('frontend.layouts.main')
@section('content')

    <section class="container">
        <div class="link-sumary">
            <div class="d-flex">
                <p><a href="/">TRANG CHỦ </a></p>
                <span> <i class="fas fa-angle-right"></i> </span>
                <p><a href="/">{{$category->first()->name}}</a></p>
                <span> <i class="fas fa-angle-right"></i> </span>
                <p><a href="/"> CHI TIẾT SẢN PHẨM </a></p>
            </div>
        </div>
        @if (session('msg'))
            <div class="pad margin no-print">
                <div class="alert alert-success alert-dismissible" style="" id="thongbao">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Thông báo !</h4>
                    {{ session('msg') }}
                </div>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </section>
    <section class="container">
        @foreach($product as $item)
            <div class="product-detail">
                <h1> {{$item->name}} </h1>
                <div class="row mb-4">
                    <div class="col-lg-8">
                        <div class="image-product slider">
                            <div class="img">
                                <img src="{{$item->image}}"
                                     alt="" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="list-image d-flex flex-wrap mb-4">
                            @foreach($product_images as $product_image)
                                <div class="img">
                                    <img src="{{$product_image->image}}" alt="">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4 ">
                        <p class="material"> Chất liệu </p>
                        <div class="d-flex material ">
                            <button>
                                {{ @$item->materials->name }}
                            </button>
                        </div>

                        <div class="certify d-flex justify-content-start align-items-center">
                            <i class="fas fa-shield-alt mr-2"></i>

                            <p>Bảo hành sản phẩm lên đến 12 tháng</p>

                        </div>
                        <div>
                            <div style="padding-top: 1rem;">
                                <button type="button" class="btn btn-info btn-lg" data-toggle="modal"
                                        data-target="#myModal">LIÊN HỆ NGAY
                                </button>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                                                <h2 class="modal-title">Thông tin đơn hàng :</h2>
                                                <button type="button" class="close"
                                                        data-dismiss="modal">&times;
                                                </button>
                                            </div>
                                            <div class="modal-body" style="text-align: start;">
                                                <div class="cart cart-order" style="display: flex;">
                                                    <div class="cart-l" style="padding: 1rem;">
                                                        <div class="p-image">
                                                            <img src="{{$item->image}}" alt="" style="height: 270px; width: 270px">
                                                        </div>
                                                        <div class="p-name"
                                                             style="text-align: center;padding: 0.5rem 0rem 1rem;">
                                                            <a href=""
                                                               style=" color: burlywood; font-size: 1.5rem;">{{ $item->name }}</a>
                                                        </div>
                                                        <div class="p-des">
                                                            <p>Chất liệu:
                                                                {{ $item->materials->name }}
                                                            </p>

                                                        </div>
                                                    </div>
                                                    <div class="cart-r" style="width: 100%">
                                                        <h3>Thông tin khách hàng</h3>

                                                        <form action="{{route('shop.postContact')}}" method="POST">
                                                            @csrf
                                                            <input type="text" name="products_id" value="{{$item->id}}"
                                                                   style="display:none">
                                                            <div class="form-group">
                                                                <div style="padding-bottom: 1rem;">
                                                                    <input type="text"
                                                                           placeholder="Họ và tên (*)"
                                                                           name="name" class="form-control"
                                                                           id="name" value="{{old('name')}}">
                                                                </div>
                                                                <div style="padding-bottom: 1rem; " class="has-error">
                                                                    <input type="text"
                                                                           placeholder="Số điện thoại(*)"
                                                                           name="phone" class="form-control" value="{{old('phone')}}">
                                                                </div>
                                                                <div style="padding-bottom: 1rem;">
                                                                    <input type="email" placeholder="Email(*)"
                                                                           name="email" class="form-control" value="{{old('email')}}">
                                                                </div>
                                                                <div style="padding-bottom: 1rem;">
                                                                    <input type="text" placeholder="Địa Chỉ(*)"
                                                                           name="address" class="form-control" value="{{old('address')}}">
                                                                </div>
                                                                <div style="padding-bottom: 1rem;">
                                                                <textarea class="form-control" name="content"
                                                                          rows="4"
                                                                          placeholder="Yêu Cầu Của Khách Hàng (*)">{{old('content')}}</textarea>
                                                                </div>
                                                                <button type="submit" value="GỬI ĐƠN HÀNG"
                                                                        class="" style="color:
                            #ffffff;background-color: #c99551;width: 100%;padding: 1rem; border: none;">Gửi Đơn Hàng
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="info">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link " id="tab-1" data-toggle="tab" href="#tab_1" role="tab"
                               aria-controls="tab_1" aria-selected="true">Đặc trưng</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link " id="tab-2" data-toggle="tab" href="#tab_2" role="tab"
                               aria-controls="tab_2" aria-selected="true">Thông số</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link " id="tab-3" data-toggle="tab" href="#tab_3" role="tab"
                               aria-controls="tab_3" aria-selected="true">Bảo quản</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link " id="tab-4" data-toggle="tab" href="#tab_4" role="tab"
                               aria-controls="tab_4" aria-selected="true">Bảo hành</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link " id="tab-5" data-toggle="tab" href="#tab_5" role="tab"
                               aria-controls="tab_5" aria-selected="true">Cam kết</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tab_1" role="tabpanel" aria-labelledby="tab-1">
                            <div class="show active">
                                {!! $item->featured !!}
                            </div>
                        </div>
                        <div class="tab-pane fade " id="tab_2" role="tabpanel" aria-labelledby="tab-2">
                            <div class="show active">
                                {!! $item->specifications !!}
                            </div>
                        </div>
                        <div class="tab-pane fade " id="tab_3" role="tabpanel" aria-labelledby="tab-3">
                            <div class="show active">
                                {!! $item->preservation !!}

                            </div>
                        </div>
                        <div class="tab-pane fade " id="tab_4" role="tabpanel" aria-labelledby="tab-4">
                            <div class="show active">
                                {!! $item->guarantee !!}

                            </div>
                        </div>
                        <div class="tab-pane fade " id="tab_5" role="tabpanel" aria-labelledby="tab-5">
                            <div class="show active">
                                {!! $item->commitment !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </section>

    <section class="wrapper-product container">
        <div class="list-prouduct">
            <div class="d-flex justify-content-between box-title">
                <h2> Sản phẩm tương tự </h2>
            </div>
            <div class="box-product">
                <div class="row">
                    @foreach($sameProducts as $sameProduct)

                        <div class="col-lg-3 col-sm-6">
                            <a href="{{ route('shop.getProductDetail', ['slug' => $sameProduct->slug, 'id' => $sameProduct->id]) }}">
                                <div class="product">
                                    <div class="img">
                                        <img src="{{$sameProduct->image}}" alt=""
                                             class="img-fluid">
                                    </div>
                                    <div class="info">
                                        <p class="name"> {{$sameProduct->name}} </p>
                                        <p class="vote">
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                            <span><i class="fas fa-star"></i></span>
                                        </p>
                                        <p class="desc">
                                            {{ @$sameProduct->materials->name }}
                                        </p>
                                        <a href="{{ route('shop.getProductDetail', ['slug' => $sameProduct->slug , 'id' => $sameProduct->id]) }}"
                                           style="color: #1c2529;background-color: #d4d285;
                                                    padding: 0.25rem 0.3rem;border: aliceblue;border-radius: 0.3rem;">
                                            Chi tiết
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>


                    @endforeach

                </div>
            </div>
        </div>

    </section>
@endsection
