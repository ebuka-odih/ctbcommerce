<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function status()
    {
        if ($this->status == 1)
        {
            return "<span class='badge rounded-pill bg-success'>Successful</span>";
        }elseif($this->status == 0)
        {
            return "<span class='badge rounded-pill bg-warning'>Pending</span>";
        }
        return "<span class='badge rounded-pill bg-danger'>Canceled</span>";

    }

    public function type()
    {
        if ($this->debit_inflow = 1)
        {
            return "Debit";
        }
        return "Credit";
    }


}
