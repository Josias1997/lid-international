<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    @yield('meta')

    <title>{{ setting('site.title') }}</title>

    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico">

    <!-- CSS Style -->
    <link rel="stylesheet" href="/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="/css/plugins/feature.css">
    <link rel="stylesheet" href="/css/vendor/slick.css">
    <link rel="stylesheet" href="/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="/css/vendor/lightbox.css">
    <link rel="stylesheet" href="/css/vendor/fontawesome.css">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>

    <!-- Start Header Area -->
    <header class="header-area formobile-menu header--static logoresize color-black">
        <div class="header-wrapper" id="header-wrapper">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-6">
                        <div class="header-left">
                            <div class="logo"><a href="{{ route('home') }}"><img src="/storage/{{ setting('site.logo') }}" alt="Lid-International"> LID-INTERNATIONAL</a></div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-6">
                        <div class="header-right justify-content-end">
                            <nav class="mainmenunav">
                                <ul class="mainmenu">
                                    <li><a href="{{ route ('home')}}">Home</a></li>
                                    <li><a href="{{ route ('perspectives') }}">Perspectives</a></li>
                                    <li><a href="{{ route ('blog') }}">Blog</a></li>
                                    <li ><a href="{{ route ('programs') }}">Programs</a></li>
                                    <li class="has-dropdown">
                                        <a href="#">About</a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('about') }}">Our Story</a></li>
                                            <li><a href="{{ route('about.burkina') }}">Burkina Faso</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('communities') }}">Our Communities</a>
                                        <!--<ul class="submenu">
                                            <li><a href="{{ route('communities') }}">Village A</a></li>
                                            <li><a href="{{ route('communities') }}">Village B</a></li>
                                            <li><a href="{{ route('communities') }}">Village C</a></li>
                                        </ul>-->
                                    </li>
                                    <li><a href="{{ route ('contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                            <!--<div class="header-btn d-none d-sm-block"><a class="btn-default btn-border btn-opacity" target="_blank" href="https://themeforest.net/checkout/from_item/31904252?license=regular">
                                    <span>buy now</span>
                                </a>
                            </div>-->
                            <div class="humberger-menu d-block d-lg-none pl--20">
                                <span class="menutrigger text-white">
                                    <i data-feather="menu"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Area -->
    <!-- Start Popup Menu Area  -->
    <div class="rn-popup-mobile-menu">
        <div class="inner">
            <div class="popup-menu-top">
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="/storage/{{ setting('site.logo') }}" alt="Lid-International">
                    LID-INTERNATIONAL
                    </a>
                </div>
                <div class="close-menu d-block d-lg-none">
                    <span class="closeTrigger">
                    <i data-feather="x"></i>
                </span>
                </div>
            </div>
            <ul class="mainmenu">
                <li><a href="{{ route ('home')}}">Home</a></li>
                <li><a href="{{ route ('perspectives') }}">Perspectives</a></li>
                <li><a href="{{ route ('blog') }}">Blog</a></li>
                <li ><a href="{{ route ('programs') }}">Programs</a></li>
                <li class="has-dropdown">
                    <a href="#">About</a>
                    <ul class="submenu">
                        <li><a href="{{ route('about') }}">Our Story</a></li>
                        <li><a href="{{ route('about.burkina') }}">Burkina Faso</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('communities') }}">Our Communities</a>
                    <!--<ul class="submenu">
                        <li><a href="{{ route('communities') }}">Village A</a></li>
                        <li><a href="{{ route('communities') }}">Village B</a></li>
                        <li><a href="{{ route('communities') }}">Village C</a></li>
                    </ul>-->
                </li>
                <li><a href="{{ route ('contact') }}">Contact</a></li>
            </ul>          
        </div>
    </div>
    <!-- End Popup Menu Area  -->
    @yield('content')
    <!-- start footer area -->
    <footer class="footer-area footer-style-01 bg_color--6">
        <div class="im-call-to-action-area ptb--70 im-separator">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-xl-6 col-md-12 col-sm-12 col-12">
                        <div class="inner">
                            <h2 class="text-white mb--0">Together for a Better World</h2>
                        </div>
                    </div>
                    <!--<div class="col-lg-4 col-xl-4 offset-xl-2 col-md-12 col-sm-12 col-12">
                        <div class="call-to-cation-tbn text-left text-lg-right mt_md--20 mt_sm--20">
                            <a class="btn-default btn-large btn-border btn-opacity" href="#button">Read Out Now</a>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
        <div class="footer-wrapper ptb--70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="ft-text">
                            <div class="logo">
                                <a href="{{ route('home') }}">
                                    <img src="/storage/{{ setting('site.logo') }}" alt="Digital Agency">
                                    LID-INTERNATIONAL
                                </a>
                            </div>
                            <p>Copyright © 2021 LID-INTERNATIONAL. All Right reserves.</p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-xl-2 offset-xl-1 col-md-6 col-sm-6 col-12 mt_mobile--40">
                        <div class="footer-link">
                            <h4>Quick Links</h4>
                            <ul class="ft-link">
                                <li><a href="{{ route ('contact') }}">Contact</a></li>
                                <li><a href="{{ route ('about') }}">Our Story</a></li> 
                                <li><a href="{{ route ('communities') }}">Our Community</a></li>   
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6 col-12 mt_md--40 mt_sm--40">
                        <div class="footer-link">
                            <h4>LID-International</h4>
                            <ul class="ft-link">
                                 
                                    <li><a href="{{ route ('perspectives') }}">Perspectives</a></li>
                                    <li><a href="{{ route ('blog') }}">Articles</a></li>
                                    <li ><a href="{{ route ('programs') }}">Programs</a></li>
                                    <li><a href="{{ route ('about') }}">About</a></li>
                                    
                              
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mt_md--40 mt_sm--40">
                        <div class="footer-link">
                            <h4>Contacts</h4>
                            <ul class="ft-link">
                                <li>Email: <a href="mailto:{{ setting('site.first_email') }}">{{ setting('site.first_email') }}</a></li>
                                <li>Email: <a href="mailto:{{ setting('site.second_email') }}">{{ setting('site.second_email') }}</a></li>
                                <li>Email: <a href="mailto:{{ setting('site.third_email') }}">{{ setting('site.third_email') }}</a></li>
                                <li>Phone: <a href="tel:{{ setting('site.phone_number') }}">{{ setting('site.phone_number') }}</a></li>
                            </ul>
                            <div class="social-share-inner mt--20">
                                <ul class="social-share social-style--2 d-flex justify-content-start liststyle">
                                    <li><a href="{{ setting('site.facebook') }}"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{ setting('site.linkedin') }}"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="{{ setting('site.twitter') }}"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{ setting('site.instagram') }}"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer area -->
    <!-- Start Back To Top Start -->
    <div class="backto-top">
        <div>
            <i data-feather="chevron-up"></i>
        </div>
    </div>
    <!-- Start Back To Top End -->
    <!-- js  
======================================-->
    <!-- modernizer JS -->
    <script src="/js/vendor/modernizer.min.js"></script>
    <!-- jquery JS -->
    <script src="/js/vendor/jquery.js"></script>
    <!-- Bootstrap JS -->
    <script src="/js/vendor/bootstrap.min.js"></script>

    <script src="/js/vendor/avoid-console.js"></script>
    <script src="/js/vendor/waypoint.js"></script>
    <script src="/js/vendor/wow.js"></script>
    <script src="/js/vendor/feather.js"></script>
    <script src="/js/vendor/slick.min.js"></script>
    <script src="/js/vendor/counterup.js"></script>
    <script src="/js/vendor/video.js"></script>
    <script src="/js/vendor/masonry.js"></script>
    <script src="/js/vendor/lightbox.js"></script>
    <script src="/js/vendor/particles.js"></script>

    <!-- main JS -->
    <script src="/js/main.js"></script>
</body>
</html>