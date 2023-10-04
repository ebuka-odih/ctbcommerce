<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $guarded = [];
    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function account(){
        return $this->hasOne(Account::class, 'user_id');
    }

    public function fullname()
    {
        return $this->first_name.' '.$this->middle_name.' '.$this->last_name;
    }

    public function status()
    {
        if ($this->status == 1){
            return "<span class='badge bg-success'>Active</span>";
        }else{
            return "<span class='badge bg-danger'>InActive</span>";
        }
    }


}
