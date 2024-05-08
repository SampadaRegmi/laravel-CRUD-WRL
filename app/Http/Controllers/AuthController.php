<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    //
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (auth()->attempt($request->only('email', 'password'))) {
            return redirect()->route('dashboard');
        }

        return back()->with('status', 'Invalid login details');

    }

    public function register_view()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'password' => 'required|min:8',
            'password_repeat' => 'required|min:8|same:password'
        ]);
        
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'password' => Hash::make($request->password),
            'password_repeat' => Hash::make($request->password_repeat)
        ]);

        // if the user is created, redirect to login page
        return redirect()->route('login');
    } 

    public function dashboard()
    {
        return view('dashbord');
    }
}
