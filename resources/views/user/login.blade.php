@extends('layouts.one-column')

@section('content')

    <h2>Авторизация</h2>
    <form method="post" action="">
        {{ csrf_field() }}
        <label for="name">Имя</label><br>
        <input type="text" name="name" id="name">
        <br><br>

        <label for="password">Пароль</label><br>
        <input type="password" name="password" id="password">
        <br><br>
        <button type="submit">Войти</button>
        <br><br><br><br><br><br><br><br><br><br>

    </form>
@endsection