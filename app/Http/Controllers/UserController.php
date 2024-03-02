<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    public function getList()
    {
        $users = [
            [
                "id" => "1",
                "name" => "sova"
            ], [
                "id" => "1",
                "name" => "sova"
            ]
        ];

        return response()->json(
            $users
        );
    }

    public function get($id)
    {
        $user = [
            "id" => "1",
            "name" => "sova"
        ];

        return response()->json(
            $user
        );
    }
}
