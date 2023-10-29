@extends('pages.layout.app')
@section('content')

    <main>

        <!-- Blog Details breadcrumb area start -->
        <section class="breadcrumb__area pt-165 pb-150 p-relative z-index-1 fix" data-bg-color="#16243E" style="background-color: rgb(22, 36, 62);">
            <div class="breadcrumb__bg" data-background="assets/img/breadcrumb/bg.png" style="background-image: url(&quot;assets/img/breadcrumb/bg.png&quot;);"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="breadcrumb__content">
                            <h3 class="breadcrumb__title">BUSINESS CHECKING ACCOUNTS</h3>
                            <p class="text-white">
                                SOLUTIONS THAT WORK AS HARD AS YOU DO.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Blog Details breadcrumb area end -->


        <!-- postbox area start -->
        <section class="tp-postbox-area pt-120 pb-120">

            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" >
                            <img src="{{ asset('img/7.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Micro Business Checking
                                </h5>
                                <p class="card-text">
                                    Perfect for low-volume businesses, like startup companies.
                                </p>
                            </div>
                            <ul class="list-group list-group-flush list-group-numbered">
                                <li class="list-group-item">No minimum opening balance required</li>
                                <li class="list-group-item">Free debit card & online banking</li>
                                <li class="list-group-item">Free eStatements</li>
                                <li class="list-group-item">50 free transactions per month</li>
                                <li class="list-group-item">15 free basic Bill Pay items</li>
                            </ul>
                            <div class="card-body">
                                <a href="{{ route('personalInfo') }}" class="btn btn-info">Open Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" >
                            <img src="{{ asset('img/8.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Basic Business Checking
                                </h5>
                                <p class="card-text">
                                    An ideal checking option for low to medium volume business accounts.
                                </p>
                            </div>
                            <ul class="list-group list-group-flush list-group-numbered">
                                <li class="list-group-item">No minimum opening balance required</li>
                                <li class="list-group-item">Free debit card & online banking</li>
                                <li class="list-group-item">Free eStatements</li>
                                <li class="list-group-item">200 free transactions per month</li>
                                <li class="list-group-item">15 free basic Bill Pay items</li>
                            </ul>
                            <div class="card-body">
                                <a href="{{ route('personalInfo') }}" class="btn btn-info">Open Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" >
                            <img src="{{ asset('img/9.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Business Benefit Checking
                                </h5>
                                <p class="card-text">
                                    A great solution for growing companies with medium volume business accounts.
                                </p>
                            </div>
                            <ul class="list-group list-group-flush list-group-numbered">
                                <li class="list-group-item">No minimum balance requirements</li>
                                <li class="list-group-item">Free debit card & online banking</li>
                                <li class="list-group-item">Free eStatements & standard checks</li>
                                <li class="list-group-item">Free debit card & online banking</li>
                                <li class="list-group-item">15 free basic Bill Pay items</li>
                            </ul>
                            <div class="card-body">
                                <a href="{{ route('personalInfo') }}" class="btn btn-info">Open Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card" >
                            <img src="{{ asset('img/10.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Business Benefit Checking
                                </h5>
                                <p class="card-text">
                                    A great solution for growing companies with medium volume business accounts.
                                </p>
                            </div>
                            <ul class="list-group list-group-flush list-group-numbered">
                                <li class="list-group-item">No minimum balance requirements</li>
                                <li class="list-group-item">Free debit card & online banking</li>
                                <li class="list-group-item">Free eStatements & standard checks</li>
                                <li class="list-group-item">Free debit card & online banking</li>
                                <li class="list-group-item">15 free basic Bill Pay items</li>
                            </ul>
                            <div class="card-body">
                                <a href="{{ route('personalInfo') }}" class="btn btn-info">Open Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">

                    <div class="col-xxl-8 col-xl-8 col-lg-8">
                        <div class="tp-postbox-wrapper">
                            <article class="tp-postbox-item-wrapper mb-80">

                                <h3 class="tp-postbox-title2">Features Account:</h3>
                                <p>It is an account to manage your salary and help you organize your money, let him have a monthly savings while enjoying many other benefits:</p>

                                <div class="tp-sidebar-widget-content mt-3 mb-3">
                                    <ul>
                                        <li><a ><i class="fa-solid fa-chevrons-right"></i> No management fee or handling.</a></li>
                                        <li><a ><i class="fa-solid fa-chevrons-right"></i> It allows you to separate your savings silver in the same account, without needing an additional product.</a></li>
                                        <li><a ><i class="fa-solid fa-chevrons-right"></i> Unlimited free consultations through our Amiga, Website, Mobile Banking and Mobile Application Line (downloading our app for smartphones).</a></li>
                                        <li><a ><i class="fa-solid fa-chevrons-right"></i> Free notifications.</a></li>
                                    </ul>
                                </div>
                                <hr>
                                <h4>More Features</h4>
                                <div class="tp-sidebar-widget-content mt-3 mb-3">
                                    <ul>
                                        <li><a ><i class="fa-solid fa-chevrons-right"></i> For security, you will receive a text message to the phone and / or email that tells about transactions equal to or greater than $ 50,000 for retirement amounts, deposits and $ 100,000 to 200,000 for purchases.</a></li>
                                        <li><a ><i class="fa-solid fa-chevrons-right"></i> Free all transfers between the pocket and the saving account.</a></li>
                                        <li><a ><i class="fa-solid fa-chevrons-right"></i> Set the savings from $ 5,000 monthly or fortnightly on the "pocket saving" Salary Account My friend; in the time you need will be available.</a></li>
                                        <li><a ><i class="fa-solid fa-chevrons-right"></i> Chip debit card has to perform all their transactions safely.</a></li>
                                    </ul>
                                </div>

                            </article>


                        </div>
                    </div>

                    <div class="col-xxl-4 col-xl-4 col-lg-4">
                        <div class="tp-sidebar-wrapper">

                            <div class="tp-sidebar-widget mb-40">
                                <div class="tp-sidebar-widget-content">
                                    <div class="tp-sidebar-post tp-rc__post">
                                        <div class="tp-rc__post d-flex align-items-center">
                                            <div class="tp-rc__post-content">
                                                <h3 class="tp-rc__post-title">
                                                    <a href="mailto:info@ctbcommerce"><i class="fa-regular fa-envelope"></i> info@ctbcommerce</a>
                                                </h3>
                                                <div class="tp-rc__post-meta">
                                                    <span><i class="fa-regular fa-phone"></i>  +1 718-255-9168</span>
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
        <!-- postbox area end -->


    </main>

@endsection
