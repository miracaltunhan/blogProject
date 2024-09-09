<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->


<!DOCTYPE html>
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

<section class="single-block-wrapper section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                <div class="single-post">
                    <div class="post-header mb-5 text-center">

                        <h2 class="post-title mt-2">
                            New System Enhancements
                        </h2>

                        <div class="post-meta">
                            <span class="text-uppercase font-sm letter-spacing-1 mr-3">by Liam</span>
                            <span class="text-uppercase font-sm letter-spacing-1">January 17,2019</span>
                        </div>
                        <div class="post-featured-image mt-5">
                            <img src="{{asset('adminPanel/images/fashion/bg-banner.jpg')}}" class="img-fluid w-100" alt="featured-image">
                        </div>
                    </div>
                    <div class="post-body">
                        <div class="entry-content">
                            <p>
                                </p>
                            <h2 class="mt-4 mb-3">My dear connections,</h2>
                            <p> As a company that closely follows the latest developments in technology, we have updated our systems to provide you with even better service. With these updates, your transactions will now be faster, more secure, and smoother.

                                Along with our renewed technological infrastructure, we have made significant changes to our website to enhance your user experience. We are constantly improving ourselves to deliver higher-quality services and bring you the latest technologies.

                                We thank you for your interest and trust. If you would like more information about our updates, please feel free to contact us.

                                Best regards.</p>

                            <!--                   <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <img src="{{asset('adminPanel/images/fashion/single-img1.png')}}" alt="post-ads"
                                         class="img-fluid mr-4 w-100">
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <img src="{{asset('adminPanel/images/fashion/single-img2.png')}}" alt="post-ads"
                                         class="img-fluid mr-4 w-100">
                                </div>





                        <div class="post-tags py-4">
                            <a href="#">#Health</a>
                            <a href="#">#Game</a>
                            <a href="#">#Tour</a>
                        </div>


                        <div
                            class="tags-share-box center-box d-flex text-center justify-content-between border-top border-bottom py-3">

                            <span class="single-comment-o"><i class="fa fa-comment-o"></i>0 comment</span>

                            <div class="post-share">
                                <span class="count-number-like">2</span>
                                <a class="penci-post-like single-like-button"><i class="ti-heart"></i></a>
                            </div>
-->
                            <div class="list-posts-share">
                                <a target="_blank" rel="nofollow" href="#"><i class="ti-facebook"></i></a>
                                <a target="_blank" rel="nofollow" href="#"><i class="ti-twitter"></i></a>
                                <a target="_blank" rel="nofollow" href="#"><i class="ti-pinterest"></i></a>
                                <a target="_blank" rel="nofollow" href="#"><i class="ti-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--      <div class="post-author d-flex my-5">
                    <div class="author-img">
                            <img alt="" src="{{asset('adminPanel/images/author.jpg')}}" class="avatar avatar-100 photo" width="100"
                             height="100">
                    </div>

                       <div class="author-content pl-4">
                             <h4 class="mb-3"><a href="#" title="" rel="author" class="text-capitalize">Themefisher</a>
                             </h4>
                             <p>Hey there. My name is Liam. I was born with the love for traveling. I also love taking
                                 photos with my phone in order to capture moment..</p>

                             <a target="_blank" class="author-social" href="#"><i class="ti-facebook"></i></a>
                             <a target="_blank" class="author-social" href="#"><i class="ti-twitter"></i></a>
                             <a target="_blank" class="author-social" href="#"><i class="ti-google-plus"></i></a>
                             <a target="_blank" class="author-social" href="#"><i class="ti-instagram"></i></a>
                             <a target="_blank" class="author-social" href="#"><i class="ti-pinterest"></i></a>
                             <a target="_blank" class="author-social" href="#"><i class="ti-tumblr"></i></a>
                         </div>
                     </div>
                <nav class="post-pagination clearfix border-top border-bottom py-4">
                    <div class="prev-post">
                        <a href="blog-single.html">
                            <span class="text-uppercase font-sm letter-spacing">Next</span>
                            <h4 class="mt-3"> Intel’s new smart glasses actually look good</h4>
                        </a>
                    </div>
                    <div class="next-post">
                        <a href="blog-single.html">
                            <span class="text-uppercase font-sm letter-spacing">Previous</span>
                            <h4 class="mt-3">Free Two-Hour Delivery From Whole Foods</h4>
                        </a>
                    </div>
                </nav>
                <div class="related-posts-block mt-5">
                    <h3 class="news-title mb-4 text-center">
                        You May Also Like
                    </h3>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="post-block-wrapper mb-4 mb-lg-0">
                                <a href="blog-single.html">
                                    <img class="img-fluid" src="{{asset('adminPanel/images/fashion/img-1.jpg')}}" alt="post-thumbnail" />
                                </a>
                                <div class="post-content mt-3">
                                    <h5>
                                        <a href="blog-single.html">Intel’s new smart glasses actually look good</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="post-block-wrapper mb-4 mb-lg-0">
                                <a href="blog-single.html">
                                    <img class="img-fluid" src="{{asset('adminPanel/images/fashion/img-2.jpg')}}" alt="post-thumbnail" />
                                </a>
                                <div class="post-content mt-3">
                                    <h5>
                                        <a href="blog-single.html">Free Two-Hour Delivery From Whole Foods</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="post-block-wrapper">
                                <a href="blog-single.html">
                                    <img class="img-fluid" src="{{asset('adminPanel/images/fashion/img-3.jpg')}}" alt="post-thumbnail" />
                                </a>
                                <div class="post-content mt-3">
                                    <h5>
                                        <a href="blog-single.html">Snow and Freezing Rain in Paris Forces the</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

               <div class="comment-area my-5">
                    <h3 class="mb-4 text-center">2 Comments</h3>
                    <div class="comment-area-box media">
                        <img alt="" src="{{asset('adminPanel/images/blog-user-2.jpg')}}" class="img-fluid float-left mr-3 mt-2">

                        <div class="media-body ml-4">
                            <h4 class="mb-0">Micle harison </h4>
                            <span class="date-comm font-sm text-capitalize text-color"><i
                                    class="ti-time mr-2"></i>June 7, 2019 </span>

                            <div class="comment-content mt-3">
                                <p>Lorem ipsum dolor sit amet, usu ut perfecto postulant deterruisset, libris causae
                                    volutpat at est, ius id modus laoreet urbanitas. Mel ei delenit dolores.</p>
                            </div>
                            <div class="comment-meta mt-4 mt-lg-0 mt-md-0">
                                <a href="#" class="text-underline ">Reply</a>
                            </div>
                        </div>
                    </div>

                    <div class="comment-area-box media mt-5">
                        <img alt="" src="{{asset('adminPanel/images/blog-user-3.jpg')}}" class="mt-2 img-fluid float-left mr-3">

                        <div class="media-body ml-4">
                            <h4 class="mb-0 ">John Doe </h4>
                            <span class="date-comm font-sm text-capitalize text-color"><i
                                    class="ti-time mr-2"></i>June 7, 2019 </span>

                            <div class="comment-content mt-3">
                                <p>Some consultants are employed indirectly by the client via a consultancy staffing
                                    company. </p>
                            </div>
                            <div class="comment-meta mt-4 mt-lg-0 mt-md-0">
                                <a href="#" class="text-underline">Reply</a>
                            </div>
                        </div>
                    </div>
                </div> -->

          <!--      <form class="comment-form mb-5 gray-bg p-5" id="comment-form">
                    <h3 class="mb-4 text-center">Leave a comment</h3>
                    <div class="row">
                        <div class="col-lg-12">
                                <textarea class="form-control mb-3" name="comment" id="comment" cols="30" rows="5"
                                          placeholder="Comment"></textarea>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="text" name="name" id="name" placeholder="Name:">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="text" name="mail" id="mail" placeholder="Email:">
                            </div>
                        </div>
                    </div>

                    <input class="btn btn-primary" type="submit" name="submit-contact" id="submit_contact"
                           value="Submit Message">
                </form>  -->

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
