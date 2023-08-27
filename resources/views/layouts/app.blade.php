<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{env("APP_NAME")}}</title>
  <link rel="shortcut icon" href="/images/c1-logo.webp" type="image/webp">
  <link rel="icon" href="/template/assets/images/favicon.ico" type="image/x-icon">
  <!--- End favicon-->

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
                <a href="#" class="nav-link-item drop-trigger">Demo <i class="fas fa-angle-down"></i></a>
                <ul class="sub-menu" id="submenu-1">
                  <li class="sub-menu--item">
                    <a href="index.html">home 01</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="index-2.html">home 02</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="index-3.html">home 03</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="index-4.html">home 04</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="index-5.html">home 05</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item nav-item-has-children">
                <a href="#" class="nav-link-item drop-trigger">Pages <i class="fas fa-angle-down"></i></a>
                <ul class="sub-menu" id="submenu-2">
                  <li class="sub-menu--item nav-item-has-children">
                    <a href="#" data-menu-get="h3" class="drop-trigger">About <i class="fas fa-angle-down"></i></a>
                    <ul class="sub-menu shape-none" id="submenu-3">
                      <li class="sub-menu--item">
                        <a href="about-dark.html">About Dark</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="about-us.html">About light 01</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="about-light.html">About light 02</a>
                      </li>
                    </ul>
                  </li>
                  <li class="sub-menu--item nav-item-has-children">
                    <a href="#" data-menu-get="h3" class="drop-trigger">blog light <i class="fas fa-angle-down"></i></a>
                    <ul class="sub-menu shape-none" id="submenu-4">
                      <li class="sub-menu--item">
                        <a href="blog-light.html">blog light</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="blog.html">blog light sidebar 01</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="blog-light-sidebar.html">blog light sidebar 02</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="single-blog.html">blog light details</a>
                      </li>
                    </ul>
                  </li>
                  <li class="sub-menu--item nav-item-has-children">
                    <a href="#" data-menu-get="h3" class="drop-trigger">blog dark <i class="fas fa-angle-down"></i></a>
                    <ul class="sub-menu shape-none" id="submenu-5">
                      <li class="sub-menu--item">
                        <a href="blog-dark.html">blog dark</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="blog-dark-sidebar.html">blog dark sidebar</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="single-dark-blog.html">blog dark details</a>
                      </li>
                    </ul>
                  </li>
                  <li class="sub-menu--item nav-item-has-children">
                    <a href="#" data-menu-get="h3" class="drop-trigger">Service<i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="sub-menu shape-none" id="submenu-6">
                      <li class="sub-menu--item">
                        <a href="service.html">service</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="single-service.html">single service</a>
                      </li>
                    </ul>
                  </li>
                  <li class="sub-menu--item nav-item-has-children">
                    <a href="#" data-menu-get="h3" class="drop-trigger">Team<i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="sub-menu shape-none" id="submenu-7">
                      <li class="sub-menu--item">
                        <a href="team-dark.html">Team dark</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="team.html">Team light 01</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="team-light.html">Team light 02</a>
                      </li>

                      <li class="sub-menu--item">
                        <a href="single-team.html">single team</a>
                      </li>
                    </ul>
                  </li>
                  <li class="sub-menu--item nav-item-has-children">
                    <a href="#" data-menu-get="h3" class="drop-trigger">Career<i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="sub-menu shape-none" id="submenu-8">
                      <li class="sub-menu--item">
                        <a href="career.html">Career</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="single-career.html">single Career</a>
                      </li>
                    </ul>
                  </li>
                  <li class="sub-menu--item nav-item-has-children">
                    <a href="#" data-menu-get="h3" class="drop-trigger">Portfolio<i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="sub-menu shape-none" id="submenu-9">
                      <li class="sub-menu--item">
                        <a href="portfolio-01.html">Portfolio Classic</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="portfolio-02.html">Portfolio Minimal</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="portfolio-03.html">Portfolio Modern</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="single-portfolio.html">Single Portfolio</a>
                      </li>
                    </ul>
                  </li>
                  <li class="sub-menu--item nav-item-has-children">
                    <a href="#" data-menu-get="h3" class="drop-trigger">Pricing Light<i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="sub-menu shape-none" id="submenu-10">
                      <li class="sub-menu--item">
                        <a href="pricing-light-01.html">pricing light 01</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="pricing-light-02.html">pricing light 02</a>
                      </li>
                    </ul>
                  </li>
                  <li class="sub-menu--item nav-item-has-children">
                    <a href="#" data-menu-get="h3" class="drop-trigger">Pricing Dark<i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="sub-menu shape-none" id="submenu-11">
                      <li class="sub-menu--item">
                        <a href="pricing-dark-01.html">pricing dark 01</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="pricing-dark-02.html">pricing dark 02</a>
                      </li>
                    </ul>
                  </li>
                  <li class="sub-menu--item nav-item-has-children">
                    <a href="#" data-menu-get="h3" class="drop-trigger">Privacy Policy<i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="sub-menu shape-none" id="submenu-12">
                      <li class="sub-menu--item">
                        <a href="privacy-policy-light.html">Privacy Policy light</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="privacy-policy-dark.html">Privacy Policy dark</a>
                      </li>
                    </ul>
                  </li>
                  <li class="sub-menu--item nav-item-has-children">
                    <a href="#" data-menu-get="h3" class="drop-trigger">Utility<i class="fas fa-angle-down"></i>
                    </a>
                    <ul class="sub-menu shape-none" id="submenu-13">
                      <li class="sub-menu--item">
                        <a href="faq.html">faq</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="error-404.html">Error 404</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="testimonial.html">testimonial</a>
                      </li>
                      <li class="sub-menu--item">
                        <a href="coming-soon.html">Coming Soon</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="nav-item nav-item-has-children has-megamenu">
                <a href="#" class="nav-link-item drop-trigger">elements <i class="fas fa-angle-down"></i></a>
                <div class="sub-menu megamenu  megadropdown-center  d-lg-flex" id="submenu-100">
                  <ul class="col-lg-12 row-lg list-unstyled py-lg-7">
                    <li class="col-lg-3">
                      <div class="single-dropdown-block">
                        <h3>about Style</h3>
                        <a href="about-dark.html" class="mega-drop-menu-item sub-menu--item">About us Dark</a>
                        <a href="about-us.html" class="mega-drop-menu-item sub-menu--item">about us light 01</a>
                        <a href="about-light.html" class="mega-drop-menu-item sub-menu--item">about us light 01</a>
                      </div>
                    </li>
                    <li class="col-lg-3">
                      <div class="single-dropdown-block">
                        <h3>blog Style</h3>
                        <a class="mega-drop-menu-item sub-menu--item" href="blog-dark.html">blog dark</a>
                        <a class="mega-drop-menu-item sub-menu--item" href="blog-dark-sidebar.html">blog dark sidebar</a>
                        <a class="mega-drop-menu-item sub-menu--item" href="single-dark-blog.html">blog dark details</a>
                        <a class="mega-drop-menu-item sub-menu--item" href="blog-light.html">blog light</a>
                        <a class="mega-drop-menu-item sub-menu--item" href="blog.html">blog light sidebar 01</a>
                        <a class="mega-drop-menu-item sub-menu--item" href="blog-light-sidebar.html">blog light sidebar 02</a>
                        <a class="mega-drop-menu-item sub-menu--item" href="single-blog.html">blog light details</a>
                      </div>
                    </li>
                    <li class="col-lg-3">
                      <div class="single-dropdown-block">
                        <h3>Portfolio Style</h3>
                        <a href="portfolio-01.html" class="mega-drop-menu-item sub-menu--item">Portfolio Classic </a>
                        <a href="portfolio-02.html" class="mega-drop-menu-item sub-menu--item">Portfolio Minimal</a>
                        <a href="portfolio-03.html" class="mega-drop-menu-item sub-menu--item">Portfolio Modern</a>
                        <a href="single-portfolio.html" class="mega-drop-menu-item sub-menu--item d-block">portfolio details</a>
                      </div>
                    </li>
                    <li class="col-lg-3">
                      <div class="single-dropdown-block">
                        <h3>contact style</h3>
                        <a href="contact-dark.html" class="mega-drop-menu-item sub-menu--item d-block">contact dark</a>
                        <a href="contact.html" class="mega-drop-menu-item sub-menu--item d-block">contact light 01</a>
                        <a href="contact-light.html" class="mega-drop-menu-item sub-menu--item d-block">contact light 02</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item nav-item-has-children">
                <a href="#" class="nav-link-item drop-trigger">Blog <i
                  class="fas fa-angle-down"></i></a>
                <ul class="sub-menu" id="submenu-14">
                  <li class="sub-menu--item">
                    <a href="blog-dark.html">blog dark</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="blog-dark-sidebar.html">blog dark sidebar</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="single-dark-blog.html">blog dark details</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="blog-light.html">blog light</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="blog.html">blog light sidebar 01</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="blog-light-sidebar.html">blog light sidebar 02</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="single-blog.html">blog light details</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item nav-item-has-children">
                <a href="#" class="nav-link-item drop-trigger">Contact us <i
                  class="fas fa-angle-down"></i></a>
                <ul class="sub-menu" id="submenu-15">
                  <li class="sub-menu--item">
                    <a href="contact-dark.html">contact dark</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="contact.html">contact light 01</a>
                  </li>
                  <li class="sub-menu--item">
                    <a href="contact-light.html">contact light 02</a>
                  </li>
                </ul>
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
              <p>Discover NFTs by category, track the latest drops, and follow the collections you love to enjoy it!</p>
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
              <span>Marketplace</span>
              <ul>
                <li><a href="">Create A Store</a></li>
                <li><a href="">Start Selling</a></li>
                <li><a href="">My Account</a></li>
                <li><a href="">Job</a></li>
                <li><a href="">List a Item</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 offset-lg-1 col-md-4 col-sm-4">
            <div class="fugu--footer-menu">
              <span>Marketplace</span>
              <ul>
                <li><a href="">Art</a></li>
                <li><a href="">Digital Art</a></li>
                <li><a href="">Photography</a></li>
                <li><a href="">Games</a></li>
                <li><a href="">Music</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-2 offset-lg-1 col-md-4 col-sm-4">
            <div class="fugu--footer-menu">
              <span>Marketplace</span>
            </div>
            <div class="fugu--info">
              <ul>
                <li><a href=""><img src="/template/assets/images/svg2/phone.svg" alt="">+088-234-6534</a></li>
                <li><a href=""><img src="/template/assets/images/svg2/mail.svg" alt="">example@gmail. com</a></li>
                <li><a href=""><img src="/template/assets/images/svg2/map.svg" alt="">6391 Elgin St. Celina, New York City.</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="fugu--footer-bottom fugu--footer-bottom3">
        <div class="row">
          <div class="col-lg-6">
            <p>&copy; Copyright 2022, All Rights Reserved by Mthemeus</p>
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
