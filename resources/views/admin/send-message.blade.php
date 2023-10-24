@extends('admin.layout.app')
@section('content')

    <main id="main-container">

        <!-- Hero -->
        <div class="bg-body-light">
            <div class="content content-full">
                <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                    <h1 class="flex-grow-1 fs-3 fw-semibold my-2 my-sm-3">Change Password</h1>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Page Content -->
        <div class="content">

            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Table</h3>
                    <div class="block-options">
                        <div class="block-options-item">
                            <code>.table</code>
                        </div>
                    </div>
                </div>
                <div class="block-content">
                    <table class="table table-vcenter">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;">#</th>
                            <th>Name</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                            <th class="text-center" style="width: 100px;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th class="text-center" scope="row">1</th>
                            <td class="fw-semibold">
                                <a href="be_pages_generic_profile.html">Henry Harrison</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <span class="badge bg-success">VIP</span>
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Edit">
                                        <i class="fa fa-pencil-alt"></i>
                                    </button>
                                    <button type="button" class="btn btn-sm btn-alt-secondary js-bs-tooltip-enabled" data-bs-toggle="tooltip" title="" data-bs-original-title="Delete">
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                       
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- Layouts -->
            <div class="block block-rounded">
                <div class="block-content">

                    <!-- Label on top Layout -->
                    <div class="row">
                        <div class="col-lg-8 col-xl-10">

                            <form class="form-horizontal" action="{{ route('admin.storeMessage') }}" method="POST">
                                @csrf

                                <select name="" id="" class="form-control">
                                    @foreach($users as $item)
                                        <option value="{{ $item->id }}">{{ $item->fullname() }}</option>
                                    @endforeach
                                </select>
                                <div class="form-group">
                                    <label class="col-md-2 control-label">Title</label>
                                    <div class="col-md-10">
                                        <input type="text" name="title" class="form-control" placeholder="The title of your message">
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label class="col-md-2 control-label">Message Body</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" name="message" rows="5"></textarea>
                                    </div>
                                </div>
                                <button class="btn btn-primary">Submit</button>

                            </form>


                        </div>
                    </div>
                    <!-- END Label on top Layout -->

                </div>
            </div>
            <!-- END Layouts -->
        </div>
        <!-- END Page Content -->
    </main>

@endsection
