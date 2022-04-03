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
    <div id="app">
        <post-index></post-index>
    </div>
    <script src="./js/app.js"></script>
</body>
</html>
