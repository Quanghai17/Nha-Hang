@extends('frontend.layouts.default')

@section('content')
<!-- Section Main -->
<section id="breadcrumb" data-background="{{ Voyager::image(setting('site.breadcrumb'))}}" class="parallax-window">
    <div>
        <span class="section-suptitle text-center">Food Lover</span>
        <h1 class="section-title white-font text-center">Giới Thiệu</h1>
        <ul>
            <li><a href="#">Trang Chủ</a></li>
            <li>Giới Thiệu</li>
        </ul>
    </div>
</section>
<!-- End Section Main -->
<!-- Section Story -->
{{-- @dd($page); --}}
<section id="our-story">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="story-description">
                    <span class="section-suptitle">Giới Thiệu</span>
                    <h2 class="section-title">{{$page->excerpt}}</h2>
                    <p>
                       {!!$page->body!!}
                    </p>	
                    <a href="#" class="btn-food">book now</a>
                </div>
            </div>
            <div class="col-sm-6">
                <img src="{{ Voyager::image($page->image) }}" alt="" class="img-responsive img-story">
            </div>
        </div>
    </div>
</section>
<!-- End Section Story -->
<!-- Section Services -->
<section id="services" class="padd-100 gray-bg">
    <span class="section-suptitle text-center">Food Lover</span>
    <h2 class="section-title sep-type-2 text-center">Best Services</h2>
    <p class="section-resume">
        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
    </p>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 service-item">
                <i class="flaticon-food"></i>
                <div>
                    <h4>Best Dishes</h4>
                    <p>Lorem ipsum dolor sit amet, tetur Vesti bulum vel ipsum ullarper as This is Photoshop's version.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 service-item">
                <i class="flaticon-cup"></i>
                <div>
                    <h4>Premium Cafe</h4>
                    <p>Lorem ipsum dolor sit amet, tetur Vesti bulum vel ipsum ullarper as This is Photoshop's version.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 service-item">
                <i class="flaticon-drink"></i>
                <div>
                    <h4>Drinks & Soda</h4>
                    <p>Lorem ipsum dolor sit amet, tetur Vesti bulum vel ipsum ullarper as This is Photoshop's version.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 service-item">
                <i class="flaticon-notes"></i>
                <div>
                    <h4>Reservation</h4>
                    <p>Lorem ipsum dolor sit amet, tetur Vesti bulum vel ipsum ullarper as This is Photoshop's version.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 service-item">
                <i class="flaticon-fork-and-knife-in-cross"></i>
                <div>
                    <h4>Custom Dishes</h4>
                    <p>Lorem ipsum dolor sit amet, tetur Vesti bulum vel ipsum ullarper as This is Photoshop's version.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 service-item">
                <i class="flaticon-percentage"></i>
                <div>
                    <h4>Special Offers</h4>
                    <p>Lorem ipsum dolor sit amet, tetur Vesti bulum vel ipsum ullarper as This is Photoshop's version.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Section Services -->
<!-- Section Gallery -->
<section id="gallery" class="padd-100 ">
    <span class="section-suptitle text-center">Food Lover</span>
    <h2 class="section-title sep-type-2 text-center">Restaurant Gallery</h2>
    <p class="section-resume">
        This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit.
    </p>
    <div class="container">
        <div class="row">
            <div class="restaurant-list">
                <div class="grid-sizer col-sm-6 col-md-4"></div>
                <div class="col-sm-6 col-md-4 grid-item">
                    <a href="assets/img/demo/story/02_large.jpg" data-fancybox-group="gallery" class="fancybox"><img src="assets/img/demo/story/02.jpg" alt=""></a>
                </div>
                <div class="col-sm-6 col-md-4 grid-item">
                    <a href="assets/img/demo/story/04_large.jpg" data-fancybox-group="gallery" class="fancybox"><img src="assets/img/demo/story/04.jpg" alt=""></a>
                </div>
                <div class="col-sm-6 col-md-4 grid-item">
                    <a href="assets/img/demo/story/03_large.jpg" data-fancybox-group="gallery" class="fancybox"><img src="assets/img/demo/story/03.jpg" alt=""></a>
                </div>
                <div class="col-sm-6 col-md-4 grid-item">
                    <a href="assets/img/demo/story/05_large.jpg" data-fancybox-group="gallery" class="fancybox"><img src="assets/img/demo/story/05.jpg" alt=""></a>
                </div>
                <div class="col-sm-6 col-md-4 grid-item">
                    <a href="assets/img/demo/story/06_large.jpg" data-fancybox-group="gallery" class="fancybox"><img src="assets/img/demo/story/06.jpg" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    <p class="text-center btn-load"><a href="#" class="btn-food">Load more</a></p>
</section>
<!-- End Section Gallery --
@endsection