<footer class="w-100" style="background:#363636">
    <div class="container">

{{--        @foreach($settings as $item)--}}
        <div class="row mt-3 mb-3">
            <div class="col-md-6">
                <h5>
                    THÔNG TIN CHUNG
                    <span class="line-remove" style="width: 78px; "></span>
                </h5>
                <h4 class="mt-2 pt-2 com-name">
                    CÔNG TY TNHH HOÀNG HOAN
{{--                    {{$settings->name}}--}}
                </h4>
                <p class="com-phone">
                    <i class="fas fa-phone-alt"></i>
                    <a href="tel:02422696999" title="024.2269.6999">024.2269.6999</a>
                </p>
                <p class="com-email">
                    <i class="fas fa-envelope"></i>
                    <a href="mailto:vangviety@gmail.com" title="vangviety@gmail.com">cskh@hoanghoan.vn</a>
                </p>
                <address class="com-address">
                    <i class="fas fa-map-marker-alt"></i>
                    Số 1 Nguyễn Trãi, Thanh Xuân, Hà Nội
                </address>
            </div>
{{--            @endforeach--}}
            <div class="col-md-3">
                <h5>
                    VỀ CHÚNG TÔI
                    <span class="line-remove" style="width: 78px; "></span>
                </h5>
                <ul>
                    <li class=""><a href="/"> Trang chủ </a></li>
                    <li><a href="{{ route('shop.about') }}"> Giới thiệu </a></li>
                    <li><a href="{{ route('shop.product') }}"> Sản phẩm </a></li>
                    <li><a href="{{ route('shop.article') }}"> Tin tức </a></li>
                    <li><a href="{{ route('shop.vendor') }}"> Đối tác </a></li>
                    <li><a href="{{ route('shop.contact') }}"> Liên hệ </a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>
                    KẾT NỐI VỚI CHÚNG TÔI
                    <span class="line-remove" style="width: 78px; "></span>
                </h5>
                <div class="mt-4 social-icon">
                    <a href="" target="_blank">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    <a href=""
                       target="_blank"><i class="fab fa-youtube-square"></i></i></a>
                    <a href="" target="_blank">
                        <i class="far fa-envelope"></i>
                    </a>
                </div>
            </div>
        </div>


    </div>
</footer>
