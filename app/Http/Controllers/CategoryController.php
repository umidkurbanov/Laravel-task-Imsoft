<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function cat_info()
    {
        $data = Category::with('posts')->get();

        return response()->json([
            'data' => $data
        ]);
    }
}