<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AddFund;
use App\Models\User;
use App\Notifications\DepositAlert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class AdminAddFundController extends Controller
{

    public function addFund()
    {
        $users = User::all();
        $deposits = AddFund::all();
        return view('admin.deposits.add-fund', compact('users', 'deposits'));
    }

    public function storeDeposit(Request $request)
    {
        $request->validate([
            'from' => 'required',
            'amount' => 'required',
            'note' => 'nullable',
        ]);

        $input = $request->input('amount');
        if (strpos($input, '-')) {
            $deposit = new AddFund();
            $deposit->from = $request->from;
            $deposit->amount = $request->amount;
            $deposit->note = $request->note;
            $deposit->status = 1;
            $deposit->user_id = $request->user_id;
            $deposit->save();
            $user = User::findOrFail($request->user_id);
            $user->account->balance -= $request->amount;
            $user->account->save();
            Notification::route('mail', $user->email)->notify(new DepositAlert($deposit));
            return redirect()->back()->with('success', "Money Debited");
        } else {
            $deposit = new AddFund();
            $deposit->from = $request->from;
            $deposit->amount = $request->amount;
            $deposit->note = $request->note;
            $deposit->status = 1;
            $deposit->user_id = $request->user_id;
            $deposit->save();
            $user = User::findOrFail($request->user_id);
            $user->account->balance += $request->amount;
            $user->account->save();
            Notification::route('mail', $user->email)->notify(new DepositAlert($deposit));
            return redirect()->back()->with('success', "Money Added");
        }


    }

    public function deleteDeposit($id)
    {
        $deposit = AddFund::findOrFail($id);
        $deposit->delete();
        return redirect()->back();
    }
}
