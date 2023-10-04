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
                    <div class="col-md-4 py-3">
                        <div class="fs-1 fw-light text-dark mb-1">
                            {{ optional($user->account)->currency }}@money(optional(auth()->user()->account)->ledger_balance)
                        </div>
                        <a class="link-fx fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)">Ledger Balance</a>
                    </div>
                    <div class="col-md-4 py-3">
                        <div class="fs-1 fw-light text-info mb-1">
                            {{ optional($user->account)->currency }}@money(optional(auth()->user()->account)->balance)
                        </div>
                        <a class="link-fx fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)">Available balance
                        </a>
                    </div>
                    <div class="col-md-4 py-3">
                        <div class="fs-1 fw-light text-danger mb-1">
                            -{{ optional($user->account)->currency }}0.0
                        </div>
                        <a class="link-fx fs-sm fw-bold text-uppercase text-muted" href="javascript:void(0)">Expenses Today</a>
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
                            <table class="ui celled table table-responsive1 dataTable no-footer" cellspacing="0" width="100%" id="tnxtbl" role="grid" style="width: 100%;">
                                <thead>
                                <tr role="row">
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 131px;">Account #</th>
                                    <th class="sorting_disabled" rowspan="1" colspan="1" style="width: 136px;">Type</th>
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
                                    <td>{{ optional($user->account)->currency }}@money(optional($user->account)->balance)</td>
                                    <td>
                                        <span >{!! $user->status() !!}</span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
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
        <a class="block block-rounded block-link-shadow border-start border-success border-3"href="javascript:void(0)">
            <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                <div>
                    <p class="fs-lg fw-semibold mb-0">
                        +$250,00
                    </p>
                    <p class="text-muted mb-0">
                        xxx-485 Account
                    </p>
                </div>
                <div class="ms-3">
                    <i class="fa fa-arrow-left text-success"></i>
                </div>
            </div>
            <div class="block-content block-content-full block-content-sm bg-body-light">
                <span class="fs-sm text-muted">From <strong>Company Inc</strong> at <strong>June 10, 2018 - 10:06</strong></span>
            </div>
        </a>
        <a class="block block-rounded block-link-shadow border-start border-danger border-3"href="javascript:void(0)">
            <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                <div>
                    <p class="fs-lg fw-semibold mb-0">
                        -$540,00
                    </p>
                    <p class="text-muted mb-0">
                        xxx-7898 VISA
                    </p>
                </div>
                <div class="ms-3">
                    <i class="fa fa-arrow-right text-danger"></i>
                </div>
            </div>
            <div class="block-content block-content-full block-content-sm bg-body-light">
                <span class="fs-sm text-muted">From <strong>Company Inc</strong> at <strong>June 5, 2018 - 08:46</strong></span>
            </div>
        </a>
        <a class="block block-rounded block-link-shadow border-start border-success border-3"href="javascript:void(0)">
            <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                <div>
                    <p class="fs-lg fw-semibold mb-0">
                        +$120,00
                    </p>
                    <p class="text-muted mb-0">
                        xxx-485 Account
                    </p>
                </div>
                <div class="ms-3">
                    <i class="fa fa-arrow-left text-success"></i>
                </div>
            </div>
            <div class="block-content block-content-full block-content-sm bg-body-light">
                <span class="fs-sm text-muted">From <strong>Company Inc</strong> at <strong>May 25, 2018 - 12:25</strong></span>
            </div>
        </a>
        <a class="block block-rounded block-link-shadow border-start border-success border-3"href="javascript:void(0)">
            <div class="block-content block-content-full d-flex align-items-center justify-content-between">
                <div>
                    <p class="fs-lg fw-semibold mb-0">
                        +$698,00
                    </p>
                    <p class="text-muted mb-0">
                        xxx-796 Account
                    </p>
                </div>
                <div class="ms-3">
                    <i class="fa fa-arrow-left text-success"></i>
                </div>
            </div>
            <div class="block-content block-content-full block-content-sm bg-body-light">
                <span class="fs-sm text-muted">From <strong>Company Inc</strong> at <strong>May 23, 2018 - 14:23</strong></span>
            </div>
        </a>
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
