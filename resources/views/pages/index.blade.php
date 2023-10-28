@extends('pages.layout.app')
@section('content')

<main>

    <!-- hero area start -->
    <section class="tp-hero-area p-relative">
        <div class="tp-hero-wrapper-slider">
            <div class="tp-hero-active swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide pt-160 pb-115" data-bg-color="#16243E">
                        <div class="tp-hero-bg" data-background="{{ asset('front/assets/img/hero/shape-bg.png') }}"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="tp-hero-content p-relative">
                                        <div class="tp-hero-title-wrapper">
                                            <span class="tp-hero-subtitle">Welcome</span>
                                            <h2 class="tp-hero-title">Go from financial stress to financial yes</h2>
                                            <p>Take control with a new {{ env('APP_NAME') }} checking account</p>
                                        </div>
                                        <div class="tp-hero-button-wrapper d-flex flex-wrap align-items-center">
                                            <div class="tp-hero-btn mr-30">
                                                <a class="tp-btn" target="_blank" href="{{ route('personalInfo') }}">Get Started <span><i class="fa-regular fa-plus"></i></span></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="tp-hero-thumb p-relative">
                                        <div class="tp-hero-thumb-shape">
                                            <img class="shape-1" src="{{ asset('front/assets/img/hero/shape-2.png') }}" alt="">
                                            <img class="shape-2" src="{{ asset('front/assets/img/hero/shape-1.png') }}" alt="">
                                            <img class="shape-3" src="{{ asset('front/assets/img/hero/shape-1.png') }}" alt="">
                                        </div>
                                        <img src="{{ asset('front/assets/img/hero/img-1.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide pt-160 pb-115" data-bg-color="#16243E">
                        <div class="tp-hero-bg" data-background="{{ asset('front/assets/img/hero/shape-bg.png') }}"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="tp-hero-content p-relative">
                                        <div class="tp-hero-title-wrapper">
                                            <span class="tp-hero-subtitle">Your success is our dream</span>
                                            <h2 class="tp-hero-title">Are you ready?</h2>
                                            <p>{{ env('APP_NAME') }} included multiple features</p>
                                        </div>
                                        <div class="tp-hero-button-wrapper d-flex flex-wrap align-items-center">
                                            <div class="tp-hero-btn mr-30">
                                                <a class="tp-btn" href="{{ route('login') }}">Login
                                                    <span><i class="fa-regular fa-plus"></i></span></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="tp-hero-thumb p-relative">
                                        <div class="tp-hero-thumb-shape">
                                            <img class="shape-1" src="{{ asset('front/assets/img/hero/shape-2.png') }}" alt="">
                                            <img class="shape-2" src="{{ asset('front/assets/img/hero/shape-1.png') }}" alt="">
                                            <img class="shape-3" src="{{ asset('front/assets/img/hero/shape-1.png') }}" alt="">
                                        </div>
                                        <img src="{{ asset('front/assets/img/hero/img-2.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide pt-160 pb-115" data-bg-color="#16243E">
                        <div class="tp-hero-bg" data-background="{{ asset('front/assets/img/hero/shape-bg.png') }}"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7">
                                    <div class="tp-hero-content p-relative">
                                        <div class="tp-hero-title-wrapper">
                                            <span class="tp-hero-subtitle">Do you need a new</span>
                                            <h2 class="tp-hero-title">Banking on the go</h2>
                                            <p>{{ env('APP_NAME') }} included multiple features</p>
                                        </div>
                                        <div class="tp-hero-button-wrapper d-flex flex-wrap align-items-center">
                                            <div class="tp-hero-btn mr-30">
                                                <a class="tp-btn" href="{{ route('personalInfo') }}">Join Us Today <span><i class="fa-regular fa-plus"></i></span></a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5">
                                    <div class="tp-hero-thumb p-relative">
                                        <div class="tp-hero-thumb-shape">
                                            <img class="shape-1" src="{{ asset('front/assets/img/hero/shape-2.png') }}" alt="">
                                            <img class="shape-2" src="{{ asset('front/assets/img/hero/shape-1.png') }}" alt="">
                                            <img class="shape-3" src="{{ asset('front/assets/img/hero/shape-1.png') }}" alt="">
                                        </div>
                                        <img src="{{ asset('front/assets/img/hero/img-3.jpg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tp-hero-nav">
                <button type="button" class="hero-button-prev-1"><i class="fa-regular fa-arrow-left"></i>
                </button>
                <button type="button" class="hero-button-next-1"><i class="fa-regular fa-arrow-right"></i>
                </button>
            </div>
            <div class="tp-hero-pagination"></div>
        </div>
    </section>
    <!-- hero area end -->
    <section class="tp-service-area pt-120 pb-90" data-bg-color="#F6F6F9">
        <div class="container">
            <div class="row">


                <div class="tp-service-active swiper-container wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="swiper-wrapper mb-30 mt-40">
                        <div class="swiper-slide">
                            <div class="tp-service-item-wrapper p-relative">
                                <div>
                                 <span>
                                    <img src="{{ asset('img/icon-nest-egg.png') }}" alt="">
                                 </span>
                                </div>
                                <div class="tp-service-item-content">
                                    <h4 class="tp-service-item-title"><a >Loan Request</a></h4>
                                    <p>
                                        From auto loans and home equity lines to our simple online LightStream loan products, we've got a loan with competitive rates that will work for you. We 'll help you choose a loan that puts you one step closer to financial confidence.
                                    </p>
                                </div>
                                <div class="tp-service-item-thumb">
                                    <a href="service-details.html">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tp-service-item-wrapper p-relative">
                                <div >
                                 <span>
                                    <img src="{{ asset('img/icon-better-checking-savings.png') }}" alt="">
                                 </span>
                                </div>
                                <div class="tp-service-item-content">
                                    <h4 class="tp-service-item-title"><a >I want to save or invest</a></h4>
                                    <p>
                                        Our strategic alliances with local and offshore financial institutions puts us in very good stead to finance companies and projects of varying sizes and position ourselves as major players in that field..
                                    </p>
                                </div>
                                <div class="tp-service-item-thumb">
                                    <a href="service-details.html">View More</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tp-service-item-wrapper p-relative">
                                <div >
                                 <span>
                                   <img src="{{ asset('img/icon-fast-easy-banking_0.png') }}" alt="">
                                 </span>
                                </div>
                                <div class="tp-service-item-content">
                                    <h4 class="tp-service-item-title"><a >Fast and easy banking</a></h4>
                                    <p> With online and mobile banking, our extensive ATM network, and convenient bank locations, your day-to-day banking won't slow you down. No matter what your banking needs are, we've got an account that fits.</p>
                                </div>
                                <div class="tp-service-item-thumb">
                                    <a href="service-details.html">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <!-- about area start -->
    <section class="tp-about-area p-relative pt-130 pb-210">
        <div class="tp-about-shape">
            <img src="{{ asset('front/assets/img/about/shape-3.png') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tp-about-thumb-wrapper p-relative wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="main">
                            <img src="{{ asset('front/assets/img/about/img-1.jpg') }}" alt="">
                        </div>
                        <img class="shape-1" src="{{ asset('front/assets/img/about/img-2.jpg') }}" alt="">
                        <img class="shape-2" src="{{ asset('front/assets/img/about/shape-1.png') }}" alt="">
                        <img class="shape-3" src="{{ asset('front/assets/img/about/shape-2.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tp-about-wrapper">
                        <div class="tp-about-title-wrapper">
                            <span class="tp-section-title-pre">BEST SERVICES FOR BEST CLIENTS</span>
                            <h3 class="tp-section-title">THE SECURE WAY TO :
                                EASY BANKING</h3>
                        </div>
                        <p>{{ env('APP_NAME') }} is digitally sharp. The money we save by not having branches means banking with us is much cheaper. So bank with us online, on our banking app, using cell phone banking.

                        </p>

                        <div class="tp-about-btn">
                            <a class="tp-btn" href="{{ route('login') }}">Login <span><i class="fa-regular fa-plus"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end -->


    <!-- service area start -->
    <section class="tp-service-area pt-120 pb-90" data-bg-color="#F6F6F9">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <div class="tp-service-title-wrapper mb-40">
                        <h3 class="tp-section-title">Keep informed and updated on all news related to your bank.

                        </h3>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="tp-service-nav text-end">
                        <button type="button" class="service-button-prev-1"><i class="fa-regular fa-arrow-left"></i>
                        </button>
                        <button type="button" class="service-button-next-1"><i class="fa-regular fa-arrow-right"></i>
                        </button>
                    </div>
                </div>

                <div class="tp-service-active swiper-container wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                    <div class="swiper-wrapper mb-30 mt-40">
                        <div class="swiper-slide">
                            <div class="tp-service-item-wrapper p-relative">

                                <div class="tp-service-item-thumb">
                                    <a href="service-details.html"><img src="{{ asset('front/assets/img/service/img-1.jpg') }}" alt=""></a>
                                </div>
                                <div class="tp-service-item-content">
                                    <h4 class="tp-service-item-title"><a >Protection With you</a></h4>
                                    <p>Find all the support and information they need to make all decisions about saving for your future.
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tp-service-item-wrapper p-relative">
                                <div class="tp-service-item-thumb">
                                    <a href="service-details.html"><img src="{{ asset('front/assets/img/service/img-2.jpg') }}" alt=""></a>
                                </div>
                                <div class="tp-service-item-content">
                                    <h4 class="tp-service-item-title"><a >For your future</a></h4>
                                    <p>Meet here all our range of products and services, rules of our products and everything related to your savings in pension.</p>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tp-service-item-wrapper p-relative">
                                <div class="tp-service-item-thumb">
                                    <a href="service-details.html"><img src="{{ asset('front/assets/img/service/img-3.jpg') }}" alt=""></a>
                                </div>
                                <div class="tp-service-item-content">
                                    <h4 class="tp-service-item-title"><a href="service-details.html">Zone Saver</a></h4>
                                    <p>Accompany relevant share you mean, renewed and information of interest to learn to save you and your projects come true.

                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- service area end -->


    <!-- brand area start -->
    <div class="tp-brand-area tp-brand-background p-relative pb-120">
        <div class="container">
            <div class="tp-brand-wrapper p-relative wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" data-background="assets/img/brand/bg-shape.png">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="tp-brand-thumb">
                            <img src="assets/img/brand/img-1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="tp-brand-thumb">
                            <img src="assets/img/brand/img-2.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="tp-brand-thumb text-center">
                            <img src="assets/img/brand/img-3.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="tp-brand-thumb text-lg-end">
                            <img src="assets/img/brand/img-4.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand area end -->


    <!-- project area start -->
    <section class="tp-project-area pb-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tp-project-title-wrapper text-center mb-30">
                        <span class="tp-section-title-pre">our latest project</span>
                        <h3 class="tp-section-title">Together we can achieve <br> anything</h3>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tp-project-tab-wrapper">
                        <ul class="nav nav-pills mb-60 justify-content-center wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">All Project</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-Architecher" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Architecher</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-Large" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Large</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-Interiour-tab" data-bs-toggle="pill" data-bs-target="#pills-Interiour" type="button" role="tab" aria-controls="pills-Interiour" aria-selected="false">Interiour</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-House-tab" data-bs-toggle="pill" data-bs-target="#pills-House" type="button" role="tab" aria-controls="pills-House" aria-selected="false">House</button>
                            </li>
                        </ul>

                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="tp-project-thumb mb-25">
                                            <img src="assets/img/project/img-1.jpg" alt="">
                                            <div class="tp-project-thumb-info">
                                                <p>Our Projects</p>
                                                <h4 class="tp-project-thumb-title"><a href="project-details.html">Women Entrepreneurs</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="tp-project-thumb mb-25">
                                            <img src="assets/img/project/img-2.jpg" alt="">
                                            <div class="tp-project-thumb-info">
                                                <p>Our Projects</p>
                                                <h4 class="tp-project-thumb-title"><a href="project-details.html">Financial Planning</a></h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="tp-project-thumb small mb-25">
                                                    <img src="assets/img/project/img-3.jpg" alt="">
                                                    <div class="tp-project-thumb-info">
                                                        <p>Our Projects</p>
                                                        <h4 class="tp-project-thumb-title"><a href="project-details.html">Investment Planning</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="tp-project-thumb small mb-25">
                                                    <img src="assets/img/project/img-4.jpg" alt="">
                                                    <div class="tp-project-thumb-info">
                                                        <p>Our Projects</p>
                                                        <h4 class="tp-project-thumb-title"><a href="project-details.html">Wealth Management</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-Architecher" role="tabpanel" aria-labelledby="pills-Architecher-tab">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="tp-project-thumb mb-25">
                                            <img src="assets/img/project/img-5.jpg" alt="">
                                            <div class="tp-project-thumb-info">
                                                <p>Our Projects</p>
                                                <h4 class="tp-project-thumb-title"><a href="project-details.html">Women Entrepreneurs</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="tp-project-thumb mb-25">
                                            <img src="assets/img/project/img-7.jpg" alt="">
                                            <div class="tp-project-thumb-info">
                                                <p>Our Projects</p>
                                                <h4 class="tp-project-thumb-title"><a href="project-details.html">Financial Planning</a></h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="tp-project-thumb small mb-25">
                                                    <img src="assets/img/project/img-9.jpg" alt="">
                                                    <div class="tp-project-thumb-info">
                                                        <p>Our Projects</p>
                                                        <h4 class="tp-project-thumb-title"><a href="project-details.html">Investment Planning</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="tp-project-thumb small mb-25">
                                                    <img src="assets/img/project/img-11.jpg" alt="">
                                                    <div class="tp-project-thumb-info">
                                                        <p>Our Projects</p>
                                                        <h4 class="tp-project-thumb-title"><a href="project-details.html">Wealth Management</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-Large" role="tabpanel" aria-labelledby="pills-Large-tab">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="tp-project-thumb mb-25">
                                            <img src="assets/img/project/img-15.jpg" alt="">
                                            <div class="tp-project-thumb-info">
                                                <p>Our Projects</p>
                                                <h4 class="tp-project-thumb-title"><a href="project-details.html">Women Entrepreneurs</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="tp-project-thumb mb-25">
                                            <img src="assets/img/project/img-2.jpg" alt="">
                                            <div class="tp-project-thumb-info">
                                                <p>Our Projects</p>
                                                <h4 class="tp-project-thumb-title"><a href="project-details.html">Investment Planning</a></h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="tp-project-thumb small mb-25">
                                                    <img src="assets/img/project/img-3.jpg" alt="">
                                                    <div class="tp-project-thumb-info">
                                                        <p>Our Projects</p>
                                                        <h4 class="tp-project-thumb-title"><a href="project-details.html">Financial Planning</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="tp-project-thumb small mb-25">
                                                    <img src="assets/img/project/img-4.jpg" alt="">
                                                    <div class="tp-project-thumb-info">
                                                        <p>Our Projects</p>
                                                        <h4 class="tp-project-thumb-title"><a href="project-details.html">Wealth Management</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-Interiour" role="tabpanel" aria-labelledby="pills-Interiour-tab">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="tp-project-thumb mb-25">
                                            <img src="assets/img/project/img-6.jpg" alt="">
                                            <div class="tp-project-thumb-info">
                                                <p>Our Projects</p>
                                                <h4 class="tp-project-thumb-title"><a href="project-details.html">Financial Planning</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="tp-project-thumb mb-25">
                                            <img src="assets/img/project/img-8.jpg" alt="">
                                            <div class="tp-project-thumb-info">
                                                <p>Our Projects</p>
                                                <h4 class="tp-project-thumb-title"><a href="project-details.html">Women Entrepreneurs</a></h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="tp-project-thumb small mb-25">
                                                    <img src="assets/img/project/img-10.jpg" alt="">
                                                    <div class="tp-project-thumb-info">
                                                        <p>Our Projects</p>
                                                        <h4 class="tp-project-thumb-title"><a href="project-details.html">Investment Planning</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="tp-project-thumb small mb-25">
                                                    <img src="assets/img/project/img-12.jpg" alt="">
                                                    <div class="tp-project-thumb-info">
                                                        <p>Our Projects</p>
                                                        <h4 class="tp-project-thumb-title"><a href="project-details.html">Wealth Management</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-House" role="tabpanel" aria-labelledby="pills-House-tab">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="tp-project-thumb mb-25">
                                            <img src="assets/img/project/img-14.jpg" alt="">
                                            <div class="tp-project-thumb-info">
                                                <p>Our Projects</p>
                                                <h4 class="tp-project-thumb-title"><a href="project-details.html">Women Entrepreneurs</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="tp-project-thumb mb-25">
                                            <img src="assets/img/project/img-8.jpg" alt="">
                                            <div class="tp-project-thumb-info">
                                                <p>Our Projects</p>
                                                <h4 class="tp-project-thumb-title"><a href="project-details.html">Investment Planning</a></h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="tp-project-thumb small mb-25">
                                                    <img src="assets/img/project/img-9.jpg" alt="">
                                                    <div class="tp-project-thumb-info">
                                                        <p>Our Projects</p>
                                                        <h4 class="tp-project-thumb-title"><a href="project-details.html">Wealth Management</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6">
                                                <div class="tp-project-thumb small mb-25">
                                                    <img src="assets/img/project/img-13.jpg" alt="">
                                                    <div class="tp-project-thumb-info">
                                                        <p>Our Projects</p>
                                                        <h4 class="tp-project-thumb-title"><a href="project-details.html">Financial Planning</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- project area end -->


    <!-- process area start -->
    <section class="tp-process-arae pt-120 pb-120" data-bg-color="#F6F6F9">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tp-process-wrapper">
                        <div class="tp-process-title mb-40">
                            <span class="tp-section-title-pre">Our work process</span>
                            <h3 class="tp-section-title">Strategy is the key to <br> success</h3>
                        </div>
                        <div class="tp-process-item d-flex align-items-center">
                            <div class="tp-process-item-icon">
                              <span>
                                 <img src="assets/img/process/icon-1.svg" alt="">
                              </span>
                            </div>
                            <div class="tp-process-item-content">
                                <h4 class="tp-process-item-title">Best emplementation</h4>
                                <p>Ished fact that a reader will be distrol acted bioiiy desig the.ished fact that a reader will be distrol acted bioiiy bioiiy desig the.ished fact that a reader.</p>
                            </div>
                        </div>
                        <div class="tp-process-item d-flex align-items-center">
                            <div class="tp-process-item-icon">
                              <span>
                                 <img src="assets/img/process/icon-2.svg" alt="">
                              </span>
                            </div>
                            <div class="tp-process-item-content">
                                <h4 class="tp-process-item-title">Design make for you</h4>
                                <p>Ished fact that a reader will be distrol acted bioiiy desig the.ished fact that a reader will be distrol acted bioiiy bioiiy desig the.ished fact that a reader.</p>
                            </div>
                        </div>
                        <div class="tp-process-item d-flex align-items-center">
                            <div class="tp-process-item-icon">
                              <span>
                                 <img src="assets/img/process/icon-3.svg" alt="">
                              </span>
                            </div>
                            <div class="tp-process-item-content">
                                <h4 class="tp-process-item-title">Finished the process</h4>
                                <p>Ished fact that a reader will be distrol acted bioiiy desig the.ished fact that a reader will be distrol acted bioiiy bioiiy desig the.ished fact that a reader.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tp-process-thumb-wrapper p-relative wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="tp-process-thumb p-relative">
                            <div class="main">
                                <img src="assets/img/process/img-1.jpg" alt="">
                            </div>
                            <img class="shape-1" src="assets/img/process/img-2.jpg" alt="">
                        </div>
                        <div class="tp-process-counter d-flex align-items-center">
                            <div class="tp-process-counter-icon">
                              <span>
                                 <i class="flaticon-030-machine-repair"></i>
                              </span>
                            </div>
                            <div class="tp-process-content">
                                <h4 class="tp-process-counter-title"><span class="purecounter" data-purecounter-duration="3" data-purecounter-end="10"></span>k+</h4>
                                <p>Project Complete</p>
                            </div>
                        </div>
                        <div class="tp-process-trusted text-center">
                            <p>Trusted By <br> <span>2345</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- process area end -->


    <!-- faq area start -->
    <section class="tp-faq-area p-relative pt-120 pb-120" data-background="assets/img/faq/bg-shape.png">
        <div class="tp-faq-bg"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="tp-faq-wrapper">
                        <div class="tp-faq-title-wrapper">
                            <span class="tp-section-title-pre">ask anything</span>
                            <h3 class="tp-section-title">You can contact <br> us for any question </h3>
                            <p>Fact that a reader will be distrol acted bioiiy desig the.ished fact that a reader will be distrol acted bioiiy bioiiy desig the.ished fact that a reader ished fact that </p>
                        </div>
                        <div class="tp-faq-counter-wrapper d-flex">
                            <div class="tp-faq-counter d-flex align-items-center mr-20 mb-30">
                                <div class="tp-faq-counter-icon">
                                 <span>
                                    <img src="assets/img/faq/icon-1.svg" alt="">
                                 </span>
                                </div>
                                <div class="tp-faq-counter-content">
                                    <h4 class="tp-faq-counter-title"><span class="purecounter" data-purecounter-duration="3" data-purecounter-end="10"></span>+</h4>
                                    <p>Experiences</p>
                                </div>
                            </div>
                            <div class="tp-faq-counter d-flex align-items-center mb-30">
                                <div class="tp-faq-counter-icon">
                                 <span>
                                    <img src="assets/img/faq/icon-2.svg" alt="">
                                 </span>
                                </div>
                                <div class="tp-faq-counter-content">
                                    <h4 class="tp-faq-counter-title"><span class="purecounter" data-purecounter-duration="2" data-purecounter-end="500"></span>+</h4>
                                    <p>Happy Client</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="tp-faq-tab-content tp-accordion wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                        <div class="accordion" id="general_accordion">
                            <div class="accordion-item tp-faq-active">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is business consulting?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#general_accordion">
                                    <div class="accordion-body">
                                        <p>Business consulting is a service provided by professionals who offer expert advice and guidance to organizations seeking to improve their business processes, strategies, and operations</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        What types of businesses typically use consulting services?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#general_accordion">
                                    <div class="accordion-body">
                                        <p>Business consulting is a service provided by professionals who offer expert advice and guidance to organizations seeking to improve their business processes, strategies, and operations</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        What are the benefits of using a business consulting service?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#general_accordion">
                                    <div class="accordion-body">
                                        <p>Business consulting is a service provided by professionals who offer expert advice and guidance to organizations seeking to improve their business processes, strategies, and operations</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        How much do consulting services cost?
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#general_accordion">
                                    <div class="accordion-body">
                                        <p>Business consulting is a service provided by professionals who offer expert advice and guidance to organizations seeking to improve their business processes, strategies, and operations</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq area end -->



    <!-- testimonial area start -->
    <section class="tp-testimonial-area tp-testimonial-bg-color p-relative pt-80 pb-50" data-bg-color="#F6F6F9">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tp-testimonial-title">
                        <span class="tp-section-title-pre">Clients Testomonial</span>
                        <h3 class="tp-section-title">Unleashing the power of <br> your business</h3>
                    </div>
                </div>
                <div class="tp-testimonial-active swiper-container">
                    <div class="swiper-wrapper mb-30 mt-20">
                        <div class="swiper-slide">
                            <div class="tp-testimonial-item-wrapper d-flex align-items-center">

                                <div class="tp-testimonial-item-content p-relative">
                                    <div class="tp-testimonial-item-rating">
                                        <span class="color"><i class="fa-solid fa-star"></i></span>
                                        <span class="color"><i class="fa-solid fa-star"></i></span>
                                        <span class="color"><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                    </div>
                                    <p>Don't just take our word for it hear what our customers have to say about us! we have helped thousand people Don't just take our </p>
                                    <h4 class="tp-testimonial-item-title">Hardli sefa</h4>
                                    <span>Customer</span>

                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="tp-testimonial-item-wrapper d-flex align-items-center">
                                <div class="tp-testimonial-item-thumb">
                                    <img src="assets/img/testimonial/img-2.jpg" alt="">
                                </div>
                                <div class="tp-testimonial-item-content p-relative">
                                    <div class="tp-testimonial-item-rating">
                                        <span class="color"><i class="fa-solid fa-star"></i></span>
                                        <span class="color"><i class="fa-solid fa-star"></i></span>
                                        <span class="color"><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                    </div>
                                    <p>Don't just take our word for it hear what our customers have to say about us! we have helped thousand people Don't just take our </p>
                                    <h4 class="tp-testimonial-item-title">Sahanaz sakil</h4>
                                    <span>Customer</span>
                                    <div class="tp-testimonial-item-quot">
                                        <img src="assets/img/testimonial/quot.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tp-testimonial-nav text-end">
                    <button type="button" class="testimonial-button-prev-1"><i class="fa-regular fa-arrow-left"></i>
                    </button>
                    <button type="button" class="testimonial-button-next-1"><i class="fa-regular fa-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial area end -->


    <!-- cta area start -->
    <section class="tp-cta-area p-relative">
        <div class="tp-cta-bg"></div>
        <div class="container">
            <div class="tp-cta-bg-wrapper p-relative" data-background="assets/img/cta/bg-shape.png">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="tp-cta-title">Get notified about the event! <br> Subscribe today</h3>
                    </div>
                    <div class="col-lg-6">
                        <div class="tp-cta-email p-relative">
                            <input type="email" placeholder="Email Address">
                            <button> <span><i class="fa-solid fa-envelope"></i> Subscribe</span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta area end -->

</main>

@endsection
