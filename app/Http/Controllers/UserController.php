<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Str;

class UserController extends BaseController
{
    public function getList()
    {
        $users = User::with('role')->latest()->get();

        return response()->json(
            $users
        );
    }

    public function get($id)
    {
        $user = User::with('role')->findOrFail($id);

        return response()->json(
            $user
        );
    }

    public function update($id, Request $request)
    {
        $data = $request->all();

        if ($imageUrl = $request->get("profile_url")) {
            $data["profile"] = $imageUrl;
        }

        if ($image64 = $request->get("profile")) {
            $extension = explode('/', explode(':', substr($image64, 0, strpos($image64, ';')))[1])[1];   // .jpg .png .pdf
            $replace = substr($image64, 0, strpos($image64, ',') + 1);
            $image = str_replace($replace, '', $image64);
            $image = str_replace(' ', '+', $image);
            $imageName = Str::random(10) . '.' . $extension;

            Storage::disk('public')->put($imageName, base64_decode($image));
            $data["profile"] = Storage::disk("public")->url($imageName);
        }

        info($data);
        $user = User::findOrFail($id);
        $user->update($data);
        $user->save();

        return response()->json(
            $user
        );
    }
}
