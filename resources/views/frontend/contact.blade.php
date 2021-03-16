@extends('frontend.layouts.main')
@section('content')
    <section class="banner-introduce">
        <div class="img">
            <img src="/frontend/images/banner/banner-san-pham.png" alt="Liên hệ với xưởng mộc giá tốt" class="w-100">
        </div>
        <div class="content">
            <h1 class="text-center"> Liên hệ </h1>
        </div>
    </section>

    <section class="container">
        <div class="introduce contact">
            <div class="box px-0  px-md-4">
                <div class="box d-flex">
                    <div class="row">
                        <div class="col-lg-6 ">
                            <div class="img d-none d-lg-block">
                                <img src="/frontend/images/san-pham/phong-ngu/giuong-chau-au.png" alt="Liên hệ" class="w-100">
                            </div>
                        </div>
                        <div class="col-lg-6">



                            <form action="{{route('shop.postContact')}}" method="POST">
                                @csrf
                                @if (session('msg'))
                                    <div class="pad margin no-print">
                                        <div class="alert alert-success alert-dismissible" style="" id="thongbao">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <h4><i class="icon fa fa-check"></i> Thông báo !</h4>
                                            {{ session('msg') }}
                                        </div>
                                    </div>
                                @endif
                            <div class="content">
                                <p class="title lien-he mb-2"> liên hệ với chúng tôi </p>
                                <div class="form-group lien-he">
                                    <input type="text" name="name" placeholder="Họ và tên" style="margin-top: 10px" value="{{old('name')}}">
                                    <span style=" color: #ff0000">
                                        {{$errors->first('name')}}
                                    </span>
                                    <input type="email" name="email" placeholder="Email" style="margin-top: 10px" value="{{old('email')}}">
                                    <span style=" color: #ff0000">
                                        {{$errors->first('email')}}
                                    </span>
                                    <input type="text" name="phone" placeholder="Số điện thoại" style="margin-top: 10px" value="{{old('phone')}}">
                                    <span style=" color: #ff0000">
                                        {{$errors->first('phone')}}
                                    </span>
                                    <input type="text" name="content" placeholder="Nội dung" style="margin-top: 10px" value="{{old('content')}}">
                                    <span style=" color: #ff0000">
                                        {{$errors->first('content')}}
                                    </span>
                                    <br>
                                    <button class="contact-send"> Gửi </button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
