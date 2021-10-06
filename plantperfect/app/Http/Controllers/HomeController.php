<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index()
    {
        $plants = DB::table('plants')->get();

        return view('welcome', ['plants' => $plants]);
    }

}
