@extends('dashboard.layouts.app')
@section('content')
    <style>
        /* Style for the loading container */
        .loading-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999; /* Ensure it's above other elements */
        }

        /* Style for the loading spinner */
        .loading-spinner {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>

    <div class="loading-container">
        <div class="loading-spinner">
            <strong>Loading...</strong>
            <div class="spinner-border" role="status" aria-hidden="true"></div>
        </div>
    </div>

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light d-print-none">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Invoice</h1>

                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content content-boxed">
            <!-- Invoice -->
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">#INV0{{ $transfer->withdraw_id }}</h3>
                    <div class="block-options">
                        <!-- Print Page functionality is initialized dmPrint() -->
                        <button type="button" class="btn-block-option" onclick="Dashmix.helpers('dm-print');">
                            <i class="si si-printer me-1"></i> Print Invoice
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="p-sm-4 p-xl-7">
                        <!-- Invoice Info -->
                        <div class="row mb-5">
                            <!-- Company Info -->
                            <div class="col-6">
                                <p class="h3">SENDER</p>
                                <div>
                                    <strong>Name:</strong> {{ auth()->user()->first_name." ".auth()->user()->last_name }}<br>
                                    <strong>Email:</strong> {{ auth()->user()->email }}<br>
                                    <strong>Bank Name:</strong> {{ env('APP_NAME') }}<br>
                                    <strong>Account No:</strong> <span class="text text-primary">{{ auth()->user()->account->account_number }}</span><br>
                                </div>
                            </div>
                            <!-- END Company Info -->

                            <!-- Client Info -->
                            <div class="col-6 text-end">
                                <p class="h3">RECEIVER</p>
                                <div>
                                    <strong>Name:</strong> {{ $transfer->rep_name }}<br>
                                    <strong>Account No:</strong> {{ $transfer->acct_number }}<br>
                                    <strong>Bank Name:</strong> {{ $transfer->bank_name }}<br>
                                    <strong>Transaction Type:</strong> {{ $transfer->type() }}<br>
                                </div>
                            </div>
                            <!-- END Client Info -->
                        </div>
                        <!-- END Invoice Info -->

                        <!-- Table -->
                        <div class="table-responsive push">
                            <table class="table table-bordered">
                                <thead class="bg-body">
                                <tr>
                                    <th class="text-center" style="width: 60px;">Date</th>
                                    <th>Description</th>
                                    <th class="text-center" style="width: 90px;">Status</th>
                                    <th class="text-right" style="width: 120px;">Unit</th>
                                    <th class="text-right" style="width: 120px;">Amount</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center">{{ date('d.M.y h:i A', strtotime($transfer->created_at)) }}</td>
                                    <td>

                                        <div class="text-muted">{{ $transfer->note }}</div>
                                    </td>
                                    <td class="text-center">
                                        {!! $transfer->status() !!}
                                    </td>
                                    <td class="text-right">$@money( $transfer->amount)</td>
                                    <td class="text-right">$@money( $transfer->amount)</td>
                                </tr>

                                <tr style="visibility: hidden">
                                    <td colspan="4" class="fw-semibold text-end">Vat Rate</td>
                                    <td class="text-end">{{ $transfer->vat}}%</td>
                                </tr>
                                <tr style="visibility: hidden">
                                    <td colspan="4" class="fw-semibold text-end">Vat Due</td>
                                    <td class="text-end">$@convert( $transfer->vat() )</td>
                                </tr>
                                <tr>
                                    <td colspan="4" class="fw-bold text-uppercase text-end bg-body-light">Total</td>
                                    <td class="fw-bold text-end bg-body-light">$@money( $transfer->amount )</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- END Table -->

                        <!-- Footer -->
                        <p class="text-muted text-center my-5">
                            Your growth is our interest.
                        </p>
                        <!-- END Footer -->
                    </div>
                </div>
            </div>
            <!-- END Invoice -->
        </div>
        <!-- END Page Content -->
    </main>

    <script>
        // Simulate a delay (e.g., 3 seconds) for demonstration purposes
        setTimeout(function() {
            // Remove the loading container when the page is loaded
            document.querySelector('.loading-container').style.display = 'none';
        }, 3000); // Adjust the delay time as needed
    </script>

@endsection
