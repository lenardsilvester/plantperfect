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
        // a simple join statement to find all the plants based on the plant_id in the database.
        $cart = DB::table('plants')
                ->select('plants.name', 'plants.price', 'cart.id')
                ->join('cart', 'plants.id', '=', 'cart.plant_id')
                ->where('user_id', '=', Auth::user()->id)
                ->get();

        // this qeury sums up all the prices of the plants in your cart.      
        $total_price = DB::table('plants')
            	 ->select(\DB::raw('SUM(plants.price) AS total'))
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
        // this function adds a item to your cart by stroing the plant_id and the user_id.
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
        // this function deletes a item from your cart.
        $this->validate($request, [
            'cart_id' => 'required|max:255',
        ]);

        $delete = DB::table('cart')
                  ->where('id', '=', $request->cart_id)
                  ->delete();
                  
        return redirect()->route('cart');
    }
}
