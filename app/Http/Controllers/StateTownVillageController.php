<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Models\Town;
use App\Models\Village;
use Illuminate\Http\Request;

class StateTownVillageController extends Controller
{
    public function indexState()
    {
        $states = State::all();
        return response()->json($states);
    }

    public function indexTown()
    {
        // Fetch towns where state_id matches $id
        $towns = Town::all();

        return response()->json($towns);
    }
    public function indexVillage()
    {
        // Fetch village where town_id matches $id
        $village = Village::all();

        return response()->json($village);
    }
}
