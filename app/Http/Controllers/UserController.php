<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function dashboard()
    {
        $user = Auth::user();
        $transactions = Transfer::whereUserId(auth()->id())->latest()->paginate(4);
        return view('dashboard.index', compact('user', 'transactions'));
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
        return view('emails.debit-alert', compact('user'));
    }


}
