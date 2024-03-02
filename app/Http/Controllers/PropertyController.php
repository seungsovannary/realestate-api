<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class PropertyController extends BaseController
{
    public function getList()
    {
        $data = Property::all();

        return response()->json(
            $data
        );
    }

    public function get($id)
    {
        $data = Property::find($id);

        return response()->json(
            $data
        );
    }

    public function update($id, Request $request)
    {
        $data = $request->all();

        $property = Property::findOrFail($id);
        $property->update($data);
        $property->save();

        return response()->json(
            $property
        );
    }
}
