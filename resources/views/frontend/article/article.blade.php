@extends('frontend.layouts.main')
@section('content')

    <section class="container">
    <div class="box-news">
        <h1> Tin tức </h1>
        <div class="row wrapper-news">
            @foreach($article as $item)
            <div class="col-md-6 col-lg-4">
                <div class="new-item">
                    <div class="img" style="overflow: hidden; display: flex; justify-content: center; align-items: center; height: 250px">
                        <img src="{{ asset($item->image) }}" class="img-fluid" alt="Ảnh đại diện tin tức" style="width: 100%; height: 100%">
                    </div>
                    <p class="title">
                        <a href="{{ route('shop.getDetailArticle', ['slug' => $item->slug]) }}">{{$item->title}}</a>
                    </p>
                    <div class="show active" >
                        <p>{!! $item->content !!}</p>
                    </div>
                </div>
            </div>
            @endforeach
                <div class="pagination d-flex justify-content-center">
                    {{$article->links()}}
                </div>
        </div>
    </div>
</section>
@endsection
