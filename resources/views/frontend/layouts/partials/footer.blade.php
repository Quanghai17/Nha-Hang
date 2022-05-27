<!-- Footer -->
<footer id="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="bloc-cms">
                    <img src="{{ \TCG\Voyager\Facades\Voyager::image(setting('site.logo')) }}" alt="">
                    <p>
                        Đến với chúng tôi để thưởng thức những món ngon lạ mắt
                    </p>
                    <a href="#">Read More</a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="open-hours">
                    <span class="foot-title">Giờ Mở Cửa</span>
                    <p><span>Thứ 2 :</span> {{ setting('site.time') }}</p>
                    <p><span>Thứ 3 - 6 : </span>................. {{ setting('site.time') }}</p>
                    <p><span>Thứ 7 : </span>.............. {{ setting('site.time') }}</p>
                    <p><span>Chủ Nhật  : </span>.................. {{ setting('site.time') }}</p>
                </div>
            </div>
            <div class="col-md-3 hidden-sm hidden-xs">
                <div class="last-tweet">
                    <span class="foot-title">Chỉ Đường</span>
                    <div class="item-tweet">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3710.0224958382864!2d105.80419231437794!3d21.585044973931687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31352738b1bf08a3%3A0x515f4860ede9e108!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBDw7RuZyBuZ2jhu4cgVGjDtG5nIHRpbiAmIFRydXnhu4FuIHRow7RuZyBUaMOhaSBOZ3V5w6pu!5e0!3m2!1svi!2s!4v1653464778365!5m2!1svi!2s" width="280" height="180" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>
            </div>
            <div class="col-md-3 hidden-sm hidden-xs">
                <div class="instagram">
                    <span class="foot-title">Instragram</span>
                    <a href="#">
                        <img src="{{ asset('assets/img/demo/instagram/01.jpg') }}" alt="">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#">
                        <img src="{{ asset('assets/img/demo/instagram/01.jpg') }}" alt="">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#">
                        <img src="{{ asset('assets/img/demo/instagram/02.jpg') }}" alt="">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#">
                        <img src="{{ asset('assets/img/demo/instagram/03.jpg') }}" alt="">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#">
                        <img src="{{ asset('assets/img/demo/instagram/04.jpg') }}" alt="">
                        <i class="fa fa-instagram"></i>
                    </a>
                    <a href="#">
                        <img src="{{ asset('assets/img/demo/instagram/05.jpg') }}" alt="">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <p>
            Thiết kế bởi Công ty Cổ phần Công Nghệ và Truyền thông số Kennatech
        </p>
        <a href="#">Top</a>
    </div>
</footer>
<!-- End Footer -->