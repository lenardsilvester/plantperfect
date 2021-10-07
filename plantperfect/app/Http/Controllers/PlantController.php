<?php

namespace App\Http\Controllers;

use App\Models\Plants;
use Illuminate\Http\Request;

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
}
