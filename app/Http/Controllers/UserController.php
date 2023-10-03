<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function dashboard()
    {
        $user = Auth::user();
        return view('dashboard.index', compact('user'));
    }
    public function acctPending($id)
    {
        $user = User::findOrFail($id);
        if (auth()->user()->status == 1)
        {
            return view('dashboard.index', compact('user'));
        }
        return view('dashboard.pending', compact('user'));
    }

    public function testing($id)
    {
        $user = User::findOrFail($id);
        return view('emails.new-account', compact('user'));
    }


}
