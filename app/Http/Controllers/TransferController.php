<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransferController extends Controller
{
    public function transfer()
    {
        return view('dashboard.transfer.transfer');
    }
}
