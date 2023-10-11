<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use Illuminate\Http\Request;

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
        $data = Transfer::create($data);
        return redirect()->route('user.firstCode', $data->id);
    }

    public function firstCode($id)
    {
        $transfer = Transfer::findOrFail($id);
        return view('dashboard.transfer.first-code', compact('transfer'));
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
