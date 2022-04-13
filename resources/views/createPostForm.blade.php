@include('main')
@yield('nav')
<br>
<form action="{{route('createPost')}}" method="post">
    @csrf
    <input type="text" name = 'title'>
    <input type="text" name = 'description'>
    <input type="text" name = 'category_name'>
    <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">send</button>
</form>
