@extends('layouts.one-column')

@section('content')

    <h2>Авторизация</h2>
    @if (!empty($errorMessage))
        <p style="display: inline-block;border: 2px double red ;color:red">{{$errorMessage}}</p><br>
    @endif
    <form method="post" action="">
        {{ csrf_field() }}
        @if (!empty($errors->get('name')) && count($errors->get('name')) > 0)
            @foreach ($errors->get('name') as $message)
                <p style="display: inline-block;border: 2px double red ;color:red">{{$message}}</p><br>
            @endforeach
        @endif
        <label for="name">Имя</label><br>
        <input type="text" name="name" id="name" value="{{old('name','')}}">
        <br><br>

        @if (!empty($errors->get('password')) && count($errors->get('password')) > 0)
            @foreach ($errors->get('password') as $message)
                <p style="display: inline-block;border: 2px double red ;color:red">{{$message}}</p><br>
            @endforeach
        @endif
        <label for="password">Пароль</label><br>
        <input type="password" name="password" id="password">
        <br><br>
        <button type="submit">Войти</button>
        <br><br><br><br><br><br><br><br><br><br>

    </form>
@endsection