@extends('frontend.layouts.main')
@section('content')

    <section class="banner-introduce">
        <div class="img">

            <img src="/frontend/images/doi-tac/banner-doi-tac.png" alt="Các đối tác của xưởng mộc giá tốt" />
        </div>
        <div class="content">
            <h1 class="text-center"> Đối tác </h1>
        </div>
    </section>
    <section class="container">

        <div class="introduce partner">

            @foreach($vendor as $item)

                <div class="box d-flex">
                <div class="row w-100">

                        <div class="col-md-3 col-lg-4 d-flex align-items-center">
                        <div class="img w-100 px-2 px-lg-5">
                            <img src="{{ asset($item->image) }}" alt="">
                        </div>
                    </div>
                        <div class="col-md-9 col-lg-8 d-flex align-items-center">
                        <div class="content text-justify">
                            <h3 class="title"> {{$item->name}} </h3>
                            <p class="desc">{!!$item->content_description!!}</p>
                        </div>
                    </div>

                </div>
            </div>
            @endforeach

        </div>

    </section>



@endsection
