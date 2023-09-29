<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::where('email', '=', 'user@ctbcommerce.com')->first();
        if($admin === null){
            DB::table('users')->insert([
                'first_name' => 'User',
                'last_name' => 'Panel',
                'status' => 2,
                'username' => 'user',
                'admin' => 0,
                'email' => 'user@ctbcommerce.com',
                'email_verified_at' => \Carbon\Carbon::now(),
                'password' => Hash::make('USERPASS1234'),
            ]);
        }
    }

}
