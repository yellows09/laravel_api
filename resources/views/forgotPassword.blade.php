<form action="{{route('forgotPasswordProcess')}}" method="post">
    @csrf
    <input type="text" name="email" placeholder="Введите емаил">
    <button type="submit">Получить новый пароль</button>
</form>
