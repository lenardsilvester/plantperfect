<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index()
    {
        return view('users.index');
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        // this function stores the user and then attempts to log the user in.
        $this->validate($request, [
            'name'=>'required|max:255',
            'username'=>'required|max:255',
            'email'=>'required|email|unique:users|max:255',
            'password'=>'required|confirmed',
        ]);

        User::create([
            'name'=>$request->name,
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('home');
    }
}