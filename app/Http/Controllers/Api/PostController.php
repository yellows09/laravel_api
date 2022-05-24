<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\FilterRequest;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\PostResource;
use App\Models\Categories;
use App\Models\CategoryPost;
use App\Models\Post;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Jenssegers\Agent\Agent;

class PostController extends Controller
{
    public function index(Categories $categories, FilterRequest $request)
    {
//        $posts = Posts::paginate(5);
//        $categories = Categories::all();
        $request = $request->validated();
        $query = Posts::query();
        if (isset($request['title'])) {
            $query->where('title','like',"%{$request['title']}%");
        }
        $posts = $query->get();
        return view('home', ['posts' => $posts, 'categories' => $categories]);
    }

    public function indexJson(Categories $categories)
    {
        $posts = PostResource::collection(Categories::with('posts')->get());
        return $posts;
    }

    public function posts()
    {
        $posts = Posts::paginate(5);
        return view('posts', ['posts' => $posts]);
    }

    public function categories()
    {
        $categories = Categories::all();
        return view('categories', ['categories' => $categories]);
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

    public function deletePost(Request $request)
    {
        $delete = Posts::where('id', $request->id)->first()->delete();
        return $delete;
    }

    public function createPostForm()
    {
        return view('createPostForm');
    }

    public function show(Request $request)
    {
//        return new CategoryResource($posts);
        return Posts::find($request->id);
    }

    public function update(Posts $posts, Request $request)
    {
        return Posts::where('id', $request->id)->update(['title' => $request->title]);
    }
}
