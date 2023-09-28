<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewAccountController extends Controller
{
    public function personalInfo()
    {
        return view('pages.signup.personal-info');
    }
}
