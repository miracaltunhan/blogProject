<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Miraç Blog</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Favicon-->
    <link rel="shortcut icon" href="{{asset('adminPanel/images/favicon.ico')}}" type="image/x-icon">

    <!-- THEME CSS
    ================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('adminPanel/plugins/bootstrap/css/bootstrap.min.css')}}">
    <!-- Themify -->
    <link rel="stylesheet" href="{{asset('adminPanel/plugins/themify/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('adminPanel/plugins/slick-carousel/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('adminPanel/plugins/slick-carousel/slick.css')}}">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{asset('adminPanel/plugins/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminPanel/plugins/owl-carousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('adminPanel/plugins/magnific-popup/magnific-popup.css')}}">
    <!-- manin stylesheet -->
    <link rel="stylesheet" href="{{asset('adminPanel/css/style.css')}}">
</head>

<body>


<header class="header-top bg-grey justify-content-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2 header-left col-md-4 col-7">
                <ul class="list-inline header-socials-2 mb-0 text-center">
                    <!-- Mesajlaşma Butonu -->
                    @if(Auth::check()) <!-- Kullanıcı giriş yapmış mı kontrol et -->
                    <a href="{{ route('messages.index') }}" class="btn btn-primary">Messages</a>
                    @endif


                    <li class="list-inline-item">
                        <div class="search_toggle mobile-search d-md-block d-lg-none "><i class="ti-search "></i></div>


                    </li>
                </ul>
            </div>

            <div class="col-lg-8 text-center col-md-8 col-5">
                <nav class="navbar navbar-expand-lg navigation">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent"
                            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="ti-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarContent">
                        <ul id="menu" class="menu navbar-nav mx-auto ">
                            <li class="nav-item"><a href="{{ url('/home') }}" class="nav-link" style="margin-left: -60px;">Home</a></li>



                            <!--    <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    Home
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/home') }}">Home</a>

                                    <a class="dropdown-item" href="{{ url('/anno') }}">Announcements</a>
                                    <a class="dropdown-item" href="{{ url('/contact') }}">Contact</a>
                                    <a class="dropdown-item" href="{{ url('/news') }}">News</a>
                                    <a class="dropdown-item" href="{{ url('/writers') }}">Writers</a>
                                </div>
                            </li>
                             <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    Blog
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                    <a class="dropdown-item" href="standard-fullwidth.html">Travel</a>
                                    <a class="dropdown-item" href="standard-left-sidebar.html">Technology</a>
                                    <a class="dropdown-item" href="standard-right-sidebar.html">Lifestyle</a>
                                </div>
                            </li> -->
                            <li class="nav-item"><a href="{{ url('/blogs') }}" class="nav-link">Blogs</a></li>
                            <li class="nav-item"><a href="{{ url('/news') }}" class="nav-link">News</a></li>
                            <li class="nav-item"><a href="{{ url('/anno') }}" class="nav-link">Announcements</a></li>
                            <li class="nav-item"><a href="{{ url('/writers') }}" class="nav-link">Writers</a></li>
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">
                                    Writers
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                                    <a class="dropdown-item" href="post-video.html">Video Formats</a>
                                    <a class="dropdown-item" href="post-audio.html">Audio Format</a>
                                    <a class="dropdown-item" href="post-link.html">Quote Format</a>
                                    <a class="dropdown-item" href="post-gallery.html">Gallery Format</a>
                                    <a class="dropdown-item" href="post-image.html">Image Format</a>
                                </div>
                            </li> -->
                            <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact</a></li>

                            <!-- Kullanıcı giriş yapmamışsa göster -->
                            @guest
                                <li class="nav-item" style="margin-left: auto; margin-left: 30px; list-style: none;">
                                    <a href="{{ url('/login') }}" class="nav-link">Login</a>
                                </li>
                                <li class="nav-item" style="margin-left: auto; margin-left: -20px; list-style: none;">
                                    <a href="{{ url('/register') }}" class="nav-link">Register</a>
                                </li>
                            @endguest

                            <!-- Kullanıcı giriş yapmışsa göster -->
                            @auth
                                <li class="nav-item" style="margin-left: auto; list-style: none;">
                                    <a href="{{ url('/logout') }}" class="nav-link">Logout</a>
                                </li>
                                @endauth

                                </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="col-lg-2">
                <div class="text-right search">
                    <div class="search_toggle d-none d-lg-block"><i class="ti-search"></i></div>
                </div>
            </div>
        </div>
    </div>
</header>


<div class="header-logo py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">

            </div>
        </div>
    </div>
</div>


<!--search overlay start-->
<div class="search-wrap">
    <div class="overlay">
        <form action="#" class="search-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-9">
                        <input type="text" class="form-control" placeholder="Search..." />
                    </div>
                    <div class="col-md-2 col-3 text-right">
                        <div class="search_toggle toggle-wrap d-inline-block">
                            <i class="ti-close"></i>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!--search overlay end-->

<section class="banner">
    <div class="container">
        <div class="banner-img">
            <a href="blog-single.html"><img src="{{asset('adminPanel/images/fashion/bg-banner-2.jpg')}}" alt="" class="img-fluid w-100"></a>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content text-center">
                    <div class="meta-cat">
                        <span class="text-capitalize letter-spacing-1 cat-name font-extra text-color">Travel</span>
                    </div>
                    <div class="post-title">
                        <h2><a href="blog-single.html">New summer hotspot in day life</a></h2>
                    </div>

                    <div class="post-meta footer-meta">
                        <ul class="list-inline">
                            <li class="post-like list-inline-item">
                                <span class="count">197</span> Likes
                            </li>
                            <li class="post-read list-inline-item">2 mins read</li>
                            <li class="post-view list-inline-item">189 Views</li>
                        </ul>
                    </div>
                    <div class="post-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Magnam nesciunt architecto quaerat
                            necessitatibus tenetur ratione eius numquam!</p>
                        <a href="blog-single.html" class="btn btn-grey mt-3"> read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<section class="section-padding pt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">

                <article class="post-list mb-5 pb-4 border-bottom">
                    <a class="post-thumb mb-3 d-block" href="blog-single.html">
                        <img src="{{asset('adminPanel/images/fashion/bg-fashion.jpg')}}" alt="" class="img-fluid w-100">
                    </a>
                    <div class="meta-cat">
                        <span class="letter-spacing cat-name font-extra text-uppercase font-sm">Experience</span>
                    </div>
                    <h3 class="post-title mt-2"><a href="blog-single.html">A guide to Duxton Hill</a></h3>

                    <div class="post-meta footer-meta">
                        <ul class="list-inline">
                            <li class="post-like list-inline-item">
                                <span class="font-sm letter-spacing-1 text-uppercase"><i class="ti-time mr-2"></i>2 min read</span>
                            </li>
                            <li class="post-view list-inline-item letter-spacing-1">189 Views</li>
                        </ul>
                    </div>
                    <div class="post-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Magnam nesciunt architecto quaerat
                            necessitatibus tenetur ratione eius numquam! elit. Earum in doloremque, odit quas repellat voluptatum
                            illo nulla ullam sunt, enim animi eaque dolorem possimus saepe! Fuga voluptas sapiente, nemo sit.</p>

                    </div>
                </article>



                <div class="mb-4 post-list border-bottom pb-4">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <a class="post-thumb " href="blog-single.html">
                                <img src="{{asset('adminPanel/images/fashion/img-1.jpg')}}" alt="" class="img-fluid w-100">
                            </a>
                        </div>

                        <div class="col-md-7">
                            <div class="post-article mt-sm-3">
                                <div class="meta-cat">
                                    <span class="letter-spacing cat-name font-extra text-uppercase font-sm">Explore</span>
                                </div>
                                <h3 class="post-title mt-2"><a href="blog-single.html">Launch a New space</a></h3>

                                <div class="post-meta">
                                    <ul class="list-inline">
                                        <li class="post-like list-inline-item">
												<span class="font-sm letter-spacing-1 text-uppercase"><i class="ti-time mr-2"></i>3 min
													read</span>
                                        </li>
                                        <li class="post-view list-inline-item letter-spacing-1">259 Views</li>
                                    </ul>
                                </div>
                                <div class="post-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Magnam nesciunt architecto quaerat
                                        necessitatibus tenetur ratione eius numquam!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-4 post-list border-bottom pb-4">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <a class="post-thumb" href="blog-single.html">
                                <img src="{{asset('adminPanel/images/fashion/img-2.jpg')}}" alt="" class="img-fluid w-100">
                            </a>
                        </div>

                        <div class="col-md-7">
                            <div class="post-article mt-sm-3">
                                <div class="meta-cat">
                                    <span class="letter-spacing cat-name font-extra text-uppercase font-sm">lifestyle</span>
                                </div>
                                <h3 class="post-title mt-2"><a href="blog-single.html">Bahamas morning</a></h3>

                                <div class="post-meta">
                                    <ul class="list-inline">
                                        <li class="post-like list-inline-item">
												<span class="font-sm letter-spacing-1 text-uppercase"><i class="ti-time mr-2"></i>2 min
													read</span>
                                        </li>
                                        <li class="post-view list-inline-item letter-spacing-1">320 Views</li>
                                    </ul>
                                </div>
                                <div class="post-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Magnam nesciunt architecto quaerat
                                        necessitatibus tenetur ratione eius numquam!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="mb-4 post-list border-bottom pb-4">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <a class="post-thumb" href="blog-single.html">
                                <img src="{{asset('adminPanel/images/fashion/img-3.jpg')}}" alt="" class="img-fluid w-100">
                            </a>
                        </div>

                        <div class="col-md-7">
                            <div class="post-article mt-sm-3">
                                <div class="meta-cat">
                                    <span class="letter-spacing cat-name font-extra text-uppercase font-sm">Travel</span>
                                </div>
                                <h3 class="post-title mt-2"><a href="blog-single.html">New summer hotspot</a></h3>

                                <div class="post-meta">
                                    <ul class="list-inline">
                                        <li class="post-like list-inline-item">
												<span class="font-sm  letter-spacing-1 text-uppercase"><i class="ti-time mr-2"></i>5 min
													read</span>
                                        </li>
                                        <li class="post-view list-inline-item letter-spacing-1">380 Views</li>
                                    </ul>
                                </div>
                                <div class="post-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Magnam nesciunt architecto quaerat
                                        necessitatibus tenetur ratione eius numquam!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-4 post-list border-bottom pb-4">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <a class="post-thumb" href="blog-single.html">
                                <img src="{{asset('adminPanel/images/fashion/img-4.jpg')}}" alt="" class="img-fluid w-100">
                            </a>
                        </div>

                        <div class="col-md-7">
                            <div class="post-article mt-sm-3">
                                <div class="meta-cat">
                                    <span class="letter-spacing cat-name font-extra text-uppercase font-sm">Weekends</span>
                                </div>
                                <h3 class="post-title mt-2"><a href="blog-single.html">One Week Itinerary</a></h3>

                                <div class="post-meta">
                                    <ul class="list-inline">
                                        <li class="post-like list-inline-item">
												<span class="font-sm letter-spacing-1 text-uppercase"><i class="ti-time mr-2"></i>4 min
													read</span>
                                        </li>
                                        <li class="post-view list-inline-item letter-spacing-1">89 Views</li>
                                    </ul>
                                </div>
                                <div class="post-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Magnam nesciunt architecto quaerat
                                        necessitatibus tenetur ratione eius numquam!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="mb-4 post-list border-bottom pb-4">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <a class="post-thumb" href="blog-single.html">
                                <img src="{{asset('adminPanel/images/fashion/img-5.jpg')}}" alt="" class="img-fluid w-100">
                            </a>
                        </div>

                        <div class="col-md-7">
                            <div class="post-article mt-sm-3">
                                <div class="meta-cat">
                                    <span class="letter-spacing cat-name font-extra text-uppercase font-sm">lifestyle</span>
                                </div>
                                <h3 class="post-title mt-2"><a href="blog-single.html">Start Living Today</a></h3>

                                <div class="post-meta">
                                    <ul class="list-inline">
                                        <li class="post-like list-inline-item">
												<span class="font-sm letter-spacing-1 text-uppercase"><i class="ti-time mr-2"></i>2 min
													read</span>
                                        </li>
                                        <li class="post-view list-inline-item letter-spacing-1">572 Views</li>
                                    </ul>
                                </div>
                                <div class="post-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Magnam nesciunt architecto quaerat
                                        necessitatibus tenetur ratione eius numquam!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-4 post-list border-bottom pb-4">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <a class="post-thumb" href="blog-single.html">
                                <img src="{{asset('adminPanel/images/fashion/img-6.jpg')}}" alt="" class="img-fluid w-100">
                            </a>
                        </div>

                        <div class="col-md-7">
                            <div class="post-article mt-sm-3">
                                <div class="meta-cat">
                                    <span class="letter-spacing cat-name font-extra text-uppercase font-sm">Travel</span>
                                </div>
                                <h3 class="post-title mt-2"><a href="blog-single.html">Hint of Spring</a></h3>

                                <div class="post-meta">
                                    <ul class="list-inline">
                                        <li class="post-like list-inline-item">
												<span class="font-sm letter-spacing-1 text-uppercase"><i class="ti-time mr-2"></i>3 min
													read</span>
                                        </li>
                                        <li class="post-view list-inline-item letter-spacing-1">209 Views</li>
                                    </ul>
                                </div>
                                <div class="post-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Magnam nesciunt architecto quaerat
                                        necessitatibus tenetur ratione eius numquam!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="pagination mt-5 pt-4">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#" class="active">1</a></li>
                        <li class="list-inline-item"><a href="#">2</a></li>
                        <li class="list-inline-item"><a href="#">3</a></li>
                        <li class="list-inline-item"><a href="#" class="prev-posts"><i class="ti-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-12 col-xs-12">
                <div class="sidebar sidebar-right">
                    <div class="sidebar-wrap mt-5 mt-lg-0">


                        <div class="sidebar-widget follow mb-5 text-center">
                            <h4 class="text-center widget-title">Follow Me</h4>
                            <div class="follow-socials">
                                <a href="#"><i class="ti-facebook"></i></a>
                                <a href="#"><i class="ti-twitter"></i></a>
                                <a href="#"><i class="ti-instagram"></i></a>
                                <a href="#"><i class="ti-youtube"></i></a>
                                <a href="#"><i class="ti-pinterest"></i></a>
                            </div>
                        </div>

                        <div class="sidebar-widget mb-5 ">
                            <h4 class="text-center widget-title">Trending Blogs</h4>

                            <div class="sidebar-post-item-big">
                                <a href="blog-single.html"><img src="{{asset('adminPanel/images/news/img-1.jpg')}}" alt="" class="img-fluid"></a>
                                <div class="mt-3 media-body">
                                    <span class="text-muted letter-spacing text-uppercase font-sm">September 10, 2019</span>
                                    <h4><a href="blog-single.html">Meeting With Clarissa, Founder Of Purple Conversation App</a></h4>
                                </div>
                            </div>

                            <div class="media border-bottom py-3 sidebar-post-item">
                                <a href="#"><img class="mr-4" src="{{asset('adminPanel/images/news/thumb-1.jpg')}}" alt=""></a>
                                <div class="media-body">
                                    <span class="text-muted letter-spacing text-uppercase font-sm">September 10, 2019</span>
                                    <h4><a href="blog-single.html">Thoughtful living in los Angeles</a></h4>
                                </div>
                            </div>

                            <div class="media py-3 sidebar-post-item">
                                <a href="#"><img class="mr-4" src="{{asset('adminPanel/images/news/thumb-2.jpg')}}" alt=""></a>
                                <div class="media-body">
                                    <span class="text-muted letter-spacing text-uppercase font-sm">September 10, 2019</span>
                                    <h4><a href="blog-single.html">Vivamus molestie gravida turpis.</a></h4>
                                </div>
                            </div>
                        </div>

                        <!--
                        <div class="sidebar-widget category mb-5">
                            <h4 class="text-center widget-title">Catgeories</h4>
                            <ul class="list-unstyled">
                                <li class="align-items-center d-flex justify-content-between">
                                    <a href="#">Innovation</a>
                                    <span>14</span>
                                </li>
                                <li class="align-items-center d-flex justify-content-between">
                                    <a href="#">Software</a>
                                    <span>2</span>
                                </li>
                                <li class="align-items-center d-flex justify-content-between">
                                    <a href="#">Social</a>
                                    <span>10</span>
                                </li>
                                <li class="align-items-center d-flex justify-content-between">
                                    <a href="#">Trends</a>
                                    <span>5</span>
                                </li>
                            </ul>
                        </div>

                        -->

                        <div class="sidebar-widget subscribe mb-5">
                            <h4 class="text-center widget-title">Newsletter</h4>
                            <input type="text" class="form-control" placeholder="Email Address">
                            <a href="#" class="btn btn-primary d-block mt-3">Sign Up</a>
                        </div>

                        <div class="sidebar-widget sidebar-adv mb-5">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="footer-2 section-padding gray-bg pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <!--     <div class="widget footer-widget mb-5 mb-lg-0">
                    <h5 class="widget-title text-uppercase letter-spacing-2 mb-4">About me</h5>
                    <img src="{{asset('adminPanel/images/about.jpg')}}" alt="" class="img-fluid">
                    <p class="mt-4">It is the best selling Blog & Magazine html Theme of this year on Themefisher.</p>
                </div> -->
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="widget footer-widget mb-5 mb-lg-0">
                    <h5 class="widget-title text-uppercase letter-spacing-2 mb-4">Trending</h5>

                    <div class="media pb-3 sidebar-post-item">
                        <a href="#"><img class="mr-4" src="{{asset('adminPanel/images/news/thumb-1.jpg')}}" alt=""></a>
                        <div class="media-body">
                            <span class="text-uppercase font-sm font-extra letter-spacing"> Travel</span>
                            <h4 class="mt-1"><a href="blog-single.html">Thoughtful living in los Angeles</a></h4>
                        </div>
                    </div>

                    <div class="media py-3 sidebar-post-item">
                        <a href="#"><img class="mr-4" src="{{asset('adminPanel/images/news/thumb-2.jpg')}}" alt=""></a>
                        <div class="media-body">
                            <span class="text-uppercase font-sm font-extra letter-spacing"> Travel</span>
                            <h4 class="mt-1"><a href="blog-single.html">Vivamus molestie gravida turpis.</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="widget footer-widget">
                    <h5 class="widget-title text-uppercase letter-spacing-2 mb-4">Gallery</h5>

                    <div class="row no-gutters">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-6">
                            <a href="#"><img class="img-fluid" src="{{asset('adminPanel/images/f1.jpg')}}" alt="" /></a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6  col-6">
                            <a href="#"><img class="img-fluid" src="{{asset('adminPanel/images/f2.jpg')}}" alt="" /></a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6  col-6">
                            <a href="#"><img class="img-fluid" src="{{asset('adminPanel/images/f3.jpg')}}" alt="" /></a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6  col-6">
                            <a href="#"><img class="img-fluid" src="{{asset('adminPanel/images/f4.jpg')}}" alt="" /></a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6  col-6">
                            <a href="#"><img class="img-fluid" src="{{asset('adminPanel/images/f2.jpg')}}" alt="" /></a>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6  col-6">
                            <a href="#"><img class="img-fluid" src="{{asset('adminPanel/images/f3.jpg')}}" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-btm mt-5 pt-4 border-top">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline footer-socials-2 text-center">
                        <li class="list-inline-item"><a href="#">Privacy policy</a></li>
                        <li class="list-inline-item"><a href="#">Support</a></li>
                        <!--       <li class="list-inline-item"><a href="#">About</a></li>
                               <li class="list-inline-item"><a href="#">Contact</a></li>
                               <li class="list-inline-item"><a href="#">Terms</a></li>
                               <li class="list-inline-item"><a href="#">Category</a></li>   -->
                    </ul>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">

                </div>
            </div>
        </div>
    </div>
</section>


<!-- THEME JAVASCRIPT FILES
================================================== -->
<!-- initialize jQuery Library -->
<script src="{{asset('adminPanel/plugins/jquery/jquery.js')}}"></script>
<!-- Bootstrap jQuery -->
<script src="{{asset('adminPanel/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('adminPanel/plugins/bootstrap/js/popper.min.js')}}"></script>
<!-- Owl caeousel -->
<script src="{{asset('adminPanel/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('adminPanel/plugins/slick-carousel/slick.min.js')}}"></script>
<script src="{{asset('adminPanel/plugins/magnific-popup/magnific-popup.js')}}"></script>
<!-- Instagram Feed Js -->
<script src="{{asset('adminPanel/plugins/instafeed-js/instafeed.min.js')}}"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="{{asset('adminPanel/plugins/google-map/gmap.js')}}"></script>
<!-- main js -->
<script src="{{asset('adminPanel/js/custom.js')}}"></script>


</body>

</html>
