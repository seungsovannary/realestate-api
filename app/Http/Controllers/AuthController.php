<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

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
                'access_token' => $token->plainTextToken
            ];
        }

        return response()->json(
            [
                'message' => "Login Failed"
            ],
            422
        );
    }

    public function user()
    {
        $user = Auth::user();
        return response()->json(
            $user
        );
    }
}
