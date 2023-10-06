<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Transfer;
use http\Client\Curl\User;
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
            $data = $this->getNsbData($request);
            $account_number = $request->input('acct_number');
            $user_acct = Account::where('account_number', $account_number)->first();
            if ($user_acct){
                if ($data['amount'] > Auth::user()->account->balance){
                    return redirect()->back()->with('declined', 'Insufficient Balance');
                }
                if ($account_number != auth()->user()->account->account_number){
                    $data['user_id'] = Auth::id();
                    $data['account_id'] = Auth::user()->account->id;
                    $data['internal_transfer'] = 1;
                    $transfer = Transfer::create($data);
                }else{
                    return redirect()->back()->with('illicit', 'Illicit Transaction');
                }
            }else{
                return redirect()->back()->with('not_found', "Sorry! No Such Account Number");
            }

        return redirect()->route('user.confirmDetail', $transfer->id)->with('success', "Transfer Successful");
    }



    public function loadingNSB($id)
    {
        $transfer = Transfer::findOrFail($id);
        return view('dashboard.transfer.loading-nsb-code', compact('transfer'));
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
