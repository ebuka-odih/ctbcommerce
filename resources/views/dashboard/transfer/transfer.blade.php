@extends('dashboard.layouts.app')
@section('content')


    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Transfer</h1>
                    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Transfer</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">
            <div class="row">
                <div class="col-xl-4">
                    <!-- Card #1 -->
                    <a class="block block-rounded block-link-shadow" href="{{ route('user.internalTransfer') }}" style="background-color: #0a0c15; color: #8492b1;">
                        <div class="block-content block-content-full ribbon ribbon-dark ribbon-modern ribbon-primary">
                            <div class="py-3 text-center">
                                <i class="fa fa-university fa-3x text-gray"></i>
                                <h4 class="fs-lg  mt-3 mb-0" style="color: #8492b1;">
                                    Internal Transfer
                                </h4>
                            </div>
                        </div>
                    </a>
                    <!-- END Card #1 -->
                </div>

                <div class="col-xl-4">
                    <!-- Card #1 -->
                    <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full ribbon ribbon-dark ribbon-modern ribbon-primary">
                            <div class="py-3 text-center">
                                <i class="fa fa-exchange-alt fa-3x text-gray"></i>
                                {{--                                <i class="fa fa-envelope-open-dollar"></i>--}}
                                <h4 class="fs-lg  mt-3 mb-0" style="color: #8492b1;">
                                    Other Bank Transfer
                                </h4>
                            </div>
                        </div>
                    </a>
                    <!-- END Card #1 -->
                </div>


                <div class="col-xl-4">
                    <!-- Card #1 -->
                    <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full ribbon ribbon-dark ribbon-modern ribbon-primary">
                            <div class="py-3 text-center">
                                <i class="fa fa-wifi fa-3x text-gray"></i>
                                {{--                                <i class="fa fa-envelope-open-dollar"></i>--}}
                                <h4 class="fs-lg  mt-3 mb-0" style="color: #8492b1;">
                                    Wire Transfer
                                </h4>
                            </div>
                        </div>
                    </a>
                    <!-- END Card #1 -->
                </div>

            </div>


        </div>
        <!-- END Page Content -->
    </main>

@endsection
