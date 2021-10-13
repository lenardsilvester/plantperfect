<?php

namespace App\Http\Controllers;

use App\Models\Plants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlantController extends Controller
{
    public function show($id) {
        $plant = Plants::findOrFail($id);
        $catalog = Plants::all();

        return view('plant.show', [
            'plant' => $plant,
            'catalog' => $catalog,
        ]);
    }

    public function search(Request $request)
    {   
        // this function receives a search qeury then searches for the matching rows.  
        $result = DB::table('plants')
                  ->where(\DB::raw('concat(name, price)'), 'LIKE', '%' . $request->input('query') . '%')
                  ->get();

        return view('search.index', [
            'result' => $result,
            'qeury' => $request->input('query')
        ]);
    }
}
