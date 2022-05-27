@extends('frontend.layouts.default')

@section('content')
<!-- Section Main -->
<section id="breadcrumb" data-background="{{ Voyager::image(setting('site.breadcrumb'))}}" class="parallax-window">
    <div>
        <span class="section-suptitle text-center">Food Lover</span>
        <h1 class="section-title white-font text-center">Liên Hệ</h1>
        <ul>
            <li><a href="#">Trang Chủ</a></li>
            <li>Liên Hệ</li>
        </ul>
    </div>
</section>
<!-- End Section Main -->
<!-- Section Contact -->
<section id="contact-detail" class=" padd-100">
    <h2 class="section-title sep-type-2 text-center">Chi Tiết Liên Hệ</h2>
    <p class="section-resume">
        Mọi Chi Tiết Xin Liên Hệ Với Chúng Tôi Qua Số Điện Thoại Và Email Sau <br />
        <span>{{setting('site.phone')}}</span> & <a href="#">{{setting('site.email')}}</a>.
    </p>
    <div >
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3710.0224958382864!2d105.80419231437794!3d21.585044973931687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31352738b1bf08a3%3A0x515f4860ede9e108!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiAmIFRydXnhu4FuIHRow7RuZyBUaMOhaSBOZ3V5w6pu!5e0!3m2!1svi!2s!4v1653446314094!5m2!1svi!2s" width="1349" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="container padd-bottom-100 padd-top-120">
        <div class="row">
            <div class="col-sm-4">
                <div class="item-contact">
                    <i class="fa fa-phone"></i>
                    <b>Điện Thoại</b>
                    <p>{{setting('site.phone')}}</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="item-contact">
                    <i class="fa fa-map-marker"></i>
                    <b>Địa Chỉ</b>
                    <p>
                       {{setting('site.location')
                    }}
                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="item-contact">
                    <i class="fa fa-envelope"></i>
                    <b>Email</b>
                    <p>
                        {{setting('site.email')}}
                    </p>
                </div>
            </div>
        </div>
    </div>
   
</section>
<!-- End Section Contact -->
@endsection