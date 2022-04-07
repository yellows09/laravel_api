<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use App\Models\Categories;
use App\Models\CategoryPost;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PostController extends Controller
{
    public function index(Categories $categories)
    {
//        return Categories::with('posts')->get();
        return PostResource::collection(Categories::with('posts')->get());
//        return PostResource::collection(Categories::all());
    }

    public function createPost(Request $request)
    {
        $p = Posts::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        $c = Categories::create([
            'category_name' => $request->category_name
        ]);
        $categories = Categories::find($c->id);
        $categories->posts()->attach($p->id);
    }

    public function createPostForm()
    {
        return view('createPostForm');
    }
}
