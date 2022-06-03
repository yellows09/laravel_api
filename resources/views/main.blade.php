<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
@section('nav')
    @auth("web")
        <div class="topnav">
            <a class="active" href="{{route("logout")}}">Logout</a>
            <a href="{{route("showCategories")}}">Categories</a>
            <a href="{{route("showPosts")}}">Posts</a>
            <a href="{{route("home")}}">All</a>
            <a href="{{route("createPostForm")}}">Create a post</a>
        </div>
    @endauth

    @guest("web")
        <div class="topnav">
{{--            <a class="active" href="{{route("login")}}">Login</a>--}}
{{--            <a href="{{route("registration")}}">Registration</a>--}}
{{--            <a href="{{route("forgotPassword")}}">Forgot Password</a>--}}
        </div>
    @endguest
@endsection
</body>
</html>
