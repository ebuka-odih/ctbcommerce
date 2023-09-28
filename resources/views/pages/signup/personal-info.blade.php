<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }} | Open Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
        <a class="nav-link active" aria-current="page" href="#">Your Information</a>
        <a class="nav-link" href="#">Account Setup</a>
        <a class="nav-link" href="#">Terms & Conditions</a>
        <a class="nav-link">Review & Submit</a>
    </nav>
    <div class="card">
        <div class="card-body">
            <h3 style="color: #123771">Your Information</h3>
            <p>Welcome, Apply in just minutes.</p>
            <hr>
            <form class="row g-3">
                <h4 style="color: #123771">Personal</h4>
                <span class="text-danger">* required</span>
                <div class="col-md-4">
                    <label for="inputEmail4" class="form-label">First Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="inputEmail4">
                </div>
                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Middle Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Last Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="inputPassword4">
                </div>
                <div class="col-md-4">
                    <label for="suffix" class="form-label">Suffix</label>
                    <select name="suffix" id="suffix" class="form-control">
                        <option selected disabled>Suffix...</option>
                        <option value="Mr.">Mr.</option>
                        <option value="Mrs.">Mrs.</option>
                        <option value="Ms.">Ms.</option>
                        <option value="Miss">Miss</option>
                        <option value="Dr.">Dr.</option>
                        <option value="Prof.">Prof.</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="suffix" class="form-label">Gender<span class="text-danger">*</span></label>
                    <select name="suffix" id="suffix" class="form-control">
                        <option selected disabled>Gender...</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="non-binary">Non-binary</option>
                        <option value="transgender">Transgender</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="inputPassword4" class="form-label">Date Of Birth<span class="text-danger">*</span></label>
                    <input type="date" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option>...</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
