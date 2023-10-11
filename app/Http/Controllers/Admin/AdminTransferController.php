<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transfer;
use Illuminate\Http\Request;

class AdminTransferController extends Controller
{
   public function transfers()
   {
       $transfer = Transfer::all();
       return view('admin.transactions.transfer', compact('transfer'));
   }

    public function viewTransfer($id)
    {
        $transfer = Transfer::findOrFail($id);
        return view('admin.transactions.view-transfer', compact('transfer'));
    }

    public function deleteTransfer($id)
    {
        $transfer = Transfer::findOrFail($id);
        $transfer->delete();
        return redirect()->back()->with('success', 'Transaction Deleted');
    }

}
