<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class CategoryController extends BaseController
{
        public function getList()
    {
        $data = Category::all();

        return response()->json(
            $data
        );
    }

    public function get($id)
    {
        $data = Category::find($id);

        return response()->json(
            $data
        );
    }

    public function update($id, Request $request)
    {
        $data = $request->all();

        $Category = Category::findOrFail($id);
        $Category->update($data);
        $Category->save();

        return response()->json(
            $Category
        );
    }

    public function create(Request $request)
    {
        $data = $request->all();

        $Category = Category::create($data);

        return response()->json(
            $Category
        );
    }
}
