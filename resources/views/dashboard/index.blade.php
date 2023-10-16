@extends('dashboard.layouts.app')
@section('content')

<main id="main-container">
    <!-- Page Content -->
    <div class="content">
        <!-- Quick Overview -->
        <h2 class="content-heading">
            <i class="fa fa-angle-right text-muted me-1"></i> Quick Overview
        </h2>
        <div class="block block-rounded">
            <div class="block-content block-content-full">
                <div class="row text-center">
{{--                    <div class="col-md-3 py-3">--}}
{{--                        <div class="fs-1 fw-light text-dark mb-1">--}}
{{--                            {{ optional($user->account)->currency }}@money(optional(auth()->user()->account)->ledger_balance)--}}
{{--                        </div>--}}
{{--                        <a class="link-fx fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)">Ledger Balance</a>--}}
{{--                    </div>--}}
                    <div class="col-md-4 py-3">
                        <div class="fs-1 fw-light text-info mb-1">
                            {{ optional($user->account)->currency }}@money(optional(auth()->user()->account)->balance)
                        </div>
                        <a class="link-fx fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)">Available balance
                        </a>
                    </div>
                    <div class="col-md-4 py-3">
                        <div class="fs-1 fw-light text-success mb-1">
                            +{{ optional($user->account)->currency }}@money(optional(auth()->user()->account)->balance)
                        </div>
                        <a class="link-fx fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)">Today Income
                        </a>
                    </div>
                    <div class="col-md-4 py-3">
                        <div class="fs-1 fw-light text-danger mb-1">
                            -{{ optional($user->account)->currency }}0.0
                        </div>
                        <a class="link-fx fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)">Today Expenses</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card border-teal-600">
            <div class="card-header bg-transparent1 border-teal-600">Account Summary</div>
            <div class="card-body">
                <div id="tnxtbl_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                    <div class="row">
                        <div class="col-sm-12 col-md-6"></div>
                        <div class="col-sm-12 col-md-6"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="ui celled table table-responsive1 dataTable no-footer" cellspacing="0" width="100%" id="tnxtbl" role="grid" style="width: 100%;">
                                    <thead>
                                    <tr role="row">
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 131px;">Account Number</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 136px;">Account Type</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 136px;">Account Currency</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 175px;">Available Balance</th>
                                        <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 152px;">Account Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr role="row" class="odd">
                                        <td>
                                            <a href="account_activities?HKjkjepsjl3208flsjkjiowurwoupweuiuvlnzewipPIE29IJMD=1">{{ optional($user->account)->account_number }}</a>
                                        </td>
                                        <td>{{ optional($user->account)->account_type }}</td>
                                        <td>{{ optional($user->account)->currency() }}</td>
                                        <td>{{ optional($user->account)->currency }}@money(optional($user->account)->balance)</td>
                                        <td>
                                            <span >{!! $user->status() !!}</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>

                            </div>
                            <div id="tnxtbl_processing" class="dataTables_processing card" style="display: none;">Processing...</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5"></div>
                        <div class="col-sm-12 col-md-7"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Quick Overview -->


        <!-- Latest Transactions -->
        <h2 class="content-heading">
            <i class="fa fa-angle-right text-muted me-1"></i> Latest Transactions
        </h2>

        @forelse($transactions as $item)
            @if($item->nsb_transfer == 1)
                @if($item->status == 1)
                    @if($item->from == optional(auth()->user()->account)->account_number)
                        <a class="block block-rounded block-link-shadow border-start border-success border-3" href="{{ route('user.nsb_withdrawal_details', $item->id) }}">
                            <div class="block-content block-content-full d-flex align-items-center justify-content-between">

                                <div>
                                    <p class="fs-lg fw-semibold mb-0">
                                        -$@convert($item->amount)
                                    </p>
                                    <p class="text-muted mb-0">
                                        {{ substr($item->acct_number, 0, 5) }}-xxx Account
                                    </p>
                                </div>
                                <div class="ms-3">
                                    <i class="fa fa-arrow-right text-success"></i>
                                </div>
                            </div>
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <span class="fs-sm text-muted">From <strong>{{ $item->rep_name }}</strong> at <strong> {{ date('M d, Y - h:i A', strtotime($item->created_at)) }}</strong></span>
                            </div>
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <span class="font-size-sm text-muted">Status <strong class="badge rounded-pill bg-success">Successful</strong></span>
                            </div>
                        </a>
                    @else
                        <a class="block block-rounded block-link-shadow border-start border-success border-3" href="{{ route('user.nsb_withdrawal_details', $item->id) }}">
                            <div class="block-content block-content-full d-flex align-items-center justify-content-between">

                                <div>
                                    <p class="fs-lg fw-semibold mb-0">
                                        +$@convert($item->amount)
                                    </p>
                                    <p class="text-muted mb-0">
                                        {{ substr($item->acct_number, 0, 5) }}-xxx Account
                                    </p>
                                </div>
                                <div class="ml-3">
                                    <i class="fa fa-arrow-left text-success"></i>
                                </div>
                            </div>
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <span class="font-size-sm text-muted">From <strong>{{ $item->rep_name }}</strong> at <strong>{{ date('M d, Y - h:i A', strtotime($item->created_at)) }}</strong></span>
                            </div>
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <span class="font-size-sm text-muted">Status <strong class="badge rounded-pill bg-success">Successful</strong></span>
                            </div>
                        </a>
                    @endif
                @else
                    @if($item->from == optional(auth()->user()->account)->account_number)
                        <a class="block block-rounded block-link-shadow border-start border-warning border-3" href="{{ route('user.nsb_withdrawal_details', $item->id) }}">
                            <div class="block-content block-content-full d-flex align-items-center justify-content-between">

                                <div>
                                    <p class="fs-lg fw-semibold mb-0">
                                        -$@convert($item->amount)
                                    </p>
                                    <p class="text-muted mb-0">
                                        {{ substr($item->acct_number, 0, 5) }}-xxx Account
                                    </p>
                                </div>
                                <div class="ml-3">
                                    <i class="fa fa-arrow-right text-warning"></i>
                                </div>
                            </div>
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <span class="font-size-sm text-muted">From <strong>{{ $item->rep_name }}</strong> at <strong>{{ date('M d, Y - h:i A', strtotime($item->created_at)) }}</strong></span>
                            </div>
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <span class="font-size-sm text-muted">Status <strong class="badge rounded-pill bg-warning">Pending</strong></span>
                            </div>
                        </a>

                    @else
                        <a class="block block-rounded block-link-shadow invisible border-left border-success border-3x" data-toggle="appear" href="{{ route('user.nsb_withdrawal_details', $item->id) }}">
                            <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                                <div>
                                    <p class="fs-lg fw-semibold mb-0">
                                        +$@convert($item->amount)
                                    </p>
                                    <p class="text-muted mb-0">
                                        {{ substr($item->acct_number, 0, 5) }}-xxx Account
                                    </p>
                                </div>
                                <div class="ml-3">
                                    <i class="fa fa-arrow-left text-success"></i>
                                </div>
                            </div>
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <span class="font-size-sm text-muted">From <strong>{{ $item->rep_name }}</strong> at <strong>{{ date('M d, Y - h:i A', strtotime($item->created_at)) }}</strong></span>
                            </div>
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <span class="font-size-sm text-muted">Status <strong class="badge badge-danger">Pending</strong></span>
                            </div>
                        </a>
                    @endif

                @endif
            @elseif($item->obank_transfer == 1)
                @if($item->status == 1)
                    @if($item->from == optional(auth()->user()->account)->account_number)
                        <a class="block block-rounded block-link-shadow border-start border-success border-3" href="{{ route('user.obank_withdrawal_details', $item->id) }}">
                            <div class="block-content block-content-full d-flex align-items-center justify-content-between">

                                <div>
                                    <p class="fs-lg fw-semibold mb-0">
                                        -$@convert($item->amount)
                                    </p>
                                    <p class="text-muted mb-0">
                                        {{ substr($item->acct_number, 0, 5) }}-xxx Account
                                    </p>
                                </div>
                                <div class="ms-3">
                                    <i class="fa fa-arrow-right text-success"></i>
                                </div>
                            </div>
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <span class="fs-sm text-muted">From <strong>{{ $item->rep_name }}</strong> at <strong> {{ date('M d, Y - h:i A', strtotime($item->created_at)) }}</strong></span>
                            </div>
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <span class="font-size-sm text-muted">Status <strong class="badge rounded-pill bg-success">Successful</strong></span>
                            </div>
                        </a>
                    @else
                        <a class="block block-rounded block-link-shadow border-start border-success border-3" href="{{ route('user.obank_withdrawal_details', $item->id) }}">
                            <div class="block-content block-content-full d-flex align-items-center justify-content-between">

                                <div>
                                    <p class="fs-lg fw-semibold mb-0">
                                        +$@convert($item->amount)
                                    </p>
                                    <p class="text-muted mb-0">
                                        {{ substr($item->acct_number, 0, 5) }}-xxx Account
                                    </p>
                                </div>
                                <div class="ml-3">
                                    <i class="fa fa-arrow-left text-success"></i>
                                </div>
                            </div>
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <span class="font-size-sm text-muted">From <strong>{{ $item->rep_name }}</strong> at <strong>{{ date('M d, Y - h:i A', strtotime($item->created_at)) }}</strong></span>
                            </div>
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <span class="font-size-sm text-muted">Status <strong class="badge rounded-pill bg-success">Successful</strong></span>
                            </div>
                        </a>
                    @endif
                @else
                    @if($item->from == optional(auth()->user()->account)->account_number)
                        <a class="block block-rounded block-link-shadow border-start border-warning border-3" href="{{ route('user.obank_withdrawal_details', $item->id) }}">
                            <div class="block-content block-content-full d-flex align-items-center justify-content-between">

                                <div>
                                    <p class="fs-lg fw-semibold mb-0">
                                        -$@convert($item->amount)
                                    </p>
                                    <p class="text-muted mb-0">
                                        {{ substr($item->acct_number, 0, 5) }}-xxx Account
                                    </p>
                                </div>
                                <div class="ml-3">
                                    <i class="fa fa-arrow-right text-warning"></i>
                                </div>
                            </div>
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <span class="font-size-sm text-muted">From <strong>{{ $item->rep_name }}</strong> at <strong>{{ date('M d, Y - h:i A', strtotime($item->created_at)) }}</strong></span>
                            </div>
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <span class="font-size-sm text-muted">Status <strong class="badge rounded-pill bg-warning">Pending</strong></span>
                            </div>
                        </a>

                    @else
                        <a class="block block-rounded block-link-shadow invisible border-left border-success border-3x" data-toggle="appear" href="{{ route('user.obank_withdrawal_details', $item->id) }}">
                            <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                                <div>
                                    <p class="fs-lg fw-semibold mb-0">
                                        +$@convert($item->amount)
                                    </p>
                                    <p class="text-muted mb-0">
                                        {{ substr($item->acct_number, 0, 5) }}-xxx Account
                                    </p>
                                </div>
                                <div class="ml-3">
                                    <i class="fa fa-arrow-left text-success"></i>
                                </div>
                            </div>
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <span class="font-size-sm text-muted">From <strong>{{ $item->rep_name }}</strong> at <strong>{{ date('M d, Y - h:i A', strtotime($item->created_at)) }}</strong></span>
                            </div>
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <span class="font-size-sm text-muted">Status <strong class="badge badge-danger">Pending</strong></span>
                            </div>
                        </a>
                    @endif

                @endif

            @elseif($item->wire_transfer == 1)
                @if($item->status == 1)
                    @if($item->from == optional(auth()->user()->account)->account_number)
                        <a class="block block-rounded block-link-shadow border-start border-success border-3" href="{{ route('user.obank_withdrawal_details', $item->id) }}">
                            <div class="block-content block-content-full d-flex align-items-center justify-content-between">

                                <div>
                                    <p class="fs-lg fw-semibold mb-0">
                                        -$@convert($item->amount)
                                    </p>
                                    <p class="text-muted mb-0">
                                        {{ substr($item->acct_number, 0, 5) }}-xxx Account
                                    </p>
                                </div>
                                <div class="ms-3">
                                    <i class="fa fa-arrow-right text-success"></i>
                                </div>
                            </div>
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <span class="fs-sm text-muted">From <strong>{{ $item->rep_name }}</strong> at <strong> {{ date('M d, Y - h:i A', strtotime($item->created_at)) }}</strong></span>
                            </div>
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <span class="font-size-sm text-muted">Status <strong class="badge rounded-pill bg-success">Successful</strong></span>
                            </div>
                        </a>
                    @else
                        <a class="block block-rounded block-link-shadow border-start border-success border-3" href="{{ route('user.obank_withdrawal_details', $item->id) }}">
                            <div class="block-content block-content-full d-flex align-items-center justify-content-between">

                                <div>
                                    <p class="fs-lg fw-semibold mb-0">
                                        +$@convert($item->amount)
                                    </p>
                                    <p class="text-muted mb-0">
                                        {{ substr($item->acct_number, 0, 5) }}-xxx Account
                                    </p>
                                </div>
                                <div class="ml-3">
                                    <i class="fa fa-arrow-left text-success"></i>
                                </div>
                            </div>
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <span class="font-size-sm text-muted">From <strong>{{ $item->rep_name }}</strong> at <strong>{{ date('M d, Y - h:i A', strtotime($item->created_at)) }}</strong></span>
                            </div>
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <span class="font-size-sm text-muted">Status <strong class="badge rounded-pill bg-success">Successful</strong></span>
                            </div>
                        </a>
                    @endif
                @else
                    @if($item->from == optional(auth()->user()->account)->account_number)
                        <a class="block block-rounded block-link-shadow border-start border-warning border-3" href="{{ route('user.obank_withdrawal_details', $item->id) }}">
                            <div class="block-content block-content-full d-flex align-items-center justify-content-between">

                                <div>
                                    <p class="fs-lg fw-semibold mb-0">
                                        -$@convert($item->amount)
                                    </p>
                                    <p class="text-muted mb-0">
                                        {{ substr($item->acct_number, 0, 5) }}-xxx Account
                                    </p>
                                </div>
                                <div class="ml-3">
                                    <i class="fa fa-arrow-right text-warning"></i>
                                </div>
                            </div>
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <span class="font-size-sm text-muted">From <strong>{{ $item->rep_name }}</strong> at <strong>{{ date('M d, Y - h:i A', strtotime($item->created_at)) }}</strong></span>
                            </div>
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <span class="font-size-sm text-muted">Status <strong class="badge rounded-pill bg-warning">Pending</strong></span>
                            </div>
                        </a>

                    @else
                        <a class="block block-rounded block-link-shadow invisible border-left border-success border-3x" data-toggle="appear" href="{{ route('user.obank_withdrawal_details', $item->id) }}">
                            <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                                <div>
                                    <p class="fs-lg fw-semibold mb-0">
                                        +$@convert($item->amount)
                                    </p>
                                    <p class="text-muted mb-0">
                                        {{ substr($item->acct_number, 0, 5) }}-xxx Account
                                    </p>
                                </div>
                                <div class="ml-3">
                                    <i class="fa fa-arrow-left text-success"></i>
                                </div>
                            </div>
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <span class="font-size-sm text-muted">From <strong>{{ $item->rep_name }}</strong> at <strong>{{ date('M d, Y - h:i A', strtotime($item->created_at)) }}</strong></span>
                            </div>
                            <div class="block-content block-content-full block-content-sm bg-body-light">
                                <span class="font-size-sm text-muted">Status <strong class="badge badge-danger">Pending</strong></span>
                            </div>
                        </a>
                    @endif

                @endif
            @endif


            <!-- END Latest Transactions -->
        @empty
            <h3>No Transaction</h3>
        @endforelse
        <!-- END Latest Transactions -->

        <!-- View More -->
        <div class="text-center">
            <a class="btn btn-sm btn-alt-secondary fw-semibold" href="javascript:void(0)">
                <i class="fa fa-arrow-down opacity-50 me-1"></i> View More..
            </a>
        </div>
        <!-- END View More -->
    </div>
    <!-- END Page Content -->
</main>

@endsection
