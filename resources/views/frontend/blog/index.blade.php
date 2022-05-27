@extends('frontend.layouts.default')

@section('content')
<!-- Section Main -->
<section id="breadcrumb" data-background="{{ Voyager::image(setting('site.breadcrumb'))}}" class="parallax-window">
    <div>
        <span class="section-suptitle text-center">Food Lover</span>
        <h1 class="section-title white-font text-center">Bài Viết</h1>
        <ul>
            <li><a href="#">Trang Chủ</a></li>
            <li>Bài Viết</li>
        </ul>
    </div>
</section>
<!-- Section Event -->
<section id="events" class="padd-100">
    <span class="section-suptitle text-center">
       Tin Tức Nổi Bật
    </span>
    <h2 class="section-title sep-type-2 text-center">
        Bài Viết Về Ẩm Thực Việt
    </h2>
    <div class="container">
        <div class="row">
            <div class="col-sm-12  no-padd">
                
                <ul class="event-carousel">
                    {{-- @dd($posts); --}}
                    @foreach($posts as $post)
                    <li class="event-item">
                        <img src="{{ Voyager::image($post->image) }}" alt="" class="img-responsive">
                        <div>
                            <h3>{{$post->title}}</h3>
                            <span>{{$post->created_at}}</span>
                            <p style="display: -webkit-box;-webkit-line-clamp: 2;-webkit-box-orient: vertical;  overflow: hidden;">
                                {{$post->excerpt}}
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

<!-- End Section Main -->
@endsection