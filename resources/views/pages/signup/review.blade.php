<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }} | Open Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        h5, h3{
            color: #123771
        }
        ul{
            margin-left: 10px;
        }
    </style>
</head>
<body>
<nav class="navbar bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('index') }}">
            <img src="{{ asset('img/logo.png') }}" alt="Bootstrap" width="300" height="80">
        </a>

    </div>
</nav>
<div class="container mt-5">
    <nav class="nav nav-pills nav-justified mb-5">
        <a class="nav-link">Your Information</a>
        <a class="nav-link" >Account Setup</a>
        <a class="nav-link" >Terms & Conditions</a>
        <a class="nav-link active">Review & Submit</a>
    </nav>
    <div class="card">
        <div style="background-color: #f2f2f2" class="card-body">
            <h3 style="color: #123771">Account Revision</h3>
            <hr>

            <form class="row g-3" method="GET" action="{{ route('accountReview', $user->id) }}" enctype="multipart/form-data">
                @csrf

               <div>
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
                               <th>US Citizen:</th>
                               <td>{{ $user->citizenship }}</td>
                           </tr>
                           <tr>
                               <th>Country:</th>
                               <td>{{ $user->country }}</td>
                           </tr>

                       </table>
                   </div>
               </div>


                <div class="mb-4">
                    <div class="space-x-2">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="example-checkbox-inline1" name="example-checkbox-inline1" required>
                            <label class="form-check-label" for="example-checkbox-inline1"> I Agree to the terms & conditions</label>
                        </div>

                    </div>
                </div>


                <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-primary">Continue</button>
                </div>
            </form>

        </div>
    </div>

</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
