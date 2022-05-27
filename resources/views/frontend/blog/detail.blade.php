@extends('frontend.layouts.default')

@section('content')
<!-- Section Main -->
<section id="breadcrumb" data-background="{{ Voyager::image(setting('site.breadcrumb'))}}" class="parallax-window">
    <div>
        <span class="section-suptitle text-center">Food Lover</span>
        <h1 class="section-title white-font text-center">Chi Tiết</h1>
        <ul>
            <li><a href="#">Trang Chủ</a></li>
            <li> {{$blog->title}}</li>
        </ul>
    </div>
    {{-- @dd($blog); --}}
</section>
<!-- End Section Main -->   
<!-- Section Contact -->
<section id="blog" class="padd-100">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="blog-single">
                    <div class="blog-item">
                        <div class="entry-thumbnail">
                            <a title="" href="#">
                                
                            </a>
                        </div>
                        <div class="post-content">
                            <h2 class="entry-title">
                                {{$blog->title}}
                            </h2>
                            <div class="entry-content">
                                <ul class="meta">
                                    <li>
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <span>My Admin</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-clock-o" aria-hidden="true"></i>
                                        <span>{{ date("d / m, Y ", strtotime($blog->created_at)) }}</span>
                                    </li>
                                    
                                </ul>
                                <p class="extrait-post">
                                   {!!$blog->body!!}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="share-box">
                            <span>
                                Share Post :
                            </span>
                            <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 hidden-sm hidden-xs">
                <div class="sidebar">
                    <div class="widget widget_search">
                        {{-- <form id="searchform" class="search-area" action="https://template-html.egprojets.com/food-lover/blog.html" method="get">
                            <input id="s" class="form-control" type="text" placeholder="Search" name="s">
                            <a href="#" class="btn-search">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </a>
                        </form> --}}
                    </div>
                    
                    <div class="widget widget_popullar">
                        <h3 class="widget-title">Bài Viết Gần Đây</h3>
                        <ul>
                            @foreach ($blogrelative as $blog)
                                
                           
                            <li>
                                <a href="{{ route('blog.detail', $blog->slug) }}">
                                    <img src="{{ Voyager::image($blog->image) }}" alt="">
                                </a>
                                <div>
                                    <h4>
                                        <a href="{{ route('blog.detail', $blog->slug) }}">{{$blog->title}}</a>
                                    </h4>
                                    <span>{{ date("d / m, Y ", strtotime($blog->created_at)) }}</span>
                                    <p style="display: -webkit-box;-webkit-line-clamp: 1;-webkit-box-orient: vertical;  overflow: hidden;">
                                        {{$blog->excerpt}}
                                    </p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    
                    <div class="widget widget_author">
                        <h3 class="widget-title">Author Quote</h3>
                        <div>
                            <img src="{{ asset('assets/img/demo/testimonials/02.jpg') }}" alt="">
                            <p>
                                “Donec semper, ex et sollicitudin dignim, massa quam hendrerit magna, a consequat urna lectus posuere nisl. Vivamus tincidunt sagittis massa, quis consecter ex eleifend vitae.”
                            </p>
                            <span>
                                Jhon Doe
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section Contact -->
@endsection