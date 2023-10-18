<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OTPVerificationController extends Controller
{
    public function show()
    {
        return view('pages.signup.otp-verification');
    }

    public function verify(Request $request)
    {
        $user = Auth::user();

        if ($user && $user->otp_code == $request->otp) {
            // OTP code is valid, log the user in or perform the desired action
            // Clear the OTP code to prevent reuse
            $user->otp_code = null;
            $user->save();

            return redirect()->intended('/'); // Redirect to the desired page after successful verification
        } else {
            // Invalid OTP code
            return back()->with('error', 'Invalid OTP code. Please try again.');
        }
    }

}
