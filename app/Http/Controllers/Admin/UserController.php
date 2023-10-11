<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('admin.user.list', compact('users'));
    }

    public function viewUser($id)
    {
        $user = User::findOrFail($id);
        return view('admin.user.user-detail', compact('user'));
    }

    public function approveUser($id)
    {
        $user = User::findOrFail($id);
        $user->status = 1;
        $user->save();
    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('success', "User Deleted Successfully");
    }
}
