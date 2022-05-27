@extends('frontend.layouts.default')

@section('content')
    <!-- Section Main -->
    {{-- @dd($products); --}}
    <section id="breadcrumb" data-background="{{ Voyager::image(setting('site.breadcrumb'))}}" class="parallax-window">
        <div>
            <span class="section-suptitle text-center">Food Lover</span>
            <h1 class="section-title white-font text-center">Menu</h1>
            <ul>
                <li><a href="#">Home</a></li>
                <li>Menu</li>
            </ul>
        </div>
    </section>
    <!-- End Section Main -->

    <!-- Section Lunch Menu -->
    <section id="lunch-menu" class="padd-100">
        <span class="section-suptitle text-center">Food Lover</span>
        <h2 class="section-title sep-type-2 text-center">Thực Đơn</h2>

        @php
            $count = floor(count($products)/2);
        @endphp
        <div class="container">
            <div class="row">
                <div class="menu-carousel vertical-carousel">
                    <div class="menu-item">
                        <div class="col-md-6">

                            @for ($i = 0; $i <$count; $i++)
                            {{-- @dd($products[$i]->image); --}}
                                <div class="offer-item">
                                    <img style="width:114px; height: 105px" src="{{ Voyager::image($products[$i]->image) }}" alt="" class="img-responsive">
                                    <div>
                                        <h3>{{ $products[$i]->name }}</h3>
                                        <p>
                                            {{ $products[$i]->desc }}
                                        </p>
                                    </div>
                                    <span class="offer-price">{{ $products[$i]->price }}</span>
                                </div>
                            @endfor
                        </div>
                        <div class="col-md-6">

                            @for ($i = $count; $i <$count*2; $i++)
                                <div class="offer-item">
                                    <img style="width:114px; height: 105px" src="{{ Voyager::image($products[$i]->image) }}" alt="" class="img-responsive">
                                    <div>
                                        <h3>{{ $products[$i]->name }}</h3>
                                        <p>
                                            {{ $products[$i]->desc }}
                                        </p>
                                    </div>
                                    <span class="offer-price">{{ $products[$i]->price }}</span>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- End Section Lunch Menu -->
    <!-- Section Reservation -->
    <section id="reservation" data-background="{{ asset('assets/img/demo/bg/01.jpg') }}" class="parallax-window">
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
@endsection
