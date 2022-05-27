<!-- Header -->
@php
// $menuFields= App\Staticdata::where(['type' => 'linh-vuc-hoat-dong', 'status' => 'ACTIVE'])->get();
$menu = menu('Home menu', '_json');
@endphp
<header id="site-header">
    <div class="nav-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul>
                        <li><i class="fa fa-envira"></i>Open hour {{ setting('site.time') }}</li>
                        <li><i class="fa fa-phone"></i>{{ setting('site.phone') }}</li>
                        <li><a href="#"><i class="fa fa-envelope"></i>{{ setting('site.email') }}</a></li>
                        <li class="social-bloc">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar" role="navigation">
        <div class="container">
            <div class="row">
                <h1 class="sr-only">Food Lover</h1>
                <a href="./" title="FoodLover" class="logo">
                    <img src="{{ \TCG\Voyager\Facades\Voyager::image(setting('site.logo')) }}" alt="" width="170">
                </a>
                <button data-target=".navbar-collapse" data-toggle="collapse" type="button"
                    class="menu-mobile visible-xs">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <ul class="nav navbar-nav navbar-collapse collapse">
                    {{-- <li><a class="active" href="index.html">Home</a></li>
                    <li><a href="about-us.html">about us</a></li>
                    <li><a href="menu.html">menu</a></li>
                    <li><a href="reservation.html">reservation</a></li>
                    <li><a href="blog.html">blog</a></li>
                    <li><a href="contact-us.html">contact us</a></li> --}}
                    @foreach ($menu as $item)
                        @if (count($item->children) > 0)
                            <li class="">
                                <a href="{{ asset($item->url) }}" class="active" 
                                    >{{ $item->title }}</a>

                                <ul class="sub-menu">
                                    @foreach ($item->children as $child)
                                        <li>
                                            <a href="{{ asset($child->url) }}">{{ $child->title }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @else
                            <li class="@if ($item->url == '/' . Route::current()->uri) active @endif">
                                <a href="{{ asset($item->url) }}">{{ $item->title }}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- End Header -->
