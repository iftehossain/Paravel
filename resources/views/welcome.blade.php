@extends('layouts.tohoney')

@section('title')
    Tohoney - Home Page 
@endsection

@section('body')
    <!-- slider-area start -->
    <div class="slider-area">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach ($headers as $header)
                <div class="swiper-slide overlay">
                    <div class="single-slider slide-inner" style="background: url({{asset('uploads/header')}}/{{ $header->header_image }});">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-lg-9 col-12">
                                    <div class="slider-content">
                                        <div class="slider-shape">
                                            <h2 data-swiper-parallax="-500">{{ $header->header_title }}</h2>
                                            <p data-swiper-parallax="-400">{{ $header->header_description }}</p>
                                            <a href="shop.html" data-swiper-parallax="-300">Shop Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- slider-area end -->
    <!-- featured-area start -->
    <div class="featured-area featured-area2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="featured-active2 owl-carousel next-prev-style">
                    @foreach ($categories as $category)
                        <div class="featured-wrap">
                            <div class="featured-img">
                                <img src="{{asset('uploads/category')}}/{{$category->category_image}}" alt="Not Found">
                                <div class="featured-content">
                                    <a href=" {{ route('category_wise_shop', $category->id) }} "> {{$category->category_name}}</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- featured-area end -->
    <!-- start count-down-section -->
    <div class="count-down-area count-down-area-sub">
        <section class="count-down-section section-padding parallax" data-speed="7">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12 text-center">
                        <h2 class="big">Deal Of the Day <span>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin</span></h2>
                    </div>
                    <div class="col-12 col-lg-12 text-center">
                        <div class="count-down-clock text-center">
                            <div id="clock">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </section>
    </div>
    <!-- end count-down-section -->
    <!-- product-area start -->
    <div class="product-area product-area-2">
        <div class="fluid-container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Best Seller</h2>
                        <img src="{{asset('tohoney_assets')}}/images/section-title.png" alt="">
                    </div>
                </div>
            </div>
            <ul class="row">
                @foreach ($sorted_bestseller as $product)
                    @php
                        $product =  App\Models\Product::find($product->product_id);
                    @endphp
                    @include('little_part.product')
                @endforeach
            </ul>
        </div>
    </div>
    <!-- product-area end -->
    <!-- product-area start -->
    <div class="product-area">
        <div class="fluid-container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Our Latest Product</h2>
                        <img src="{{asset('tohoney_assets')}}/images/section-title.png" alt="">
                    </div>
                </div>
            </div>
            <ul class="row">
                @foreach ($products as $product)
                    @include('little_part.product')
                @endforeach
                {{-- <li class="col-12 text-center">
                    <a class="loadmore-btn" href="javascript:void(0);">Load More</a>
                </li> --}}
            </ul>
        </div>
    </div>
    <!-- product-area end -->
    <!-- testmonial-area start -->
    <div class="testmonial-area testmonial-area2 bg-img-2 black-opacity">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="test-title text-center">
                        <h2>What Our client Says</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-1 col-12">
                    <div class="testmonial-active owl-carousel">
                        @foreach ($clients as $client)
                        <div class="test-items test-items2">
                            <div class="test-content">
                                <p>{{ $client->client_says }}</p>
                                <h2>{{ $client->client_name }}</h2>
                                <p>{{ $client->client_title }}</p>
                            </div>
                            <div class="test-img2">
                                <img src="{{asset('uploads/client/'.$client->client_image)}}" alt="not found" class="rounded-circle">
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testmonial-area end -->

@section('tohoney_script')
<script>
    (function($) {
    /*------------------------------------------
        = COUNTDOWN CLOCK
    -------------------------------------------*/
    if ($("#clock").length) {
        $('#clock').countdown( '{{ App\Models\Setting::where('setting_name','offer_date')->first()->setting_value }}', function(event) {
            var $this = $(this).html(event.strftime('' +
                '<div class="box"><div>%m</div> <span>month</span> </div>' +
                '<div class="box"><div>%D</div> <span>Days</span> </div>' +
                '<div class="box"><div>%H</div> <span>Hours</span> </div>' +
                '<div class="box"><div>%M</div> <span>Mins</span> </div>' +
                '<div class="box"><div>%S</div> <span>Secs</span> </div>'));
        });
    }

    })(jQuery);
</script>
@endsection

@endsection