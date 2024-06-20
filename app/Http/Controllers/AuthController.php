<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AuthController extends BaseController
{
    public function login(Request $request)
    {
        $email = $request->get("email");
        $password = $request->get("password");

        $result = Auth::attempt([
            'email' => $email,
            'password' => $password
        ]);

        if ($result) {
            // create a token for user
            $token = $request->user()->createToken("access token");
            return [
                'success' => true,
                'access_token' => $token->plainTextToken,
                'user' => $request->user(),
            ];
        }

        return response()->json(
            [
                'success' => false,
                'message' => "Login Failed",
                // 'user' => $request->user()
            ],
            422
        );
    }

    public function register(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|email|unique:users",
            "password" => "required|min:8|confirmed",
            "role_id" => "required|exists:roles,id|not_in:1"
        ]);
        $form = $request->all();

        $form['password'] = Hash::make($form['password']);

        if ($imageUrl = $request->get("profile_url")) {
            $form["profile"] = $imageUrl;
        }

        if ($image64 = $request->get("profile")) {
            $extension = explode('/', explode(':', substr($image64, 0, strpos($image64, ';')))[1])[1];   // .jpg .png .pdf
            $replace = substr($image64, 0, strpos($image64, ',') + 1);
            $image = str_replace($replace, '', $image64);
            $image = str_replace(' ', '+', $image);
            $imageName = Str::random(10) . '.' . $extension;

            Storage::disk('public')->put($imageName, base64_decode($image));
            $form["profile"] = Storage::url($imageName);
        }

        $data = User::create($form);

        return response()->json(['data' => $data, 'message' => "register successfully!"]);
    }

    public function logout()
    {
        Auth::logout();

        return response()->json([
            'message' => 'success'
        ]);
    }

    public function user()
    {
        $user = Auth::user();
        return response()->json(
            $user
        );
    }
}
