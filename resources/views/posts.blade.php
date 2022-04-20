@include('main')
@yield('nav')
@section('title','Домашняя страница')
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Laravel</title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
</head>
<body>
<div>
    @foreach($posts as $post)
        <?=$post->title?>

            <form method="POST" action="{{route('deletePost',['id' => $post->id])}}">
                {{ csrf_field() }}
                {{ method_field('POST') }}

                <div class="form-group">
                    <input type="submit" class="btn btn-danger delete-user" value="Delete post">
                </div>
            </form>
            <br>
        -----------------------------------------
            <br>
    @endforeach
</div>
</body>
</html>
