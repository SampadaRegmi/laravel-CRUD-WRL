<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function showLoginForm()
{
    return view('auth.login');
}

public function login(Request $request)
{
    $credentials = [
        'email' => $request->email,
        'password' => $request->password
    ];

    if (auth()->attempt($credentials)) {
        return redirect()->route('dashboard');
    } else {
        return back()->withErrors([
            'message' => 'The email or password is incorrect, please try again'
        ]);
    }
}
public function logout()
{
    auth()->logout();
    return redirect()->route('login');
}
}
return redirect()->route('admin.dashboard');



