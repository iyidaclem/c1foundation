<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env("APP_NAME")}}</title>
    <link rel="shortcut icon" href="/images/c1-logo.webp" type="image/webp">
    <!--- End favicon-->
    <!-- og data -->
    <meta property="og:title" content="C1 Foundations">
    <meta property="og:description" content="Empowering Education, Building Futures">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://c1foundations.com">
    <meta property="og:image" content="https://c1foundations.com/images/c1-logo.webp">
    <meta property="og:image:alt" content="C1 Foundations Logo">
    <meta property="og:image:type" content="image/webp">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="C1 Foundations">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Public+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    <!-- End google font  -->

    <link rel="stylesheet" href="/template/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/template/assets/css/fontawesome.css" />
    <link rel="stylesheet" href="/template/assets/css/slick.css" />
    <link rel="stylesheet" href="/template/assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="/template/assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/template/assets/css/icomoon-font.css" />
    <link rel="stylesheet" href="/template/assets/css/animate.css" />


    <!-- Code Editor  -->

    <link rel="stylesheet" href="/template/assets/css/main.css" />
    <link rel="stylesheet" href="/template/assets/css/app.min.css" />
</head>

<body class="light">



    <header class="site-header fugu--header-section fugu--header-three" id="sticky-menu">
        <div class="container-fluid">
            <nav class="navbar site-navbar">
                <!-- Brand Logo-->
                <div class="brand-logo rt-mr-20">
                    <a href="index.html">
                        <img src="/images/c1-logo.webp" alt="" class="C1Logo">
                    </a>
                </div>
                <div class="menu-block-wrapper">
                    <div class="menu-overlay"></div>
                    <nav class="menu-block" id="append-menu-header">
                        <div class="mobile-menu-head">
                            <div class="go-back">
                                <i class="fa fa-angle-left"></i>
                            </div>
                            <div class="current-menu-title"></div>
                            <div class="mobile-menu-close">&times;</div>
                        </div>
                        <ul class="site-menu-main">
                            <li class="nav-item nav-item-has-children">
                                <a href="/" class="nav-link-item drop-trigger">Home</a>
                            </li>
                            <li class="nav-item nav-item-has-children">
                                <a href="https://nft.c1foundations.com/" class="nav-link-item drop-trigger">NFT Market</a>

                            </li>
                            <li class="nav-item nav-item-has-children">
                                <a href="#" class="nav-link-item drop-trigger">Blog</a>
                            </li>

                            <li class="nav-item nav-item-has-children">
                                <a href="#" class="nav-link-item drop-trigger">Contact Us</a>
                            </li>

                            <li class="header-btn header-btn-l1 fugu-responsive-btn">
                                <a class="fugu--btn fugu--menu-btn3" href="contact.html">
                                    Get Started
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="header-btn header-btn-l1 ms-auto d-none d-xs-inline-flex">
                    <a class="fugu--btn fugu--menu-btn3" href="contact.html">
                        Get Started
                    </a>
                </div>
                <!-- mobile menu trigger -->
                <div class="mobile-menu-trigger">
                    <span></span>
                </div>
                <!--/.Mobile Menu Hamburger Ends-->
            </nav>
        </div>
    </header>
    <!--End landex-header-section -->


    {{$slot}}

    <!-- Footer  -->

    <footer class="fugu--footer-section">
        <div class="container">
            <div class="fugu--footer-top">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="fugu--textarea">
                            <div class="fugu--footer-logo">
                                <img src="/images/c1-logo.webp" alt="" class="C1Logo">
                            </div>
                            <p>Welcome to the C1foundation, an innovative platform operating on the NEAR blockchain!</p>
                            <div class="fugu--social-icon fugu--social-icon3">
                                <ul>
                                    <li><a href=""><img src="/template/assets/images/social2/twitter.svg" alt=""></a></li>
                                    <li><a href=""><img src="/template/assets/images/social2/facebook.svg" alt=""></a></li>
                                    <li><a href=""><img src="/template/assets/images/social2/instagram.svg" alt=""></a></li>
                                    <li><a href=""><img src="/template/assets/images/social2/github.svg" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 offset-lg-1 col-md-4 col-sm-4">
                        <div class="fugu--footer-menu">
                            <span>Menu</span>
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="">Blog</a></li>
                                <li><a href="">My Account</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 offset-lg-1 col-md-4 col-sm-4">
                        <div class="fugu--footer-menu">
                            <span>Links</span>
                            <ul>
                                <li><a href="http://nft.c1foundations.com/">NFT Marketplace</a></li>
                                <li><a href="">Art</a></li>
                                <li><a href="">Photography</a></li>
                                <li><a href="">Games</a></li>
                                <li><a href="">Music</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 offset-lg-1 col-md-4 col-sm-4">
                        <div class="fugu--footer-menu">
                            <span>Contact info</span>
                        </div>
                        <div class="fugu--info">
                            <ul>
                                <li><a href=""><img src="/template/assets/images/svg2/phone.svg" alt="">+2347084410098</a></li>
                                <li><a href=""><img src="/template/assets/images/svg2/mail.svg" alt="">support@c1foundations.com</a></li>
                                <li><a href=""><img src="/template/assets/images/svg2/map.svg" alt="">10b Bashiru Olusesi avenue Lekki Lagos state.</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="fugu--footer-bottom fugu--footer-bottom3">
                <div class="row">
                    <div class="col-lg-6">
                        <p>&copy; Copyright 2022, All Rights Reserved by {{env('APP_NAME')}}</p>
                    </div>
                    <div class="col-lg-6">
                        <div class="fugu--footer-menu">
                            <ul>
                                <li><a href="">Terms</a></li>
                                <li><a href=""> Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <div class="fugu-preloader">
        <div class="fugu-spinner">
            <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                <circle cx="50" cy="50" r="46" />
            </svg>
        </div>
        <div class="fugu-title">loading...</div>
    </div>

    <!-- scripts -->
    <script src="/template/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/template/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/template/assets/js/menu/menu.js"></script>
    <script src="/template/assets/js/slick.js"></script>
    <script src="/template/assets/js/isotope.pkgd.min.js"></script>
    <script src="/template/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/template/assets/js/swiper-bundle.min.js"></script>
    <script src="/template/assets/js/countdown.js"></script>
    <script src="/template/assets/js/wow.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyArZVfNvjnLNwJZlLJKuOiWHZ6vtQzzb1Y"></script>

    <script src="/template/assets/js/app.js"></script>
</body>

</html>
