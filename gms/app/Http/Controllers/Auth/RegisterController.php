<?php

namespace App\Http\Controllers\Auth;  

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'password_repeat' => 'required|min:8|same:password'
        ]);
        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'password_repeat' => Hash::make($request->password_repeat)
        ]);

        // if the user is created, redirect to login page
        return redirect()->route('login');
    } 
}
