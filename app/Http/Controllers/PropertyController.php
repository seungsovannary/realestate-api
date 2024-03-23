<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Str;

class PropertyController extends BaseController
{
    public function getList(Request $request)
    {
        $data = Property::with(["user", "category"]);
        if ($status = $request->get('status')) {
            $data->where("status", $status);
        }

        if ($name = $request->get('name')) {
            $data->where('name', "like", "%" . $name . "%");
        }

        if ($category_id = $request->get('category_id')) {
            $data->where('category_id', $category_id);
        }

        $data = $data->get();

        return response()->json(
            $data
        );
    }

    public function get($id)
    {
        $data = Property::with(["user", "category"])->find($id);

        return response()->json(
            $data
        );
    }

    public function update($id, Request $request)
    {
        $data = $request->all();
        
        if ($imageUrl = $request->get("image_url")) {
            $data["image"] = $imageUrl;
        }

        if ($image64 = $request->get("image")) {
            $extension = explode('/', explode(':', substr($image64, 0, strpos($image64, ';')))[1])[1];   // .jpg .png .pdf
            $replace = substr($image64, 0, strpos($image64, ',') + 1);
            $image = str_replace($replace, '', $image64);
            $image = str_replace(' ', '+', $image);
            $imageName = Str::random(10) . '.' . $extension;

            Storage::disk('public')->put($imageName, base64_decode($image));
            $data["image"] = Storage::disk("public")->url($imageName);
        }

        $property = Property::findOrFail($id);
        $property->update($data);
        $property->save();

        return response()->json(
            $property
        );
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => "required",
            'price' => "required",
            'category_id' => "required|exists:categories,id"
        ]);
        $data = $request->all();
        $data["user_id"] = Auth::user()->id;

        if ($imageUrl = $request->get("image_url")) {
            $data["image"] = $imageUrl;
        }

        if ($image64 = $request->get("image")) {
            $extension = explode('/', explode(':', substr($image64, 0, strpos($image64, ';')))[1])[1];   // .jpg .png .pdf
            $replace = substr($image64, 0, strpos($image64, ',') + 1);
            $image = str_replace($replace, '', $image64);
            $image = str_replace(' ', '+', $image);
            $imageName = Str::random(10) . '.' . $extension;

            Storage::disk('public')->put($imageName, base64_decode($image));
            $data["image"] = Storage::disk("public")->url($imageName);
        }

        $property = Property::create($data);

        return response()->json(
            $property
        );
    }
}
