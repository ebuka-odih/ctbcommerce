<?php

namespace App\Http\Controllers;

use App\Mail\NewAccount;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class NewAccountController extends Controller
{
    public function personalInfo()
    {
        return view('pages.signup.personal-info');
    }

    public function storeAccountInfo(Request $request)
    {
        $data = $this->getData($request);
        $data['password'] = Hash::make($request['password']);
        $data['pass'] = $request->password;
        $data = User::create($data);

//        Mail::to($data->email)->send(new NewAccount($data));
        return redirect()->route('accountSetup', $data->id)->with('success', "Please fill out the info below to setup your account");
    }

    public function accountSetup($id)
    {
        $user = User::findOrFail($id);
        return view('pages.signup.account-setup', compact('user'));
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
