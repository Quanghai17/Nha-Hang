<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="{{ $pageMeta['meta_description'] ?? setting('site.description') }}" />
    <meta name="content" content="{{ $pageMeta['meta_content'] ?? setting('site.content') }}" />

    <title>{{ $pageMeta['title'] ?? setting('site.title') }}</title>

    <link rel="shortcut icon" href="{{ \TCG\Voyager\Facades\Voyager::image(setting('site.logo')) }}" type="image/png">

    <meta property="og:image"
        content="{{ \TCG\Voyager\Facades\Voyager::image($pageMeta['image'] ?? setting('site.logo')) }}" />
    <meta property="og:url" content="{{ \Request::fullUrl() }}" />
    <meta property="og:type" content="Website" />
    <meta property="og:title" content="{{ $pageMeta['title'] ?? setting('site.title') }}" />
    <meta property="og:description" content="{{ $pageMeta['meta_description'] ?? setting('site.description') }}" />
    <meta property="og:content" content="{{ $pageMeta['meta_content'] ?? setting('site.content') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- GOOGLE WEB FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <!-- END OF GOOGLE WEB FONTS -->
    <link rel="shortcut icon" type="image/x-icon"
        href='{{ \TCG\Voyager\Facades\Voyager::image(setting('site.favicon')) }}'>

    <!-- all css here -->

    <!-- GOOGLE WEB FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <!-- END OF GOOGLE WEB FONTS -->

    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:400,700,300" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Architects+Daughter" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" />
    <!-- End Google Fonts -->

    <!-- Contribute CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}" />
    <!-- Contribute End CSS Files -->

    <!-- Custom CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />
    <!-- Custom CSS Files -->
    <!-- hostline zalo, facebook -->
    <link href='{{ asset('assets/css/custom.css') }}' rel='stylesheet' type='text/css' media='all' />

    <style>
        #layout-page-main img {
            width: 100%;
            height: auto;
        }

        * {
            font-family: Arial, Helvetica, sans-serif;
        }

    </style>
    @yield('style')

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JY7GDVCWWB"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-JY7GDVCWWB');
    </script>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Website",
            "title": "{{ $pageMeta['title'] ?? setting('site.title') }}",
            "description": "{{ $pageMeta['meta_description'] ?? setting('site.description') }}",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "{{ setting('site.address') }}"
            },
            "telephone": "{{ setting('site.phone') }}",
            "email": "{{ setting('site.email') }}"
        }
    </script>
</head>

<body>

    <!-- Loader Bloc -->
    <div class="site-loader">
        <div class="loading"></div>
    </div>
    <!-- End Loader Bloc -->
    <div id="site-wrapper">

        @include('frontend.layouts.partials.header')

        @yield('content')

        @include('frontend.layouts.partials.footer')

        <div class="hotline-phone-ring-wrap float-icon-hotline">
            <ul class="left-icon hotline">
                <div class="hotline-phone-ring">
                    <div class="hotline-phone-ring-circle"></div>
                    <div class="hotline-phone-ring-circle-fill"></div>
                    <div class="hotline-phone-ring-img-circle"><a href="tel:{{ setting('site.phone') }}"
                            class="pps-btn-img">
                            <img src="https://netweb.vn/img/hotline/icon.png" alt="so dien thoai" width="50"
                                loading="lazy">
                        </a></div>
                </div>
                <div class="hotline-bar">
                    <a class="text-hotline" href="tel:{{ setting('site.phone') }}">
                        {{ setting('site.phone') }}
                    </a>
                </div>
                </li>
            </ul>
        </div>


        <!-- JAVASCRIPT FILES -->

        <!-- Contribute JS Files -->
        <script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>
        <script type="text/javascript" src="{{ asset('assets/js/egprojets.lib.js') }}"></script>
        <!-- End Contribute JS Files -->

        <!-- Custom JS Files -->
        <script type="text/javascript" src="{{ asset('assets/js/egprojets.custom.js') }}"></script>
        <!-- Custom JS Files -->
        <!-- main js -->
        {{-- <script src='{{ asset('assets/js/main.js') }}'></script> --}}

        <script>
            $(function() {
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 100) $('.scroll-top').fadeIn();
                    else $('.scroll-top').fadeOut();
                });
                $('.scroll-top').click(function() {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 'slow');
                });
            });
        </script>
        <!-- end JAVASCRIPT scroll-top -->
        <script>
            $('.count').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 1000,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });
            });
        </script>
        <script>
            // Instantiate the Bootstrap carousel
            $('.multi-item-carousel').carousel({
                interval: false
            });

            // for every slide in carousel, copy the next slide's item in the slide.
            // Do the same for the next, next item.
            $('.multi-item-carousel .item').each(function() {
                var next = $(this).next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));

                if (next.next().length > 0) {
                    next.next().children(':first-child').clone().appendTo($(this));
                } else {
                    $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
                }
            });
        </script>
        <!-- END OF JAVASCRIPT FILES -->

        
        @yield('js')
    </div>
</body>

</html>
