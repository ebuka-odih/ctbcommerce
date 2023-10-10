<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transfer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InternalTransferController extends Controller
{
    public function internalTransfer()
    {
        return view('dashboard.transfer.internal-transfer');
    }

    public function confirmDetail(Request $request)
    {
        $account_number = $request->input('acct_number');
        $user_acct = Account::where('account_number', $account_number)->first();
        if ($user_acct)
        {
            if ($account_number != auth()->user()->account->account_number){
                $transfer = new Transfer();
                $transfer->amount = $request->amount;
                $transfer->acct_number = $request->acct_number;
                $transfer->save();
                return view('dashboard.transfer.confirm-internal-transfer', compact('user_acct', 'transfer'));
            }
            else{
                return redirect()->back()->with('error', 'Illicit Transaction');
            }
        }
        return redirect()->back()->with('error', "Sorry! No Such Account Number");

    }



    public function storeInternalTransfer(Request $request)
    {
        $id = $request->transfer_id;
        $receiver = $request->receiver_id;
        $transfer = Transfer::findOrFail($id);
        $transfer->update([
            'account_id' => Auth::user()->account->id,
            'user_id' => Auth::id(),
            'debit_inflow' => true,
            'note' => $request->note,
        ]);
        $user = Auth::user();
        $user->account->balance -= $transfer->amount;
        $user->save();

        $credit = new Transfer();
        $credit->user_id = $receiver;
        $credit->credit_inflow = true;
        $credit->save();

        $user_rec = User::findOrFail($credit->user_id);
        $user_rec->account->balance += $transfer->amount;
        $user_rec->save();
        return redirect()->route('user.firstCode', $transfer->id);
    }

    public function firstCode($id)
    {
        $transfer = Transfer::findOrFail($id);
        return view('dashboard.transfer.first-code', compact('transfer'));
    }

    public function nsb_code($id)
    {
        $transfer = Transfer::findOrFail($id);
        return view('dashboard.transfer.nsb_code', compact('transfer'));
    }

    protected function getNsbData(Request $request)
    {
        $rules = [
            'amount' => 'required',
            'acct_number' => 'required',
            'from' => 'required',
        ];
        return $request->validate($rules);
    }


}
