<?php

namespace App\Http\Controllers;

use App\Models\Save;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaveController extends Controller
{
    public function index()
    {
        $saves = Save::with(['user', 'property.category'])->get();
        return response()->json($saves);
    }

    public function store(Request $request)
    {
        $request->validate([
            'property_id' => 'required|exists:properties,id',
        ]);

        $save = Save::create([
            'user_id' => Auth::id(),
            'property_id' => $request->property_id,
        ]);

        return response()->json([
            'success' => true,
            'data' => $save,
        ]);
    }

    public function show($id)
    {
        $save = Save::with(['user', 'property'])->findOrFail($id);
        return response()->json($save);
    }

    public function destroy($id)
    {
        $save = Save::findOrFail($id);
        $save->delete();

        return response()->json([
            'success' => true,
        ]);
    }

    public function getByUserId($userId)
    {
        $saves = Save::with('property')->where('user_id', $userId)->get();

        return response()->json($saves);
    }

    public function saved($propertyId)
    {
        $user = Auth::user();
        $save = Save::where('user_id', $user->id)
            ->where('property_id', $propertyId)
            ->first();

        return response()->json($save ? true : false);
    }

    public function unsaved($propertyId)
    {
        $user = Auth::user();
        $save = Save::where('user_id', $user->id)
            ->where('property_id', $propertyId)
            ->first();

        $save->delete();
        return response()->json([
            'success' => true,
        ]);
    }
}
