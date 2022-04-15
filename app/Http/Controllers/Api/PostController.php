<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\PostResource;
use App\Models\Categories;
use App\Models\CategoryPost;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index(Categories $categories)
    {
        $posts = PostResource::collection(Categories::with('posts')->get());
        return view('home',['posts'=>$posts]);
    }

    public function indexJson(Categories $categories)
    {
        $posts = PostResource::collection(Categories::with('posts')->get());
        return $posts;
    }

    public function posts()
    {
        $posts = Posts::all();
        return view('posts',['posts'=>$posts]);
    }

    public function categories()
    {
        $categories = Categories::all();
        return view('categories',['categories'=>$categories]);
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

    public function deletePost(Request $request){
        var_dump($request);
//        dd($request);
    }

    public function createPostForm()
    {
        return view('createPostForm');
    }

    public function show(Request $request){
//        return new CategoryResource($posts);
        return Posts::find($request->id);
    }

    public function update(Posts $posts,Request $request){
        return Posts::where('id',$request->id)->update(['title'=>$request->title]);
    }
}
