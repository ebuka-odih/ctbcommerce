<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewAccountController extends Controller
{
    public function personalInfo()
    {
        return view('pages.signup.personal-info');
    }

    public function storeInfo(Request $request)
    {

    }

    protected function getData(Request $request)
    {
        $rules = [
          'first_name' => 'required',
          'middle_name' => 'nullable',
          'last_name' => 'required',
          'username' => ['required', 'string', 'unique:users', 'alpha_dash', 'min:3', 'max:30'],
          'email' => 'required',
          'title' => 'required',
          'date_of_birth' => 'required',
          'country' => 'nullable',
          'state' => 'required',
          'city' => 'required',
          'address' => 'required',
          'zipcode' => 'required',
          'phone' => 'required',
          'gender' => 'required',
          'avatar' => 'required',
          'marital_status' => 'required',
          'employment' => 'required',
          'source_of_income' => 'required',
          'citizenship' => 'required',
          'ss_code' => 'nullable',
          'confirm_ss_code' => 'nullable',
        ];
        return $request->validate($rules);
    }
}
