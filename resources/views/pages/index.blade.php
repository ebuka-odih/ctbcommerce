
<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from html.bdevs.net/finwise-prev/elements-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Sep 2023 17:12:46 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | Open Account</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/favicon.svg">
    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendor/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendor/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/plugins/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/plugins/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendor/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendor/fontawesome-pro.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendor/flaticon_finwise.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendor/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/main.css') }}">
</head>

<body>

<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Preloder start -->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!-- Preloder start -->

<!-- Backtotop start -->
<div class="backtotop-wrap cursor-pointer ">
    <svg class="backtotop-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!-- Backtotop end -->

<!-- Offcanvas area start -->
<div class="fix">
    <div class="offcanvas__area">
        <div class="offcanvas__wrapper">
            <div class="offcanvas__content">
                <div class="offcanvas__top d-flex justify-content-between align-items-center">
                    <div class="offcanvas__logo">
                        <a href="index.html">
                            <img src="assets/imgs/logo/logo-white.svg" alt="logo not found">
                        </a>
                    </div>
                    <div class="offcanvas__close">
                        <button class="offcanvas-close-icon animation--flip">
                                <span class="offcanvas-m-lines">
                           <span class="offcanvas-m-line line--1"></span><span class="offcanvas-m-line line--2"></span><span class="offcanvas-m-line line--3"></span>
                                </span>
                        </button>
                    </div>
                </div>
                <div class="mobile-menu fix"></div>
                <div class="offcanvas__social">
                    <h3 class="offcanvas__title mb-20">Subscribe & Follow</h3>
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="offcanvas__btn">
                    <div class="header__btn-wrap">
                        <a class="sub__btn sm" href="{{ route('login') }}">Log In</a>
                        <a class="bd-gradient-btn" href="contact.html">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="offcanvas__overlay"></div>
<div class="offcanvas__overlay-white"></div>
<!-- Offcanvas area start -->

<!-- Header area start -->
<header>
    <div id="header-sticky" class="header__area header-common">
        <div class="container">
            <div class="mega__menu-wrapper p-relative">
                <div class="header__main">
                    <div class="header__left">
                        <div class="header__logo">
                            <a href="index.html">
                                <img src="assets/imgs/logo/logo-white.svg" alt="logo not found">
                            </a>
                        </div>
                    </div>

                    <div class="header__right">
                        <div class="header__action d-flex align-items-center">
                            <div class="header__btn-wrap d-none d-xl-inline-flex">
                                <a class="sub__btn" href="{{ route('login') }}">Log In</a>
                                <a class="bd-gradient-btn" href="{{ route('personalInfo') }}">Get Started</a>
                            </div>
                            <div class="header__hamburger ml-20 d-xl-none">
                                <div class="sidebar__toggle">
                                    <a class="bar-icon" href="avascript:void(0)">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                            <!-- for wp -->
                            <div class="header__hamburger ml-20 d-none">
                                <button type="button" class="hamburger-btn offcanvas-open-btn">
                                    <span>01</span>
                                    <span>01</span>
                                    <span>01</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header area end -->

<!-- Body main wrapper start -->
<main>
    <div class="intro-style section-space-top">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="section__title-wrapper section__title-space text-center">
                        <h2 class="section__title">Coming Soon</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>



</main>
<!-- Body main wrapper end -->

<!-- Footer area start -->
<footer>
    <section class="footer__area-common">
        <div class="container">
            <div class="footer__main">
                <div class="footer__grid">
                    <div class="footer__widget">
                        <div class="footer__logo mb-25">
                            <a href="index.html">
                                <img src="assets/imgs/logo/logo-white.svg" alt="logo not found">
                            </a>
                        </div>
                        <div class="footer__content">
                            <p>Lorem ipsum dolor am oledop consectetur adipisc.</p>
                            <div class="footer__social">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="footer__widget">
                        <div class="footer__widget-title">
                            <h5>Use Cases</h5>
                        </div>
                        <div class="footer__link">
                            <ul>
                                <li><a href="#">SaaS</a></li>
                                <li><a href="#">Online Business</a></li>
                                <li><a href="#">Creators</a></li>
                                <li><a href="#">E-Commerce</a></li>
                                <li><a href="#">Agencies</a></li>
                                <li><a href="#">Secure</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer__widget">
                        <div class="footer__widget-title">
                            <h5>Products</h5>
                        </div>
                        <div class="footer__link">
                            <ul>
                                <li><a href="#">Invoicing</a></li>
                                <li><a href="#">Office Hours</a></li>
                                <li><a href="#">Explore More</a></li>
                                <li><a href="#">Loan Type</a></li>
                                <li><a href="#">Calculate</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="footer__widget">
                        <div class="footer__widget-title">
                            <h5>Newsletter</h5>
                        </div>
                        <div class="footer__newsletter">
                            <p>For latest Update subscribe us!</p>
                            <form action="https://html.bdevs.net/finwise-prev/assets/mail.php" method="POST">
                                <div class="footer__newsletter-from mb-25">
                                    <div class="footer__newsletter-input p-relative">
                                        <input type="text" placeholder="Enter Email">
                                        <button class="footer__round-btn" type="submit"><i class="fa-regular fa-angle-right"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="footer__short-info">
                            <div class="info-icon">
                                <span><i class="fa-solid fa-envelope"></i></span>
                            </div>
                            <div class="info-content">
                                <p><a href="https://html.bdevs.net/cdn-cgi/l/email-protection#5b333e3737341b3d32352c32283e75383436"><span class="__cf_email__" data-cfemail="4c24292020230c2a25223b253f29622f2321">[email&#160;protected]</span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="footer__copyright">
                    <p>Copyright © 2023 <a href="#">Finwise</a></p>
                </div>
                <div class="footer__conditions">
                    <ul>
                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</footer>
<!-- Footer area end -->

<!-- JS here -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('front/assets/js/plugins/waypoints.min.js') }}"></script>
<script src="{{ asset('front/assets/js/vendor/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('front/assets/js/plugins/meanmenu.min.js') }}"></script>
<script src="{{ asset('front/assets/js/plugins/swiper.min.js') }}"></script>
<script src="{{ asset('front/assets/js/plugins/slick.min.js') }}"></script>
<script src="{{ asset('front/assets/js/plugins/wow.js') }}"></script>
<script src="{{ asset('front/assets/js/vendor/magnific-popup.min.js') }}"></script>
<script src="{{ asset('front/assets/js/vendor/type.js') }}"></script>
<script src="{{ asset('front/assets/js/plugins/counterup.js') }}"></script>
<script src="{{ asset('front/assets/js/plugins/nice-select.min.js') }}"></script>
<script src="{{ asset('front/assets/js/vendor/jquery-ui.min.js') }}"></script>
<script src="{{ asset('front/assets/js/plugins/parallax-scroll.js') }}"></script>
<script src="{{ asset('front/assets/js/vendor/ajax-form.js') }}"></script>
<script src="{{ asset('front/assets/js/main.js') }}"></script>
</body>


<!-- Mirrored from html.bdevs.net/finwise-prev/elements-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Sep 2023 17:12:46 GMT -->
</html>
