@extends('layouts.one-column')

@section('content')

    <h2>Регистрация нового пользователя</h2>
    <form method="post" action="">
        {{ csrf_field() }}
        @if (isset($errors) && count($errors) > 0)
            <div class="">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <label for="name">Имя</label><br>
        <input type="text" name="name" id="name" value="{{old('name','')}}">
        <br><br>

        <label for="email">Почта</label><br>
        <input type="email" name="email" id="email" value="{{old('email','')}}">
        <br><br>


        <label for="password">Пароль</label><br>
        <input type="password" name="password" id="password">
        <br><br>
        <label for="password_confirmation">Пароль еще раз</label><br>
        <input type="password" name="password_confirmation" id="password_confirmation">
        <br><br>
        <label for="activation">Код активации</label><br>
        <input type="text" name="activation" id="activation" placeholder="XXX-000-XXX">
        <br><br>
        <button type="submit">Зарегистрироваться</button>
        <br><br><br><br><br><br><br><br>

    </form>
@endsection