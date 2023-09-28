
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
                        <a class="sub__btn sm" href="login.html">Log In</a>
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
                    <div class="header__middle">
                        <div class="mean__menu-wrapper d-none d-lg-block">
                            <div class="main-menu">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="has-dropdown has-mega-menu">
                                                <a href="javascript:void(0)">Demos</a>
                                                <ul class="mega-menu">
                                                    <li>
                                                        <div class="home__menu-grid">
                                                            <div class="home__menu-item">
                                                                <div class="home__menu-thumb">
                                                                    <img src="assets/imgs/menu/menu-home-1.jpg" alt="thumb not found">
                                                                    <div class="home__menu__buttons">
                                                                        <a class="bd-gradient-btn" href="online-banking.html">MULTI PAGE</a>
                                                                        <a class="bd-gradient-btn" href="online-banking-one-page.html">ONE PAGE</a>
                                                                    </div>
                                                                </div>
                                                                <h4 class="home__menu-title">Online Banking</h4>
                                                            </div>
                                                            <div class="home__menu-item">
                                                                <div class="home__menu-thumb">
                                                                    <img src="assets/imgs/menu/menu-home-2.jpg" alt="thumb not found">
                                                                    <div class="home__menu__buttons">
                                                                        <a class="bd-gradient-btn" href="investment-management.html">MULTI PAGE</a>
                                                                        <a class="bd-gradient-btn" href="investment-management-one-page.html">ONE PAGE</a>
                                                                    </div>
                                                                </div>
                                                                <h4 class="home__menu-title">Investment Management</h4>
                                                            </div>
                                                            <div class="home__menu-item">
                                                                <div class="home__menu-thumb">
                                                                    <img src="assets/imgs/menu/menu-home-3.jpg" alt="thumb not found">
                                                                    <div class="home__menu__buttons">
                                                                        <a class="bd-gradient-btn" href="personal-loan.html">MULTI PAGE</a>
                                                                        <a class="bd-gradient-btn" href="personal-loan-one-page.html">ONE PAGE</a>
                                                                    </div>
                                                                </div>
                                                                <h4 class="home__menu-title">Personal Loan</h4>
                                                            </div>
                                                            <div class="home__menu-item">
                                                                <div class="home__menu-thumb">
                                                                    <img src="assets/imgs/menu/menu-home-4.jpg" alt="thumb not found">
                                                                    <div class="home__menu__buttons">
                                                                        <a class="bd-gradient-btn" href="insurance.html">MULTI PAGE</a>
                                                                        <a class="bd-gradient-btn" href="insurance-one-page.html">ONE PAGE</a>
                                                                    </div>
                                                                </div>
                                                                <h4 class="home__menu-title">Insurance</h4>
                                                            </div>
                                                            <div class="home__menu-item">
                                                                <div class="home__menu-thumb">
                                                                    <img src="assets/imgs/menu/menu-home-5.jpg" alt="thumb not found">
                                                                    <div class="home__menu__buttons">
                                                                        <a class="bd-gradient-btn" href="wealth-management.html">MULTI PAGE</a>
                                                                        <a class="bd-gradient-btn" href="wealth-management-one-page.html">ONE PAGE</a>
                                                                    </div>
                                                                </div>
                                                                <h4 class="home__menu-title">Wealth Managment</h4>
                                                            </div>
                                                            <div class="home__menu-item">
                                                                <div class="home__menu-thumb">
                                                                    <img src="assets/imgs/menu/menu-home-6.jpg" alt="thumb not found">
                                                                    <div class="home__menu__buttons">
                                                                        <a class="bd-gradient-btn" href="payment-solution.html">MULTI PAGE</a>
                                                                        <a class="bd-gradient-btn" href="payment-solution-one-page.html">ONE PAGE</a>
                                                                    </div>
                                                                </div>
                                                                <h4 class="home__menu-title">Payment Solution</h4>
                                                            </div>
                                                            <div class="home__menu-item">
                                                                <div class="home__menu-thumb">
                                                                    <img src="assets/imgs/menu/menu-home-7.jpg" alt="thumb not found">
                                                                    <div class="home__menu__buttons">
                                                                        <a class="bd-gradient-btn" href="forex-trading.html">MULTI PAGE</a>
                                                                        <a class="bd-gradient-btn" href="forex-trading-one-page.html">ONE PAGE</a>
                                                                    </div>
                                                                </div>
                                                                <h4 class="home__menu-title">Forex Trading</h4>
                                                            </div>
                                                            <div class="home__menu-item">
                                                                <div class="home__menu-thumb">
                                                                    <img src="assets/imgs/menu/menu-home-8.jpg" alt="thumb not found">
                                                                    <div class="home__menu__buttons">
                                                                        <a class="bd-gradient-btn" href="retirement-planning.html">MULTI PAGE</a>
                                                                        <a class="bd-gradient-btn" href="retirement-planning-one-page.html">ONE PAGE</a>
                                                                    </div>
                                                                </div>
                                                                <h4 class="home__menu-title">Retirement Planning</h4>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown has-mega-menu">
                                                <a href="javascript:void(0)">Pages</a>
                                                <ul class="mega-menu mega-menu-grid-4">
                                                    <li>
                                                        <a href="javasript:void(0);" class="mega-menu-title">Home Dark</a>
                                                        <ul>
                                                            <li><a href="online-banking.html">Online Banking</a></li>
                                                            <li><a href="investment-management.html">Investment Management</a></li>
                                                            <li><a href="personal-loan.html">Personal Loan</a></li>
                                                            <li><a href="insurance.html">Insurance</a></li>
                                                            <li><a href="wealth-management.html">Wealth Managment</a></li>
                                                            <li><a href="payment-solution.html">Payment Solution</a></li>
                                                            <li><a href="forex-trading.html">Forex Trading</a></li>
                                                            <li><a href="retirement-planning.html">Retirement Planning</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javasript:void(0);" class="mega-menu-title">Home Light</a>
                                                        <ul>
                                                            <li><a href="online-banking-light.html">Online Banking</a></li>
                                                            <li><a href="investment-management-light.html">Investment Management</a></li>
                                                            <li><a href="personal-loan-light.html">Personal Loan</a></li>
                                                            <li><a href="insurance-light.html">Insurance</a></li>
                                                            <li><a href="wealth-management-light.html">Wealth Managment</a></li>
                                                            <li><a href="payment-solution-light.html">Payment Solution</a></li>
                                                            <li><a href="forex-trading-light.html">Forex Trading</a></li>
                                                            <li><a href="retirement-planning-light.html">Retirement Planning</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javasript:void(0);" class="mega-menu-title">Page dark</a>
                                                        <ul>
                                                            <li><a href="about.html">About Us</a></li>
                                                            <li><a href="services.html">Services</a></li>
                                                            <li><a href="service-details.html">Services Details</a></li>
                                                            <li><a href="pricing.html">Pricing</a></li>
                                                            <li><a href="blog.html">Blog</a></li>
                                                            <li><a href="blog-details.html">Blog Details</a></li>
                                                            <li><a href="error-page.html">Error Page</a></li>
                                                            <li><a href="login.html">Login</a></li>
                                                            <li><a href="register.html">Register</a></li>
                                                            <li><a href="forgot.html">Forgot Password</a></li>
                                                            <li><a href="privacy-policy.html">Privacy & Policy</a></li>
                                                            <li><a href="contact.html">Contact</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javasript:void(0);" class="mega-menu-title">Page Light</a>
                                                        <ul>
                                                            <li><a href="about-light.html">About Us</a></li>
                                                            <li><a href="services-light.html">Services</a></li>
                                                            <li><a href="service-details-light.html">Services Details</a></li>
                                                            <li><a href="pricing-light.html">Pricing</a></li>
                                                            <li><a href="blog-light.html">Blog</a></li>
                                                            <li><a href="blog-details-light.html">Blog Details</a></li>
                                                            <li><a href="error-page-light.html">Error Page</a></li>
                                                            <li><a href="login-light.html">Login</a></li>
                                                            <li><a href="register-light.html">Register</a></li>
                                                            <li><a href="forgot-light.html">Forgot Password</a></li>
                                                            <li><a href="privacy-policy-light.html">Privacy & Policy</a></li>
                                                            <li><a href="contact-light.html">Contact</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has-dropdown has-mega-menu">
                                                <a href="javascript:void(0)">elements</a>
                                                <ul class="mega-menu mega-menu-grid-3">
                                                    <li>
                                                        <a href="javasript:void(0);" class="mega-menu-title">elements Layout 1</a>
                                                        <ul>
                                                            <li><a href="style-guide.html">Style Guide</a></li>
                                                            <li><a href="elements-about.html">About Us</a></li>
                                                            <li><a href="elements-accordion.html">Accordion</a></li>
                                                            <li><a href="elements-advancetab.html">Advance Tab</a></li>
                                                            <li><a href="elements-brand.html">Brand</a></li>
                                                            <li><a href="elements-button.html">Button</a></li>
                                                            <li><a href="elements-team.html">Team</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javasript:void(0);" class="mega-menu-title">elements Layout 2</a>
                                                        <ul>
                                                            <li><a href="elements-pricing.html">pricing</a></li>
                                                            <li><a href="elements-why-chose.html">why chose us</a></li>
                                                            <li><a href="elements-working-steps.html">Working steps</a></li>
                                                            <li><a href="elements-feedback.html">feedback</a></li>
                                                            <li><a href="elements-service.html">service</a></li>
                                                            <li><a href="elements-counter.html">counter</a></li>
                                                            <li><a href="elements-case.html">Use case</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a href="javasript:void(0);" class="mega-menu-title">elements Layout 3</a>
                                                        <ul>
                                                            <li><a href="elements-benefits.html">benefits</a></li>
                                                            <li><a href="elements-cta.html">Call To Action</a></li>
                                                            <li><a href="elements-our-offers.html">our Offers</a></li>
                                                            <li><a href="elements-features.html">Key features</a></li>
                                                            <li><a href="elements-form.html">form</a></li>
                                                            <li><a href="elements-footer.html">Footer Style</a></li>
                                                            <li><a href="#">More Coming</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="contact.html">Contact</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header__right">
                        <div class="header__action d-flex align-items-center">
                            <div class="header__btn-wrap d-none d-xl-inline-flex">
                                <a class="sub__btn" href="login.html">Log In</a>
                                <a class="bd-gradient-btn" href="contact.html">Get Started</a>
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
                        <h2 class="section__title">Contact Form</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact form area start -->
    <div class="contact__area section-space-bottom">
        <div class="container">
            <div class="row gy-50 align-items-center wow fadeIn" data-wow-delay=".3s">
                <div class="col-xxl-6 col-xl-6 col-lg-7 mx-auto">
                    <div class="contact__wrapper">
                        <div class="contact__form">
                            <form id="contact-form" action="https://html.bdevs.net/finwise-prev/assets/mail.php" method="POST">
                                <div class="contact__input-wrapper">
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                                            <div class="contact__input-box mb-15">
                                                <div class="contact__input-title">
                                                    <label for="name">first name<span>*</span></label>
                                                </div>
                                                <div class="contact__input">
                                                    <input name="name" id="name" type="text" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                                            <div class="contact__input-box mb-15">
                                                <div class="contact__input-title">
                                                    <label for="lname">Last name<span>*</span></label>
                                                </div>
                                                <div class="contact__input">
                                                    <input name="lastname" id="lname" type="text" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                                            <div class="contact__input-box mb-15">
                                                <div class="contact__input-title">
                                                    <label for="name">business email<span>*</span></label>
                                                </div>
                                                <div class="contact__input">
                                                    <input name="email" id="email" type="email" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                                            <div class="contact__input-box mb-15">
                                                <div class="contact__input-title">
                                                    <label for="pnumber">phone number<span>*</span></label>
                                                </div>
                                                <div class="contact__input">
                                                    <input name="phonenumber" id="pnumber" type="tel" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="contact__input-box mb-15">
                                                <div class="contact__input-title">
                                                    <label for="cname">company name<span>*</span></label>
                                                </div>
                                                <div class="contact__input">
                                                    <input name="companyname" id="cname" type="text" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="contact__input-box mb-15 mb-20">
                                                <div class="contact__input-title">
                                                    <label>Number of employees<span>*</span></label>
                                                </div>
                                                <div class="contact__select">
                                                    <select>
                                                        <option>Self-employed</option>
                                                        <option>1-10 employees</option>
                                                        <option>11-50 employees</option>
                                                        <option>51-200 employees</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="contact__input-box mb-25">
                                                <div class="contact__input-title">
                                                    <label for="cuname">Country (optional)<span>*</span></label>
                                                </div>
                                                <div class="contact__input">
                                                    <input name="countryname" id="cuname" type="text" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact__btn">
                                    <button class="bd-gradient-btn w-100" type="submit">Send Message</button>
                                </div>
                            </form>
                            <p class="ajax-response"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact form area end -->

    <!-- Login area start -->
    <section class="login__area section-space-bottom">
        <div class="container">
            <div class="login__wrapper text-center mx-auto">
                <div class="login__intro mb-40">
                    <h3 class="login__title">Welcome Again</h3>
                    <p>Enter your credentials to acces your account</p>
                </div>
                <form action="#">
                    <div class="login__input mb-25">
                        <input type="email" placeholder="hello@finwise.com">
                    </div>
                    <div class="login__input mb-25">
                        <input type="password" placeholder="Password">
                    </div>
                    <div class="login__option mb-20 d-sm-flex justify-content-between">
                        <div class="login__remember">
                            <input type="checkbox" id="login">
                            <label for="login">Remember me</label>
                        </div>
                        <div class="login__forgot">
                            <a href="forgot.html">Forgot password?</a>
                        </div>
                    </div>
                    <div class="login__submit mb-25">
                        <button class="bd-gradient-btn w-100" type="submit">Send Message</button>
                    </div>
                    <div class="login__divider mb-25">
                        <div class="divider__line"></div>
                        <div class="or">or</div>
                        <div class="divider__line"></div>
                    </div>
                    <div class="login__gamil mb-30">
                        <button class="login__gamil-btn" type="submit"><span><svg width="16" height="16" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.9978 9.69089C17.9978 9.04696 17.9472 8.39954 17.8393 7.76605H9.17969V11.4138H14.1386C13.9328 12.5903 13.2717 13.6311 12.3035 14.2924V16.6593H15.262C16.9993 15.0094 17.9978 12.5729 17.9978 9.69089Z" fill="#4285F4"></path>
                        <path d="M9.18072 18.9462C11.6568 18.9462 13.745 18.1074 15.2664 16.6594L12.3079 14.2925C11.4848 14.8703 10.4221 15.1975 9.1841 15.1975C6.78897 15.1975 4.75817 13.5302 4.02951 11.2886H0.976562V13.7286C2.53508 16.9274 5.70947 18.9462 9.18072 18.9462Z" fill="#34A853"></path>
                        <path d="M4.02618 11.2886C3.64161 10.1122 3.64161 8.83821 4.02618 7.66173V5.22174H0.976605C-0.325535 7.89841 -0.325535 11.0519 0.976605 13.7286L4.02618 11.2886Z" fill="#FBBC04"></path>
                        <path d="M9.18072 3.74937C10.4896 3.72849 11.7546 4.23668 12.7026 5.16951L15.3237 2.46499C13.664 0.856896 11.4612 -0.0272074 9.18072 0.00063836C5.70947 0.00063836 2.53508 2.01946 0.976562 5.22172L4.02613 7.6617C4.75142 5.41664 6.78559 3.74937 9.18072 3.74937Z" fill="#EA4335"></path>
                        </svg></span>
                            Sign in with Google
                        </button>
                    </div>
                    <div class="log__not-account">
                        <p>Don’t have an account? <a href="register.html"> Register Now</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Login area end -->

    <!-- Register area start -->
    <section class="register__area section-space-bottom">
        <div class="container">
            <div class="login__wrapper text-center mx-auto">
                <div class="login__intro mb-40">
                    <h3 class="login__title">Create Your account</h3>
                    <p>You can signup with you social account below</p>
                </div>
                <form action="#">
                    <div class="login__input mb-25">
                        <input type="email" placeholder="hello@finwise.com">
                    </div>
                    <div class="login__input mb-25">
                        <input type="password" placeholder="Enter your email">
                    </div>
                    <div class="login__input mb-25">
                        <input type="password" placeholder="Password">
                    </div>
                    <div class="login__input mb-25">
                        <input type="password" placeholder="Confirm Password">
                    </div>
                    <div class="login__option mb-20 d-sm-flex justify-content-between">
                        <div class="login__remember">
                            <input type="checkbox" id="login-2">
                            <label for="login-2">Remember me</label>
                        </div>
                    </div>
                    <div class="login__submit mb-25">
                        <button class="bd-gradient-btn w-100" type="submit">Send Message</button>
                    </div>
                    <div class="login__divider mb-25">
                        <div class="divider__line"></div>
                        <div class="or">or</div>
                        <div class="divider__line"></div>
                    </div>
                    <div class="login__gamil mb-25">
                        <button class="login__gamil-btn" type="submit"><span><svg width="16" height="16" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.9978 9.69089C17.9978 9.04696 17.9472 8.39954 17.8393 7.76605H9.17969V11.4138H14.1386C13.9328 12.5903 13.2717 13.6311 12.3035 14.2924V16.6593H15.262C16.9993 15.0094 17.9978 12.5729 17.9978 9.69089Z" fill="#4285F4"></path>
                        <path d="M9.18072 18.9462C11.6568 18.9462 13.745 18.1074 15.2664 16.6594L12.3079 14.2925C11.4848 14.8703 10.4221 15.1975 9.1841 15.1975C6.78897 15.1975 4.75817 13.5302 4.02951 11.2886H0.976562V13.7286C2.53508 16.9274 5.70947 18.9462 9.18072 18.9462Z" fill="#34A853"></path>
                        <path d="M4.02618 11.2886C3.64161 10.1122 3.64161 8.83821 4.02618 7.66173V5.22174H0.976605C-0.325535 7.89841 -0.325535 11.0519 0.976605 13.7286L4.02618 11.2886Z" fill="#FBBC04"></path>
                        <path d="M9.18072 3.74937C10.4896 3.72849 11.7546 4.23668 12.7026 5.16951L15.3237 2.46499C13.664 0.856896 11.4612 -0.0272074 9.18072 0.00063836C5.70947 0.00063836 2.53508 2.01946 0.976562 5.22172L4.02613 7.6617C4.75142 5.41664 6.78559 3.74937 9.18072 3.74937Z" fill="#EA4335"></path>
                        </svg></span>
                            Sign in with Google
                        </button>
                    </div>
                    <div class="log__not-account">
                        <p>Already have an account?<a href="login.html"> Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Register area end -->

    <!-- Forgot area start -->
    <section class="forgot__area section-space-bottom">
        <div class="container">
            <div class="login__wrapper text-center mx-auto">
                <div class="login__intro mb-40">
                    <h3 class="login__title">Forgot Password?</h3>
                    <p>Enter your email address to request password reset</p>
                </div>
                <form action="#">
                    <div class="login__input mb-25">
                        <input type="password" placeholder="Password">
                    </div>
                    <div class="login__submit mb-25">
                        <button class="bd-gradient-btn w-100" type="submit">Send Request</button>
                    </div>
                    <div class="log__not-account">
                        <p>Remember your password?<a href="login.html"> Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Forgot area end -->

    <!-- Brand area start -->
    <div class="brand__area-6 theme-bg-1 section-rounded-60 section-space">
        <div class="container">
            <div class="swiper brnad__active">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand__item text-center">
                            <div class="brand__thumb">
                                <img src="assets/imgs/brand/brand-01.png" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item text-center">
                            <div class="brand__thumb">
                                <img src="assets/imgs/brand/brand-02.png" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item text-center">
                            <div class="brand__thumb">
                                <img src="assets/imgs/brand/brand-03.png" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item text-center">
                            <div class="brand__thumb">
                                <img src="assets/imgs/brand/brand-04.png" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item text-center">
                            <div class="brand__thumb">
                                <img src="assets/imgs/brand/brand-05.png" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item text-center">
                            <div class="brand__thumb">
                                <img src="assets/imgs/brand/brand-06.png" alt="image not found">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand__item text-center">
                            <div class="brand__thumb">
                                <img src="assets/imgs/brand/brand-02.png" alt="image not found">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand area end -->

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
