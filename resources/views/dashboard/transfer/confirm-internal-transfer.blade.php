
@extends('dashboard.layouts.app')
@section('content')


    <main id="main-container">

        <!-- Hero -->
        <div style="visibility: hidden" class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Confirm Transfer</h1>

                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">

            <!-- Layouts -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Confirm Transfer Details</h3>
                </div>
                <div class="block-content">

                    <div class="row">

                        <div class="col-lg-12 space-y-2">
                            <!-- Form Inline - Default Style -->
                            <form class="row row-cols-lg-auto g-3 align-items-center" action="be_forms_layouts.html" method="POST" onsubmit="return false;">
                                <div class="col-lg-12">
                                    <table class="table table-striped" >
                                        <tr>
                                            <th>Account Name:</th>
                                            <td>{{ optional($user_acct->user)->fullname() }}</td>
                                        </tr>
                                        <tr>
                                            <th>Account Number:</th>
                                            <td>{{ $user_acct->account_number }}</td>
                                        </tr>
                                        <tr>
                                            <th>Account Email:</th>
                                            <td>{{ optional($user_acct->user)->email }}</td>
                                        </tr>
                                        <tr>
                                            <th>Amount:</th>
                                            <td> {{ $user_acct->currency }}@money($transfer->amount)</td>
                                        </tr>
                                    </table>
                                    <div class="col-lg-6 mb-3">
                                        <label for="example-ltf-text">Note (Optional)</label>
                                        <input type="text" class="form-control form-control-lg" id="example-if-password" name="note" >
                                    </div>
                                    <div class="col-lg-4">
                                        <button class="btn btn-dark" type="submit">Send</button>
                                    </div>
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
