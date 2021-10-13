<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        // this function attempts to login with the given credentials.
        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required',
        ]);

        if (!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('status', 'Password or email is incorrect.');
        }

        return redirect()->route('home');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->intended('home');
    }
}