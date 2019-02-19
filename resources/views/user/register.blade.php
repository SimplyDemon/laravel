@extends('layouts.one-column')

@section('content')

    <h2>Регистрация нового пользователя</h2>
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

        @if (!empty($errors->get('email')) && count($errors->get('email')) > 0)
            @foreach ($errors->get('email') as $message)
                <p style="display: inline-block;border: 2px double red ;color:red">{{$message}}</p><br>
            @endforeach
        @endif
        <label for="email">Почта</label><br>
        <input type="email" name="email" id="email" value="{{old('email','')}}">
        <br><br>

        @if (!empty($errors->get('password')) && count($errors->get('password')) > 0)
            @foreach ($errors->get('password') as $message)
                <p style="display: inline-block;border: 2px double red ;color:red">{{$message}}</p><br>
            @endforeach
        @endif
        <label for="password">Пароль</label><br>
        <input type="password" name="password" id="password">
        <br><br>
        @if (!empty($errors->get('password_confirmation')) && count($errors->get('password_confirmation')) > 0)
            @foreach ($errors->get('password_confirmation') as $message)
                <p style="display: inline-block;border: 2px double red ;color:red">{{$message}}</p><br>
            @endforeach
        @endif
        <label for="password_confirmation">Пароль еще раз</label><br>
        <input type="password" name="password_confirmation" id="password_confirmation">
        <br><br>
        @if (!empty($errors->get('phone')) && count($errors->get('phone')) > 0)
            @foreach ($errors->get('phone') as $message)
                <p style="display: inline-block;border: 2px double red ;color:red">{{$message}}</p><br>
            @endforeach
        @endif
        <label for="phone">Телефон</label><br>
        <input type="text" name="phone" id="phone" placeholder="+7(999)222-33-44" value="{{old('phone','')}}">
        <br><br>
        <button type="submit">Зарегистрироваться</button>
        <br><br><br><br><br><br><br><br>

    </form>
@endsection