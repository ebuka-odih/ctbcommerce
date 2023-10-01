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
        <a class="nav-link">Your Information</a>
        <a class="nav-link active" >Account Setup</a>
        <a class="nav-link" >Terms & Conditions</a>
        <a class="nav-link">Review & Submit</a>
    </nav>
    <div class="card">
        <div style="background-color: #f2f2f2" class="card-body">
            <h3 style="color: #123771">Account Setup</h3>
            <hr>
            <form class="row g-3" method="POST" action="{{ route('storeAccountInfo') }}">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h4 style="color: #123771">Identification</h4>
                <span class="text-danger">* required</span>
                <div class="row mt-3 mb-4">
                    <div class="col-md-4 mb-3">
                        <label for="inputEmail4" class="form-label">Identification Type<span class="text-danger">*</span></label>
                        <select name="cus_identification" class="form-control" id="cus_identification">
                            <option selected disabled>Identification...</option>
                            <option value="passport">Passport</option>
                            <option value="driver_license">Driver's License</option>
                            <option value="national_id">National ID</option>
                            <option value="voter_id">Voter ID</option>
                            <option value="social_security">Social Security Number</option>
                            <option value="student_id">Student ID</option>
                            <option value="employee_id">Employee ID</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="inputPassword4" class="form-label">ID Number<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="inputPassword4" name="cus_idnumber" value="{{ old('cus_idnumber') }}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="inputPassword4" class="form-label">ID Expiry Date<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="inputPassword4" name="cus_expiry" value="{{ old('cus_expiry') }}">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="suffix" class="form-label">Suffix</label>
                        <select name="title" id="suffix" class="form-control">
                            <option selected disabled>Suffix...</option>
                            <option value="Mr.">Mr.</option>
                            <option value="Mrs.">Mrs.</option>
                            <option value="Ms.">Ms.</option>
                            <option value="Miss">Miss</option>
                            <option value="Dr.">Dr.</option>
                            <option value="Prof.">Prof.</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="suffix" class="form-label">Gender<span class="text-danger">*</span></label>
                        <select name="gender" id="suffix" class="form-control">
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
                        <input type="date" class="form-control" id="inputPassword4" name="date_of_birth" value="{{ old('date_of_birth') }}">
                    </div>
                </div>


                <div class="col-12 mt-4">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
            <hr>
            <span class="navbar-text mt-3">
               Have an account?<a href="{{ route('login') }}" target="_blank" class="btn btn-link text-primary">Login</a>
          </span>
        </div>
    </div>

</div>

<script>
    const yesRadio = document.getElementById("yes");
    const noRadio = document.getElementById("no");
    const yesFields = document.getElementById("yesFields");
    const noField = document.getElementById("noField");

    // Function to show/hide fields based on radio selection
    function toggleFields() {
        if (yesRadio.checked) {
            yesFields.style.display = "block";
            noField.style.display = "none";
        } else if (noRadio.checked) {
            yesFields.style.display = "none";
            noField.style.display = "block";
        }
    }

    // Initial call to set the initial state
    toggleFields();

    // Attach an event listener to the radio inputs
    yesRadio.addEventListener("change", toggleFields);
    noRadio.addEventListener("change", toggleFields);
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
