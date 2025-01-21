<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        return view('backend.index');
    }
    public function profile()
    {
        return view('backend.profile');
    }
    public function updateProfile(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.Auth::user()->id,
            'password' => $request->password?'min:6|confirmed': '',

        ]);
        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $request->password ? $user->password = Hash::make($request->password): '';
        $user->save();
        flash()->position('top-right')->success('Profile updated successfully');
        return back();


    }
}
