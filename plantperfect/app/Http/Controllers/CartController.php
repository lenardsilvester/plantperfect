<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Plants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index()
    {
        $cart = DB::table('plants')
                ->select('plants.name', 'plants.price', 'cart.id')
                ->join('cart', 'plants.id', '=', 'cart.plant_id')
                ->where('user_id', '=', Auth::user()->id)
                ->get();

        $total_price = DB::table('plants')
            	 ->select(\DB::raw('SUM(plants.price) as total'))
                 ->join('cart', 'plants.id', '=', 'cart.plant_id')
                 ->where('user_id', '=', Auth::user()->id)
                 ->first();

        $plants = Plants::all();

        return view('cart.index', [
            'cart' => $cart,
            'total_price' => $total_price,
            'plants' => $plants,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'plant_id' => 'required|max:255',
        ]);

        Cart::create([
            'plant_id' => $request->plant_id,
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('cart');
    }

    public function delete(Request $request)
    {
        $this->validate($request, [
            'cart_id' => 'required|max:255',
        ]);

        $delete = DB::table('cart')
                  ->where('id', '=', $request->cart_id)
                  ->delete();
                  
        return redirect()->route('cart');
    }
}
