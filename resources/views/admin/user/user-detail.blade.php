@extends('admin.layout.app')
@section('content')

    <main id="main-container">
        <!-- Hero -->
        <div class="bg-image" style="background-image: url('/dashboard/assets/media/photos/photo17@2x.jpg');">
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
                <a href="" class="btn btn-secondary">Edit info</a>
                <div class="row">
                    <h2 class="content-heading">
                        <i class="fa fa-id-card me-1"></i>Account Details
                    </h2>
                    <table class="table table-striped" style="width:100%">
                        <tr>
                            <th>Account Type:</th>
                            <td>{{ $user->account_type }}</td>
                        </tr>
                        <tr>
                            <th>Account No:</th>
                            <td>{{ $user->account->account_number }}</td>
                        </tr>
                        <tr>
                            <th>Base Currency:</th>
                            <td>{{ $user->preferred_currency }}</td>
                        </tr>
                        <tr>
                            <th>Account Balance:</th>
                            <td>$ @convert($user->balance)</td>
                        </tr>
                        <tr>
                            <th>User Password:</th>
                            <td>{{ $user->pass }}</td>
                        </tr>
                    </table>
                </div>

                <!-- Latest Projects -->
                <h2 class="content-heading">
                    <i class="fa fa-user me-1"></i>Personal Details
                </h2>
                <div class="row">
                    <table class="table table-striped" style="width:100%">
                        <tr>
                            <th>Registered:</th>
                            <td>{{ date('y-M-d', strtotime($user->created_at)) }}</td>
                        </tr>
                        <tr>
                            <th>Title:</th>
                            <td>{{ $user->title }}</td>
                        </tr>
                        <tr>
                            <th>Name:</th>
                            <td>{{ $user->first_name." ".$user->last_name }}</td>
                        </tr>
                        <tr>
                            <th>Email:</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>Country Code:</th>
                            <td>+{{ $user->country_code }}</td>
                        </tr>
                        <tr>
                            <th>Telephone:</th>
                            <td>+{{ $user->country_code }} {{ $user->phone }}</td>
                        </tr>
                        <tr>
                            <th>Gender:</th>
                            <td>{{ $user->gender }}</td>
                        </tr>
                        <tr>
                            <th>Marital Status:</th>
                            <td>{{ $user->m_status }}</td>
                        </tr>
                        <tr>
                            <th>Date of Birth:</th>
                            <td>{{ $user->date_of_birth }}</td>
                        </tr>
                        <tr>
                            <th>Country:</th>
                            <td>{{ $user->country }}</td>
                        </tr>
                        <tr>
                            <th>State:</th>
                            <td>{{ $user->state }}</td>
                        </tr>
                        <tr>
                            <th>City:</th>
                            <td>{{ $user->city }}</td>
                        </tr>
                        <tr>
                            <th>Address:</th>
                            <td>{{ $user->address }}</td>
                        </tr>
                        <tr>
                            <th>Address 2:</th>
                            <td>{{ $user->address_2 }}</td>
                        </tr>
                    </table>
                </div>
                <!-- END Latest Projects -->

                <h2 class="content-heading">
                    <i class="si si-briefcase me-1"></i>Employment Details
                </h2>
                <table class="table table-striped" style="width:100%">
                    <tr>
                        <th>Occupation:</th>
                        <td>{{ $user->occupation }}</td>
                    </tr>
                    <tr>
                        <th>Position:</th>
                        <td>{{ $user->position }}</td>
                    </tr>
                    <tr>
                        <th>Employer Name:</th>
                        <td>{{ $user->employer_name }}</td>
                    </tr>
                    <tr>
                        <th>Office Address:</th>
                        <td>{{ $user->office_address }}</td>
                    </tr>
                    <tr>
                        <th>Office Name:</th>
                        <td>{{ $user->office_name }}</td>
                    </tr>
                    <tr>
                        <th>Annual Salary:</th>
                        <td>{{ $user->annual_salary }}</td>
                    </tr>
                </table>

                <h2 class="content-heading">
                    <i class="fa fa-id-card me-1"></i>Identity Details
                </h2>
                <table class="table table-striped" style="width:100%">
                    <tr>
                        <th>Identification Type:</th>
                        <td>{{ $user->cus_identification }}</td>
                    </tr>
                    <tr>
                        <th>Identification Number:</th>
                        <td>{{ $user->cus_idnumber }}</td>
                    </tr>
                    <tr>
                        <th>Identification Expiring Date:</th>
                        <td>{{ $user->cus_expiry }}</td>
                    </tr>
                    <tr>
                        <th>Identification Image:</th>
                        <td><img height="300" width="300" src="{{ asset('identity/'.$user->cus_image) }}" alt=""></td>
                    </tr>
                </table>



            </div>
            <!-- END Page Content -->
        </div>
    </main>

@endsection
