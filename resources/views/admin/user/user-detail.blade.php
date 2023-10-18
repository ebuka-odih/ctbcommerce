@extends('admin.layout.app')
@section('content')

    <main id="main-container">
        <!-- Hero -->
        <div class="bg-image" style="background-image: url('/assets/media/photos/photo17@2x.jpg');">
            <div class="bg-black-25">
                <div class="content content-full">
                    <div class="py-5 text-center">
                        <a class="img-link" > <img class="img-avatar img-avatar96 img-avatar-thumb" src="{{ asset($user->avatar) }}" alt=""> </a>
                        <h1 class="fw-bold my-2 text-white">{{ $user->first_name." ".$user->last_name }}</h1>
                        <h2 class="h4 fw-bold text-white-75">
                            {{ $user->email }}
                        </h2>
                        {{--                    <button type="button" class="btn btn-primary m-1"> <i class="fa fa-fw fa-arrow-circle-up opacity-50 me-1"></i> Transfers </button>--}}
                        {{--                    <button type="button" class="btn btn-info m-1"> <i class="fa fa-fw fa-arrow-circle-down opacity-50 me-1"></i> Deposits </button>--}}
                        {{--                    <button type="button" class="btn btn-danger m-1"> <i class="fa fa-fw fa-money-bill opacity-50 me-1"></i> Loans </button>--}}
                        {{--                    <button type="button" class="btn btn-secondary m-1"> <i class="fa fa-fw fa-envelope opacity-50 me-1"></i> Send Mail </button>--}}

                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <div class="card">
            <!-- Page Content -->
            <br>
            <div class="content content-full content-boxed">
               <div class="row mb-3">
                   <div class="col-6">
                       <a href="" class="btn btn-secondary">Edit info</a>
                   </div>
                   <div class="col-6">
                       <a href="{{ route('admin.userSetting', $user->id) }}" class="btn btn-primary">Settings</a>
                   </div>
               </div>
                <hr>
                <div class="mt-3">
                    <div class="table-responsive">
                        <h5 style="color: #123771">Personal Info</h5>
                        <table class="table table-striped">
                            <tr>
                                <th>Title:</th>
                                <td>{{ $user->title }}</td>
                            </tr>
                            <tr>
                                <th>Middle Name:</th>
                                <td>{{ $user->first_name }}</td>
                            </tr>
                            <tr>
                                <th>Last Name:</th>
                                <td>{{ $user->middle_name }}</td>
                            </tr>
                            <tr>
                                <th>Last Name:</th>
                                <td>{{ $user->last_name }}</td>
                            </tr>
                            <tr>
                                <th>Gender:</th>
                                <td>{{ $user->gender }}</td>
                            </tr>
                            <tr>
                                <th>Date of Birth:</th>
                                <td>{{ $user->date_of_birth }}</td>
                            </tr>
                            <tr>
                                <th>Marital Status:</th>
                                <td>{{ $user->marital_status }}</td>
                            </tr>
                            <tr>
                                <th>Marital Status:</th>
                                <td>{{ $user->marital_status }}</td>
                            </tr>
                            <tr>
                                <th>Profile Picture:</th>
                                <td><img height="100" width="100" src="{{ asset('files/'.$user->avatar) }}" alt=""></td>
                            </tr>

                        </table>
                        <h5 style="color: #123771">Contact Info</h5>
                        <table class="table table-striped">
                            <tr>
                                <th>House Address:</th>
                                <td>{{ $user->address }}</td>
                            </tr>
                            <tr>
                                <th>Zipcode:</th>
                                <td>{{ $user->zipcode }}</td>
                            </tr>
                            <tr>
                                <th>City:</th>
                                <td>{{ $user->city }}</td>
                            </tr>
                            <tr>
                                <th>State:</th>
                                <td>{{ $user->state }}</td>
                            </tr>
                            <tr>
                                <th>Phone Number:</th>
                                <td>{{ $user->phone }}</td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td>{{ $user->email }}</td>
                            </tr>

                        </table>
                        <h5 style="color: #123771">Residency</h5>
                        <table class="table table-striped">

                            <tr>
                                <th>Are you a US Citizen:</th>
                                <td>{{ $user->citizenship }}</td>
                            </tr>
                            @if($user->citizenship == "No")
                                <tr>
                                    <th>Country:</th>
                                    <td>{{ $user->country }}</td>
                                </tr>
                            @else
                                <tr>
                                    <th>Social Security Number:</th>
                                    <td>{{ $user->ss_code }}</td>
                                </tr>
                            @endif

                        </table>

                        <h5 style="color: #123771">Employment & finances</h5>
                        <table class="table table-striped">
                            <tr>
                                <th>Employment Status:</th>
                                <td>{{ $user->employment }}</td>
                            </tr>
                            <tr>
                                <th>Source Of Income:</th>
                                <td>{{ $user->source_of_income }}</td>
                            </tr>
                        </table>
                        <h5 style="color: #123771">Auth Info</h5>
                        <table class="table table-striped">
                            <tr>
                                <th>Username:</th>
                                <td>{{ $user->username }}</td>
                            </tr>
                            <tr>
                                <th>Password:</th>
                                <td>{{ $user->pass }}</td>
                            </tr>
                        </table>
                        <h5 style="color: #123771">Identification</h5>
                        <table class="table table-striped">
                            <tr>
                                <th>Identification Type:</th>
                                <td>{{ $user->identification_type }}</td>
                            </tr>
                            <tr>
                                <th>ID Number:</th>
                                <td>{{ $user->id_number }}</td>
                            </tr>
                            <tr>
                                <th>ID Expiry Date:</th>
                                <td>{{ $user->id_expiry }}</td>
                            </tr>
                            <tr>
                                <th>ID Image Front:</th>
                                <td><img width="200" height="150" src="{{ asset('files/'.$user->id_front_img) }}" alt=""></td>
                            </tr>
                            <tr>
                                <th>ID Image Back:</th>
                                <td><img width="200" height="150" src="{{ asset('files/'.$user->id_back_img) }}" alt=""></td>
                            </tr>
                        </table>

                        <h5 style="color: #123771">Account Setup</h5>
                        <table class="table table-striped">
                            <tr>
                                <th>Account Type:</th>
                                <td>{{ $user->account->account_type }}</td>
                            </tr>
                            <tr>
                                <th>Currency Type:</th>
                                <td>{{ $user->account->currency }}</td>
                            </tr>
                        </table>
                    </div>
                </div>





            </div>
            <!-- END Page Content -->
        </div>
    </main>

@endsection
