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
                        <a href="" class="btn btn-primary">Settings</a>
                    </div>
                </div>
                <hr>
                <div class="mt-3">
                    <div class="table-responsive">
                        <h5 style="color: #123771">User Setting</h5>
                        <form action="{{ route('admin.storeUserSetting') }}" method="POST">
                            @csrf
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <table class="table">
                                <tr>
                                    <th>Bypass Transfer Code:</th>
                                    <td>
                                        <div class="form-check">
                                            <input type="checkbox" name="bypass_code" id="my_checkbox" value="1" @if(old('bypass_code')) checked @endif>
                                            <label class="form-check-label" for="example-radios-default1"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Pause Email Notification:</th>
                                    <td>
                                        <div class="form-check">
                                            <select name="send_email" id="" class="form-control">
                                                <option value="0">Yes</option>
                                                <option value="1">No</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>

                            </table>
                            <div class="form-check">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>

                    </div>
                </div>





            </div>
            <!-- END Page Content -->
        </div>
    </main>

@endsection
