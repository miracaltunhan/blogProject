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
    <title>Revolve - Personal Magazine blog Template</title>
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
                    <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="ti-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="ti-linkedin"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="ti-pinterest"></i></a></li>
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
                            <li class="nav-item"><a href="{{ url('/blog') }}" class="nav-link">Blogs</a></li>
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
                            <li class="nav-item" style="margin-left: auto; margin-left: 30px; list-style: none;">
                                <a href="{{ url('/login') }}" class="nav-link">Login</a>
                            </li>
                            <li class="nav-item" style="margin-left: auto; margin-left: -20px; list-style: none;">
                                <a href="{{ url('/register') }}" class="nav-link">Register</a>
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
<!--search overlay start-->
<div class="search-wrap">
    <div class="overlay">
        <form action="#" class="search-form">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-9">
                        <input type="text" class="form-control" placeholder="Search..."/>
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

<div class="breadcrumb-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <h2 class="lg-title">Blogs</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4 text-center">
                <!-- Beğeniye Göre Sırala Butonu -->
                <a href="{{ route('blogs.sortByLikes') }}" class="btn btn-primary">
                    Beğeniye Göre Sırala
                </a>
            </div>

            @if($blogs->isEmpty())
                <div class="col-12">
                    <p class="text-center">Henüz blog yok.</p>
                </div>
            @else
                @foreach($blogs as $blog)
                    <div class="col-lg-6 col-md-6 mb-4">
                        <article class="post-grid">
                            <div class="post-thumb mb-4">
                                <!-- Blog Görseli -->
                                <img src="{{ asset('storage/' . $blog->image) }}"
                                     alt="{{ $blog->title }}"
                                     class="img-fluid w-100"
                                     style="height: 300px; object-fit: cover;">
                            </div>

                            <!-- Kategori Adı ve Alt Kategorileri -->
                            <span class="cat-name text-color font-extra text-sm text-uppercase letter-spacing-1 d-block mb-2">
    @if($blog->category)
                                    <!-- Üst Kategori -->
                                    @if($blog->category->parentCategory)
                                        {{ $blog->category->parentCategory->name }} /
                                    @endif
                                    <!-- Alt Kategori -->
                                    {{ $blog->category->name }}

                                    @if($blog->category->subCategories->isNotEmpty())
                                        /
                                        @foreach($blog->category->subCategories as $subcategory)
                                            {{ $subcategory->name }}@if (!$loop->last), @endif
                                        @endforeach
                                    @endif
                                @else
                                    Kategori Belirtilmemiş
                                @endif
</span>


                            <!-- Blog Başlığı -->
                            <h3 class="post-title mt-1 mb-3">
                                <a href="{{ route('blog.single', $blog->id) }}" class="text-dark">
                                    {{ $blog->title }}
                                </a>
                            </h3>

                            <!-- Oluşturulma Tarihi -->
                            <span class="text-muted text-capitalize d-block mb-2">
                                {{ $blog->created_at->format('F j, Y') }}
                            </span>

                            <!-- Beğeni Sayısı -->
                            <p class="text-muted">
                                Beğeni Sayısı: {{ $blog->likes_count }}
                            </p>
                        </article>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>


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
            <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                <div class="sidebar sidebar-right">
                    <div class="sidebar-wrap mt-5 mt-lg-0">

                        <div class="sidebar-widget follow mb-5 text-center">
                            <h4 class="text-center widget-title">Follow Me</h4>
                            <div class="follow-socials">
                                <a href="#"><i class="ti-facebook"></i></a>
                                <a href="#" ><i class="ti-twitter"></i></a>
                                <a href="#" ><i class="ti-instagram"></i></a>
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
                                    <h4 ><a href="blog-single.html">Meeting With Clarissa, Founder Of Purple Conversation App</a></h4>
                                </div>
                            </div>

                            <div class="media border-bottom py-3 sidebar-post-item">
                                <a href="#"><img class="mr-4" src="{{asset('adminPanel/images/news/thumb-1.jpg')}}" alt=""></a>
                                <div class="media-body">
                                    <span class="text-muted letter-spacing text-uppercase font-sm">September 10, 2019</span>
                                    <h4 ><a href="blog-single.html">Thoughtful living in los Angeles</a></h4>
                                </div>
                            </div>

                            <div class="media py-3 sidebar-post-item">
                                <a href="#"><img class="mr-4" src="{{asset('adminPanel/images/news/thumb-2.jpg')}}" alt=""></a>
                                <div class="media-body">
                                    <span class="text-muted letter-spacing text-uppercase font-sm">September 10, 2019</span>
                                    <h4 ><a href="blog-single.html">Vivamus molestie gravida turpis.</a></h4>
                                </div>
                            </div>
                        </div>


                        <!--                  <div class="sidebar-widget category mb-5">
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
                                          </div> -->

                        <div class="sidebar-widget subscribe mb-5">
                            <h4 class="text-center widget-title">Newsletter</h4>
                            <input type="text" class="form-control" placeholder="Email Address">
                            <a href="#" class="btn btn-primary d-block mt-3">Sign Up</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--footer start-->
<footer class="footer-section bg-grey">
    <div class="instagram-photo-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="text-center">Follow in Instagram</h4>
                </div>
            </div>

            <div class="row no-gutters" id="instafeed">

            </div>
        </div>
    </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="mb-4">
                    <h2 class="footer-logo">Revolve.</h2>
                </div>
                <ul class="list-inline footer-socials">
                    <li class="list-inline-item"><a href="#"><i class="ti-facebook mr-2"></i>Facebook</a></li>
                    <li class="list-inline-item"><a href="#"><i class="ti-twitter mr-2"></i>Twitter</a></li>
                    <li class="list-inline-item"><a href="#"><i class="ti-linkedin mr-2"></i>Linkedin</a></li>
                    <li class="list-inline-item"><a href="#"><i class="ti-pinterest mr-2"></i>Pinterest</a></li>
                    <li class="list-inline-item"><a href="#"><i class="ti-github mr-2"></i>Github</a></li>
                    <li class="list-inline-item"><a href="#"><i class="ti-instagram mr-2"></i>Instrgram</a></li>
                    <li class="list-inline-item"><a href="#"><i class="ti-rss mr-2"></i>rss</a></li>
                </ul>
            </div>

        </div>
    </div>
</footer>
<!--footer end-->

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
