@extends('layouts.one-column')

@section('content')

    <h2>Регистрация нового пользователя</h2>
    <form method="post" action="">
        <label for="name">Имя</label><br>
        <input type="text" name="name" id="name">
        <br><br>

        <label for="password">Пароль</label><br>
        <input type="password" name="password" id="password">
        <br><br>
        <label for="password_confirmation">Пароль еще раз</label><br>
        <input type="password" name="password_confirmation" id="password_confirmation">
        <br><br><br><br><br><br><br><br><br><br>

    </form>
@endsection