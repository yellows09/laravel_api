<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $cat = \App\Models\Categories::with('posts')->get();
        return $cat;
    }

    public function createPost(Request $request)
    {
        Posts::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        Categories::create([
            'category_name' => $request->category_name
        ]);
    }

    public function createPostForm()
    {
        return view('createPostForm');
    }
}
