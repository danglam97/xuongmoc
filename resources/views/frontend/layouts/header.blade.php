<header>
    <nav class="container">
        <div class="logo">
            <img src="/frontend/images/logo.png" alt="Xưởng mộc giá tốt hoàng hoan">
        </div>
        <ul class="menu">
            <ul class="d-flex h-100 justify-content-center align-items-center">
                <ul>
                    <form action="{{route('shop.searchProducts')}}" method="get" class="sidebar-form" method="GET">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Tìm kiếm" value="{{ isset($keyword) ? $keyword : '' }}">
                            <span class="input-group-btn">
                                <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <li class="nav-item"><a href="/"> Trang chủ </a></li>
                    <li class="nav-item"><a href="{{ route('shop.about') }}"> Giới thiệu </a></li>
{{--                    <li><a href="{{ route('shop.product') }}">Sản phẩm</a></li>--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                            Dropdown--}}
{{--                        </a>--}}
{{--                        <ul class="dropdown-menu">--}}
{{--                            <a class="dropdown-item" href="#">Action</a>--}}
{{--                            <a class="dropdown-item" href="#">Another action</a>--}}
{{--                            <a class="dropdown-item" href="#">Something else here</a>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{route('shop.product')}}" id="navbarDropdown" role="button">
                            Sản phẩm
                        </a>
                        <ul class="dropdown-menu">
                            @foreach($menu as $item)
                                <a class="nav-item dropdown-item" href="{{route('shop.getListProduct', ['slug' => $item->slug])}}">{{$item->name}}</a>
                            @endforeach
{{--                            <a class="nav-item dropdown-item" href="{{route('shop.getListProduct')}}">PHÒNG KHÁCH</a>--}}
{{--                            <a class="nav-item dropdown-item" href="#">PHÒNG NGỦ</a>--}}
{{--                            <a class="nav-item dropdown-item" href="#">TRẺ EM</a>--}}
                        </ul>
                    </li>
{{--                    <li><a href="">Sản phẩm</a></li>--}}

                    <li class="nav-item"><a href="{{ route('shop.article') }}"> Tin tức </a></li>
                    <li class="nav-item"><a href="{{ route('shop.vendor') }}"> Đối tác </a></li>
                    <li class="nav-item"><a href="{{ route('shop.contact') }}"> Liên hệ </a></li>
                </ul>
            </ul>
{{--            <form action="{{ route('shop.search') }}" method="GET" class="search-form-cat">--}}
{{--                <input value="{{ isset($keyword) ? $keyword : '' }}" style="width: 150px;" type="text" class="form-control search-form" name="tu-khoa" placeholder="Tìm kiếm" />--}}
{{--            </form>--}}
        </div>

    </nav>
</header>
