<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Filter\PostFilter;
use App\Http\Requests\FilterRequest;
use App\Http\Resources\PostResource;
use App\Models\Categories;
use App\Models\Posts;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function index(Categories $categories, FilterRequest $request)
    {
        $posts = Posts::paginate(5);
        $categories = Categories::all();
        return view('home', ['posts' => $posts, 'categories' => $categories]);
    }

    public function filterPosts(FilterRequest $request){
        $request = $request->validated();
        $filter = app()->make(PostFilter::class,['queryParams' => array_filter($request)]);
        $posts = Posts::filter($filter)->get();
        dd($posts);
        if (isset($request['title'])) {
            $posts = Posts::where('title','like',"%{$request['title']}%")->get();
        }
        return view('filtered', ['posts' => $posts]);
    }

    public function indexJson(Categories $categories)
    {
        $posts = Categories::with('posts')->get();
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
