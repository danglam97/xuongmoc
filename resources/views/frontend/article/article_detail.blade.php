@extends('frontend.layouts.main')
@section('content')

    <section class="container">
        <div class="new-details">
            <h1> Tin tức </h1>
            <div class="row">
                <div class="col-md-8 box-left">

                    @foreach($article as $item)
                    <p><i class="fas fa-calendar-alt"></i> {{date('d/m/Y',strtotime($item->updated_at)) }}</p>

                        <div class="col-md-12">
                            <div class="new-item">
                                {{--                            <div class="img" style="display: flex; justify-content: center">--}}
                                {{--                                <img src="{{ asset($item->image) }}"--}}
                                {{--                                     class="img-fluid" alt="Ảnh đại diện tin tức">--}}
                                {{--                            </div>--}}
                                <h1 class="title">
                                    {{$item->title}}
                                </h1>
                                <div class="show active">
                                    {!! $item->description !!}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-md-4 box-right">
                    <h2> Bài viết liên quan </h2>
                    @foreach($sameArticles as $item)

                    <ul class="list-unstyled">
                        <li class="d-flex">
                            <img src="{{$item->image}}"
                                 alt="{{$item->title}}"
                                 class="img mr-2 mt-2" style="width:80px; height:80px;"/>
                            <div class="w-100 mt-0">
                                <p class="mt-0 mb-1">
                                    <a href="{{ route('shop.getDetailArticle', ['slug' => $item->slug]) }}">{{$item->title}}</a>
                                </p>
                                <p class="d-flex justify-content-between" style="color:#999">
                                    <i class="fas fa-calendar-alt">{{date('d/m/Y',strtotime($item->updated_at)) }} <span></span></i>
                                </p>
                            </div>
                        </li>
                    </ul>
                    @endforeach

                </div>

            </div>

        </div>
    </section>
@endsection
