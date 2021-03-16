@extends('frontend.layouts.main')
@section('content')
    <section id="banner-index">
        <div class="banner-slider">
            <div class="banner slider">
                @foreach($banners as $item)
                    <div class="banner-item">
                        <div class="img">
                            <img src="{{ asset($item->image) }}" alt="THẾ GIỚI NỘI THẤT SỐ 1 VIỆT NAM"
                                 class="img-fluid w-100">
                        </div>
                        <div class="banner-caption container">
                            <div class="content box">
                                <h2 class="text-uppercase">
                                    THẾ GIỚI NỘI THẤT SỐ 1 VIỆT NAM <br> <span> Hoàng Hoan </span>
                                </h2>
                                <div>
                                    <p>Xưởng Mộc Hoàng Hoan với sứ mệnh là kết hợp hài hòa giữa ý tưởng và mong muốn của
                                        khách hàng, đem lại những sản phẩm tinh tế, hài hòa và tiết kiệm nhất dành cho
                                        khách hàng.</p>

                                </div>
                                <a href="/lien-he" class="text-uppercase"> Liên hệ ngay </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="container">
        <div class="category">
            @foreach($categories as $item)
                <div class="category-item">
                <a href="{{route('shop.getListProduct', ['slug' => $item->slug])}}">
                    <div class="img">
                        <img src="{{ asset($item->image) }}" alt=""
                             class="img-fluid">
                    </div>
                    <p> {{$item->name}} </p>
                </a>
            </div>

            @endforeach
        </div>
        <div class="box-product">
            <h2> Sản phẩm nổi bật </h2>
            <div class="product-slider">
                <div class="regular slider">
                    @foreach($hotProducts as $item)
                    <div>
                        <div class="product">
                            <a href="{{ route('shop.getProductDetail', ['slug' => $item['slug'], 'id' => $item['id']]) }}">
                            <div class="img">
                                <img src="{{ asset($item->image) }}"
                                     alt="" class="img-fluid">
                            </div>
                            <div class="info">
                                <p class="name"><a href="{{ route('shop.getProductDetail', ['slug' => $item['slug'], 'id' => $item['id']]) }}"> {{ $item->name }}</a></p>
                                <p class="vote">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </p>
                                <p class="desc">
                                    {{ @$item->materials->name }}
                                </p>
                                <a href="{{route('shop.getProductDetail', ['slug' => $item['slug'], 'id' => $item['id']]) }}"
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
    <section class="about-us" style="background-image: url('/frontend/images/gioi-thieu/vct-0.jpg'); width: 100%;">
        <div class="container">
            <h2> Về chúng tôi </h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="img h-100">
                        <img src="/frontend/images/gioi-thieu/vct-0.jpg"
                             alt="NỘI THẤT HOÀNG HOAN UY TÍN SONG HÀNH CHẤT LƯỢNG" class="w-100 h-100">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="content h-100">
                        <h3> NỘI THẤT HOÀNG HOAN UY TÍN SONG HÀNH CHẤT LƯỢNG </h3>
                        <div>
                            <p>Nội thất Hoàng Hoan chúng tôi tự hào là đứa con tinh thần ra đời sau hơn 30 năm hoạt
                                động trong lĩnh vực kinh doanh đồ gỗ nội thất với thương hiệu ĐỒ GỖ HOÀNG HOAN nổi
                                tiếng.</p>
                            <p>Tài nguyên của chúng tôi là đội ngũ kiến trúc sư tốt nghiệp ĐH Kiến Trúc Hà Nội với
                                nhiều năm kinh nghiệm, luôn tràn đầy nhiệt huyết và sức sáng tạo của tuổi trẻ. Thế
                                mạnh của chúng tôi là sở hữu xưởng nội thất hơn 10.000m2 tại Hà Nội sản xuất đa dạng
                                các sản phẩm với giá cả luôn cạnh tranh.</p>

                        </div>
                        <div>
                            <p><img alt="giới thiệu" src="/frontend/images/gioi-thieu/vct-1.jpg"/>&nbsp;<img
                                    alt="giới thiệu" src="/frontend/images/gioi-thieu/vct-2.jpg"/>&nbsp;<img
                                    alt="giới thiệu" src="/frontend/images/gioi-thieu/vct-3.jpg"/>&nbsp;<a
                                    href="{{ route('shop.about') }}"><img alt=""
                                                                 src="/frontend/images/gioi-thieu/vct-4.jpg"/></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <h2 class=""> Tại sao nên chọn hoàng hoan?</h2>
            <div class="row reason">
                <div class="col-md-6">
                    <div class="reason-item d-flex">
                        <div class="img">
                            <img src="/frontend/images/banner/chon-1.jpg" alt="lý do 1">
                        </div>
                        <div class="content">
                            <h3 class="title"> Chính sách giá </h3>
                            <p class="desc"> Tốt nhất và công khai giá trên website</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="reason-item d-flex">
                        <div class="img">
                            <img src="/frontend/images/banner/chon-2.jpg" alt="lý do 1">
                        </div>
                        <div class="content">
                            <h3 class="title"> Sản xuất </h3>
                            <p class="desc"> Trực tiếp sản xuất bởi đội ngũ nhân viên hàng đầu</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="reason-item d-flex">
                        <div class="img">
                            <img src="/frontend/images/banner/chon-3.jpg" alt="lý do 1">
                        </div>
                        <div class="content">
                            <h3 class="title"> Chất lượng </h3>
                            <p class="desc"> Cam kết chất lượng sản phẩm và tốc độ thi công </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="reason-item d-flex">
                        <div class="img">
                            <img src="/frontend/images/banner/chon-4.jpg" alt="lý do 1">
                        </div>
                        <div class="content">
                            <h3 class="title"> Bảo hành </h3>
                            <p class="desc"> Dịch vụ bảo hành tốt nhất khu vực</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="news">
        <div class="container">
            <h2> Tin tức </h2>
            <div class="row">
                @foreach($hotArticle as $item)
                <div class="col-lg-7">
                    <div class="box">
                        <div class="img">
                            <img src="{{ asset($item->image) }}"
                                 alt="CÁCH CHỌN SOFA CHO PHÒNG KHÁCH NHÀ BẠN THÊM SANG TRỌNG" class="w-100">
                        </div>
                        <div class="main-content">
                            <p class="title">
                                <a href="{{ route('shop.getDetailArticle', ['slug' => $item->slug]) }}">
                                    {{$item->title}}
                                </a>
                            </p>
                            <div class="show active" >
                                {!! $item->description !!}
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach

                <div class="col-lg-5 ">
                    <ul>
                        @foreach($articles as $item)
                        <li class="d-flex">
                            <div class="img">
                                <img src="{{ asset($item->image) }}"
                                     alt="25+ MẪU GIƯỜNG NGỦ HỘC KÉO THÔNG MINH CHO CĂN PHÒNG BẠN">
                            </div>
                            <div class="content">
                                <p class="title">
                                    <a href="{{ route('shop.getDetailArticle', ['slug' => $item->slug]) }}">
                                        {{$item->title}}
                                    </a>
                                </p>
                                <div class="show active" >
                                    {!! $item->description !!}
                                </div>
                            </div>
                        </li>
                        @endforeach

                    </ul>
                    <div>
                        <a href="{{ route('shop.article') }}" class="see-more"> Xem thêm <i
                                class="fas fa-long-arrow-alt-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="partner">
        <div class="container">
            <h2> Đối tác </h2>
            <div class="partner-slider">
{{--                @foreach($categories as $item)--}}
                <div class="partner-slide slide">
                    <div>
                        <div class="img">
                            <img src="/frontend/images/doi-tac/vinpearl.jpg"
                                 alt="Công ty cổ phần VInpearl">
                        </div>
                    </div>
                    <div>
                        <div class="img">
                            <img src="/frontend/images/doi-tac/dt-muongthanh.jpg"
                                 alt="TẬP ĐOÀN KHÁCH SẠN MƯỜNG THANH">
                        </div>
                    </div>
                    <div>
                        <div class="img">
                            <img src="/frontend/images/doi-tac/dt-sharaton.jpg" alt="sheraton hanoI HOTEL">
                        </div>
                    </div>
                    <div>
                        <div class="img">
                            <img src="/frontend/images/doi-tac/dt-coffee-house.jpg" alt="THE COFFEE HOUSE">
                        </div>
                    </div>
                    <div>
                        <div class="img">
                            <img src="/frontend/images/doi-tac/dt-marvella.jpg" alt="Marvella Hotel Nha Trang">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact contact-index" style="background-image: url(/frontend/images/banner/lienhe-bg.jpg);">
        <span><img src="/frontend/images/banner/lien-he.png" alt="Trải nghiệm cùng hoàng hoan"/></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-5 ">
                    <h2 class="title"> Trải nghiệm dịch vụ <br> <strong> cùng Hoàng Hoan ngay </strong></h2>
                </div>
                <div class="col-lg-6 col-md-7">
                    <p class="mb-1 text-white"> Thông tin liên hệ </p>
                    <div class="form-group">
                        <input type="text" placeholder="Email/Số điện thoại">
                        <button class="savePhone"> Gửi</button>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection

