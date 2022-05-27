@extends('frontend.layouts.default')

@section('content')
    <!-- Slide -->
    @foreach ($banners as $banner)
        <section id="main-slider" data-background="{{ Voyager::image($banner->image) }}" class="parallax-window">
            <div class="section-slogan">
                <img src="{{ asset('assets/img/logo.png') }}" alt="">


            </div>

        </section>
    @endforeach
    <!-- End Slide -->

    <!-- Section Special Offers -->
    {{-- @dd($productsSale); --}}
    <section id="special-offers" class="padd-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="offer-left">
                        <span class="section-suptitle">Menu</span>
                        <h2 class="section-title">Món Ăn Yêu Thích</h2>
                        @foreach ($products as $product)
                            <div class="offer-item">
                                <img src="{{ Voyager::image($product->image) }}" alt="" class="img-responsive">
                                <div>
                                    <h3>{{ $product->name }}</h3>
                                    <p>
                                        {{ $product->desc }}
                                    </p>
                                </div>
                                <span class="offer-price">{{ $product->price }}</span>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-md-6 hidden-sm hidden-xs">
                    <div class="offer-right">
                        <img src="{{ asset('assets/img/demo/offers/01.jpg') }}" alt="" class="img-responsive">
                        <a href="{{ route('product.index') }}">
                            Explore
                            <span>The menu</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Special Offers -->

    <!-- Section From The Menu -->
    <section id="from-menu" class="padd-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="f-menu-list">
                        <div class="f-menu-item">
                            <div class="item-left">
                                <img src="{{ Voyager::image($page->image) }}" alt="">
                            </div>
                            <div class="item-right">
                                <span class="section-suptitle">Food Lover</span>
                                <h3 class="section-title">
                                    {{ $page->excerpt }}
                                </h3>
                                <span class="price"></span>
                                <p>
                                    {!! $page->body !!}
                                </p>
                                <a href="{{ route('about.index') }}">Liên Hệ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section End From The Menu -->

    <!-- Section Reservation -->
    <section id="reservation" data-background="{{ Voyager::image(setting('site.Background-contact'))}}" class="parallax-window">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="form-reservation padd-100">
                        <span class="section-suptitle">

                        </span>
                        <h2 class="section-title white-font">
                            Đặt bàn!
                        </h2>
                        <form method="post" action="{{ route('book.store') }}">
                            @csrf
                            <div class="column">
                                <span>
                                    <input type="text" name="name" placeholder="Tên" id="name">
                                </span>
                                <span>
                                    <input type="text" name="phone" placeholder="Số Điện Thoại" id="phone">
                                </span>
                            </div>
                            <div class="column">
                                <span>
                                    <input type="text" name="email" placeholder="Email " id="email">
                                </span>
                                <span>
                                    <input type="datetime-local" name="date" placeholder="Your Time " id="date">
                                </span>
                            </div>
                            <div class="column">
                                <textarea name="content" placeholder="Tin Nhắn" id="content"></textarea>
                            </div>
                            <div class="submit-btn">
                                <button type="submit">Đặt</button>
                                <input type="hidden" class="num_table" value="">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Reservation -->

    <!-- Section Delas -->
    <section id="delas" class="padd-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <span class="section-suptitle text-center">Giảm Giá</span>
                    <h2 class="section-title sep-type-2 text-center">
                        Món Ăn Giảm Giá Trong Ngày
                    </h2>
                    <div class="delas-carousel">
                        @foreach ($productsSale as $product)
                            @if ($product->price_sale > 0)
                                <div class="delas-item">
                                    <img style="width: 338px; height: 300px" src="{{ Voyager::image($product->image) }}"
                                        alt="" class="img-responsive">
                                    <h4>{{ $product->name }}</h4>
                                    <p>

                                    </p>
                                    <span>only {{ $product->price_sale }}</span>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Delas -->

    <!-- Section Restaurant Menu -->
    <section id="restaurant-menu" class="padd-100">
        <span class="section-suptitle text-center">Food Lover</span>
        <h2 class="section-title sep-type-2 text-center">
            resturant menu
        </h2>

        <div class="container">
            <div class="row">
                <ul class="restaurant-filter">
                    <li><a href="#" class="current" data-filter="">Menu</a></li>
                    <li><a href="#" data-filter="dinner">Món Khai Vị</a></li>
                    <li><a href="#" data-filter="lunch">Món Lẩu Om</a></li>
                    <li><a href="#" data-filter="drinks">Món Chính</a></li>
                    <li><a href="#" data-filter="starters">Nước Uống</a></li>
                </ul>
                <div class="restaurant-list">
                    <div class="grid-sizer col-sm-6 col-md-4"></div>
                    @foreach ($products01 as $product)
                        <div class="col-sm-6 col-md-4 grid-item" data-filter="drinks">
                            <div>
                                <a href="{{ route('product.index') }}" target="_blank"><img style="width: 368px; height: 331px"
                                        src="{{ Voyager::image($product->image) }}" alt=""></a>
                                <span>{{ $product->price }}</span>
                                <h3>{{ $product->name }}</h3>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($products02 as $product)
                        <div class="col-sm-6 col-md-4 grid-item" data-filter="dinner">
                            <div>
                                <a href="{{ route('product.index') }}" target="_blank"><img style="width: 368px; height: 331px"
                                        src="{{ Voyager::image($product->image) }}" alt=""></a>
                                <span>{{ $product->price }}</span>
                                <h3>{{ $product->name }}</h3>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($products03 as $product)
                        <div class="col-sm-6 col-md-4 grid-item" data-filter="lunch">
                            <div>
                                <a href="{{ route('product.index') }}" target="_blank"><img style="width: 368px; height: 331px"
                                        src="{{ Voyager::image($product->image) }}" alt=""></a>
                                <span>{{ $product->price }}</span>
                                <h3>{{ $product->name }}</h3>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($products04 as $product)
                        <div class="col-sm-6 col-md-4 grid-item" data-filter="starters">
                            <div>
                                <a href="{{ route('product.index') }}" target="_blank"><img style="width: 368px; height: 331px"
                                        src="{{ Voyager::image($product->image) }}" alt=""></a>
                                <span>{{ $product->price }}</span>
                                <h3>{{ $product->name }}</h3>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Restaurant Menu -->

    <!-- Section Testimonials -->
    <section id="testimonials" class="padd-100 parallax-window" data-background="assets/img/demo/bg/03.jpg">
        <span class="section-suptitle text-center">
            Food Lover
        </span>
        <h2 class="section-title white-font sep-type-2 text-center">
            Ý Kiến Khách Hàng
        </h2>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 no-padd">
                    <ul class="testimonial-list">
                        {{-- @dd($customers); --}}
                        @foreach ($customers as $customer)
                        <li>
                            <div>
                                <p>
                                    {{$customer->content}}
                                </p>
                                <span>{{$customer->name}}</span>
                            </div>
                            <img src="{{ Voyager::image($customer->image) }}" alt="" class="img-responsive">
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Testimonials -->

    <!-- Section Event -->
    <section id="events" class="padd-100">
        <span class="section-suptitle text-center">
            Tin Tức
        </span>
        <h2 class="section-title sep-type-2 text-center">
            Bài Viết Về Ẩm Thực
        </h2>
        <div class="container">
            <div class="row">
                <div class="col-sm-12  no-padd">

                    <ul class="event-carousel">
                        {{-- @dd($posts); --}}
                        @foreach ($posts as $post)
                            <li class="event-item">
                                <img href="{{ route('blog.detail', $post->slug) }}"
                                    src="{{ Voyager::image($post->image) }}" alt="" class="img-responsive">
                                <div>
                                    <h3>{{ $post->title }}</h3>
                                    <span href="{{ route('blog.detail', $post->slug) }}">{{ date("d / m, Y ", strtotime($post->created_at)) }}</span>
                                    <p
                                        style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;  overflow: hidden;">
                                        {{ $post->excerpt }}
                                    </p>
                                    <a href="{{ route('blog.detail', $post->slug) }}">Xem Chi Tiết</a>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Events -->
    {{-- @dd($chefs); --}}
    <!-- Section Teams -->
    <section id="team" class="padd-100">
        <span class="section-suptitle text-center">
            Đội Ngũ Đầu Bếp
        </span>
        <h2 class="section-title sep-type-2 text-center">
            Chuyên Gia Về Các Món Ăn Ngon
        </h2>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 no-padd">
                    <ul class="team-carousel">
                        @foreach ($chefs as $chef)
                            <li>
                                <div>
                                    <img src="{{ Voyager::image($chef->image) }}" alt="" class="img-responsive">
                                    <div>
                                        <span>{{ $chef->position }}</span>
                                        <h3>{{ $chef->name }}</h3>
                                        <div>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section Teams -->

    <!-- Section Vision -->
    {{-- <section id="vision" data-background="assets/img/demo/bg/06.jpg" class="parallax-window padd-100">
        <h2 class="sr-only">Vision</h2>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="vision-item">
                        <span class="count">291</span>
                        <p>Món Ăn Ngon</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="vision-item">
                        <span class="count">710</span>
                        <p>Khách Hàng Thân Thiết</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="vision-item">
                        <span class="count">163</span>
                        <p>Đầu Bếp</p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="vision-item last-item">
                        <span class="count">212</span>
                        <p>Thực Đơn</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Section Vision -->
    {{-- @dd($page); --}}
    
@endsection

@section('js')
@endsection
