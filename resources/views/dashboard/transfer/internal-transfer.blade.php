
@extends('dashboard.layouts.app')
@section('content')


    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Internal Transfer</h1>
                    <nav class="flex-shrink-0 my-2 my-sm-0 ms-sm-3" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('user.dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('user.transfer') }}">Transfer</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Internal Transfer</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">

            <!-- Layouts -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Make A Transfer</h3>
                </div>
                <div class="block-content">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session()->has('error'))
                        <div class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif

                    <div class="row">

                         <div class="col-lg-12 space-y-2">
                            <!-- Form Inline - Default Style -->
                            <form class="row row-cols-lg-auto g-3 align-items-center" action="{{ route('user.confirmDetail') }}" method="GET" >
                                @csrf

                                <div class="col-lg-12">
                                    <label for="example-ltf-text">From <span class="text-danger">*</span></label>
                                    <input type="text" readonly class="form-control form-control-lg mb-2" id="example-if-email" name="from" value="{{ auth()->user()->account->account_number }}">
                                    <strong class="text-info">{{ auth()->user()->account->currency }}@money(auth()->user()->account->balance)</strong>
                                </div>
                                <div class="col-lg-6">
                                    <label for="example-ltf-text">Amount <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control form-control-lg" id="example-if-password" name="amount" placeholder="Amount" required>
                                </div>

                                <div class="col-lg-6">
                                    <label for="example-ltf-text">Account Number <span class="text-danger">*</span></label>
                                    <input type="number" class="form-control form-control-lg" id="example-if-password" name="acct_number" placeholder="Recipient Acct No" required>
                                </div>
                                <div class="col-lg-4">
                                    <button class="btn btn-dark" type="submit">Continue</button>
                                </div>



                            </form>
                            <!-- END Form Inline - Default Style -->

                        </div>
                    </div>
                    <br>

                </div>
            </div>
            <!-- END Layouts -->
        </div>
        <!-- END Page Content -->
    </main>

@endsection
