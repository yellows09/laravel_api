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
    @foreach($posts as $p)
        <b>Категория:</b> <?=$p->category_name?>
        @foreach($p['posts'] as $one)
            <b>Пост:</b> <a href="showPost/<?=$one['id']?>"><?=$one['title']?></a>
        @endforeach
        <br>
        --------------------------------------------
        <br>
    @endforeach
</body>
</html>
