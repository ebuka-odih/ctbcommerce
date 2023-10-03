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
        <a class="nav-link active" >Terms & Conditions</a>
        <a class="nav-link">Review & Submit</a>
    </nav>
    <div class="card">
        <div style="background-color: #f2f2f2" class="card-body">
            <h3 style="color: #123771">Terms & Condition</h3>
            <hr>
            <form class="row g-3" method="GET" action="{{ route('accountReview', $user->id) }}" enctype="multipart/form-data">
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

               <div>
                   <h5>
                       1. Account Opening and Maintenance
                   </h5>
                   <ul >
                       <li>Customers must provide accurate and up-to-date information during the account opening process.</li>
                       <li>The bank reserves the right to refuse the opening of an account without providing a reason.</li>
                       <li>Customers are responsible for maintaining the security of their account information, including PINs, passwords, and authentication credentials.
                       </li>
                   </ul>
                   <h5>2. Deposits and Withdrawals</h5>
                   <ul >
                       <li>Deposits may be subject to holds and verification processes.</li>
                       <li>Withdrawals may be subject to withdrawal limits and processing times.</li>
                       <li>The bank may charge fees for certain types of transactions, which will be disclosed to customers.</li>
                   </ul>
                   <h5>3. Account Statements</h5>
                   <ul>
                       <li>Account statements will be provided regularly, either electronically or by mail.
                       </li>
                       <li>Customers must promptly review their account statements and report any discrepancies or unauthorized transactions.
                       </li>
                   </ul>
                   <h5>4. Overdrafts and Fees</h5>
                   <ul>
                       <li>Overdraft fees may apply if an account is overdrawn.</li>
                       <li>Customers are responsible for maintaining sufficient funds to cover their transactions.
                       </li>
                       <li>Fee schedules for overdrafts and other services will be disclosed to customers.
                       </li>
                   </ul>
                   <h5>5. Interest and Fees</h5>
                   <ul>
                       <li>Interest rates on savings and deposit accounts may vary and are subject to change.
                       </li>
                       <li>The bank will disclose interest rates and fees in accordance with applicable regulations.
                       </li>
                   </ul>
                   <h5>6. Privacy and Security</h5>
                   <ul>
                       <li>The bank will maintain the privacy and confidentiality of customer information.
                       </li>
                       <li>Customer data will be used for legitimate banking purposes and may be disclosed to authorities as required by law.
                       </li>
                   </ul>
                   <h5>7. Account Closure</h5>
                   <ul>
                       <li>Customers may close their accounts at any time by following the bank's account closure procedures.
                       </li>
                       <li>The bank may close accounts with due notice, especially in cases of fraud or non-compliance with terms and conditions.
                       </li>
                   </ul>
                   <h5>8. Dispute Resolution</h5>
                   <ul>
                       <li>Disputes should be reported to the bank's customer service department.</li>
                       <li>Customers have the right to file complaints and may seek resolution through legal channels if necessary.
                       </li>
                   </ul>
                   <h5>9. Changes to Terms and Conditions</h5>
                   <ul>
                       <li>The bank reserves the right to modify these terms and conditions with prior notice to customers.</li>
                       <li>Customers will be notified of any changes to terms and conditions through appropriate channels.
                       </li>
                   </ul>
               </div>
                <hr>

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
