<?php

namespace App\Http\Controllers;

use App\Models\Plants;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $plants = Plants::all();

        return view('welcome', [
            'plants' => $plants
        ]);
    }

}
