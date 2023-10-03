
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>Dashmix - Bootstrap 5 Admin Template &amp; UI Framework</title>

    <meta name="description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Dashmix">
    <meta property="og:description" content="Dashmix - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Fonts and Dashmix framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ asset('assets/css/dashmix.min.css') }}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/xwork.min.css"> -->
    <link rel="stylesheet" id="css-theme" href="{{ asset('assets/css/themes/xdream.min.css') }}">
    <!-- END Stylesheets -->
</head>
<body>
<!-- Page Container -->

<div id="page-container" class="sidebar-o side-scroll page-header-fixed page-header-dark main-content-boxed">

    <!-- Sidebar -->

    <nav id="sidebar" aria-label="Main Navigation">
        <!-- Side Header (mini Sidebar mode) -->
        <div class="smini-visible-block">
            <div class="content-header bg-header-dark">
                <!-- Logo -->
                <a class="fw-semibold text-white tracking-wide" href="{{ route('index') }}">
                    D<span class="opacity-75">x</span>
                </a>
                <!-- END Logo -->
            </div>
        </div>
        <!-- END Side Header (mini Sidebar mode) -->

        <!-- Side Header (normal Sidebar mode) -->
        <div class="smini-hidden">
            <div class="content-header justify-content-lg-center bg-header-dark">
                <!-- Logo -->
                <a class="fw-semibold text-white tracking-wide" href="{{ route('index') }}">
                    Dash<span class="opacity-75">mix</span>
                    <span class="fw-normal">Banking</span>
                </a>
                <!-- END Logo -->

                <!-- Options -->
                <div class="d-lg-none">
                    <!-- Close Sidebar, Visible only on mobile screens -->
                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none" data-toggle="layout" data-action="sidebar_close">
                        <i class="fa fa-times-circle"></i>
                    </button>
                    <!-- END Close Sidebar -->
                </div>
                <!-- END Options -->
            </div>
        </div>
        <!-- END Side Header (normal Sidebar mode) -->

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
            <!-- Side Actions -->
            <div class="content-side content-side-full text-center bg-body-light">
                <div class="smini-hide">
                    <img class="img-avatar" src="assets/media/avatars/avatar10.jpg" alt="">
                    <div class="mt-3 fw-semibold">Henry Harrison</div>
                    <a class="link-fx text-muted" href="javascript:void(0)">$ 49.680,00</a>
                </div>
            </div>
            <!-- END Side Actions -->

            <!-- Side Navigation -->
            <div class="content-side">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link active" href="{{ route('user.dashboard') }}">
                            <i class="nav-main-link-icon fa fa-rocket"></i>
                            <span class="nav-main-link-name">Overview</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">Manage</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-piggy-bank"></i>
                            <span class="nav-main-link-name">Accounts</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="">
                                    <span class="nav-main-link-name">Active</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="">
                                    <span class="nav-main-link-name">Manage</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="">
                                    <i class="nav-main-link-icon fa fa-plus-circle"></i>
                                    <span class="nav-main-link-name">New Account</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-money-check"></i>
                            <span class="nav-main-link-name">Cards</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="">
                                    <span class="nav-main-link-name">Approved</span>
                                    <span class="nav-main-link-badge badge rounded-pill bg-success">3</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="">
                                    <span class="nav-main-link-name">Pending</span>
                                    <span class="nav-main-link-badge badge rounded-pill bg-warning">1</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="">
                                    <span class="nav-main-link-name">Manage</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="">
                                    <i class="nav-main-link-icon fa fa-plus-circle"></i>
                                    <span class="nav-main-link-name">New Card</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-money-bill"></i>
                            <span class="nav-main-link-name">Payments</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="">
                                    <span class="nav-main-link-name">Scheduled</span>
                                    <span class="nav-main-link-badge badge rounded-pill bg-success">2</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="">
                                    <span class="nav-main-link-name">Recurring</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="">
                                    <span class="nav-main-link-name">Manage</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="">
                                    <i class="nav-main-link-icon fa fa-plus-circle"></i>
                                    <span class="nav-main-link-name">New Payment</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#">
                            <i class="nav-main-link-icon fa fa-money-bill-wave-alt"></i>
                            <span class="nav-main-link-name">Services</span>
                        </a>
                        <ul class="nav-main-submenu">
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="">
                                    <span class="nav-main-link-name">Transfers</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="">
                                    <span class="nav-main-link-name">Loans</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="">
                                    <span class="nav-main-link-name">Credit</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="">
                                    <span class="nav-main-link-name">Bonds</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="">
                                    <span class="nav-main-link-name">Stocks</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-main-heading">Personal</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-user-circle"></i>
                            <span class="nav-main-link-name">Profile</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-envelope"></i>
                            <span class="nav-main-link-name">Messages</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-success">3</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-cog"></i>
                            <span class="nav-main-link-name">Settings</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="">
                            <i class="nav-main-link-icon fa fa-lock"></i>
                            <span class="nav-main-link-name">Security</span>
                            <span class="nav-main-link-badge badge rounded-pill bg-danger">1</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">Dashboards</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_dashboard_all.html">
                            <i class="nav-main-link-icon fa fa-arrow-left"></i>
                            <span class="nav-main-link-name">Go Back</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Side Navigation -->
        </div>
        <!-- END Sidebar Scrolling -->
    </nav>
    <!-- END Sidebar -->

    <!-- Header -->
    <header id="page-header">
        <!-- Header Content -->
        <div class="content-header">
            <!-- Left Section -->
            <div>
                <!-- Toggle Sidebar -->
                <!-- Layout API, functionality initialized in Template._uiApiLayout()-->
                <button type="button" class="btn btn-alt-secondary" data-toggle="layout" data-action="sidebar_toggle">
                    <i class="fa fa-fw fa-stream fa-flip-horizontal"></i>
                </button>
                <!-- END Toggle Sidebar -->

            </div>
            <!-- END Left Section -->

            <!-- Right Section -->
            <div>


                <!-- User Dropdown -->
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="far fa-fw fa-user-circle"></i>
                        <i class="fa fa-fw fa-angle-down d-none opacity-50 d-sm-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end p-0" aria-labelledby="page-header-user-dropdown">
                        <div class="bg-primary-dark rounded-top fw-semibold text-white text-center p-3">
                            <img class="img-avatar img-avatar48 img-avatar-thumb" src="assets/media/avatars/avatar10.jpg" alt="">
                            <div class="pt-2">
                                <a class="text-white fw-semibold" href="be_pages_generic_profile.html">{{ auth()->user()->first_name.' '.auth()->user()->last_name }}</a>
                            </div>
                        </div>
                        <div class="p-2">
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fa fa-fw fa-cog me-1"></i> Settings
                            </a>
                            <div role="separator" class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="fa fa-fw fa-arrow-alt-circle-left me-1"></i> Log Out
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END User Dropdown -->
            </div>
            <!-- END Right Section -->
        </div>
        <!-- END Header Content -->



        <!-- Header Loader -->
        <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
        <div id="page-header-loader" class="overlay-header bg-primary-dark">
            <div class="content-header">
                <div class="w-100 text-center">
                    <i class="fa fa-fw fa-2x fa-sun fa-spin text-white"></i>
                </div>
            </div>
        </div>
        <!-- END Header Loader -->
    </header>
    <!-- END Header -->

    <!-- Main Container -->
    @yield('content')
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-body">
        <div class="content py-0">
            <div class="row fs-sm">
                <div class="col-sm-6 order-sm-2 mb-1 mb-sm-0 text-center text-sm-end">
                    Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                </div>
                <div class="col-sm-6 order-sm-1 text-center text-sm-start">
                    <a class="fw-semibold" href="https://1.envato.market/r6y" target="_blank">Dashmix 5.1</a> &copy; <span data-toggle="year-copy"></span>
                </div>
            </div>
        </div>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!--
  Dashmix JS

  Core libraries and functionality
  webpack is putting everything together at assets/_js/main/app.js
-->
<script src="{{ asset('assets/js/dashmix.app.min.js') }}"></script>
</body>
</html>
