<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
   public function index()
   {
        $data = Post::width('category')->get();

        return response()->json([
            'data' => $data
        ]);
   }
}
