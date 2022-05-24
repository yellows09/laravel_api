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
@foreach($categories as $cat)
    <b>Категория:</b> <?=$cat->category_name?>
        @foreach($posts as $p)
            <b>Пост:</b> <a href="showPost/<?=$p->id?>"><?=$p->title?></a>
        @endforeach
    <br>
    --------------------------------------------
    <br>
@endforeach
</body>
</html>
