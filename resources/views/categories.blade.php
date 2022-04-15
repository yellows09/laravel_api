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
    @foreach($categories as $category)
        <?=$category->category_name?>
            <br>
        -----------------------------
            <br>
    @endforeach
</div>
</body>
</html>
