@extends('layouts.one-column')

@section('content')

    <form action="" method="post">
        {{ csrf_field() }}

        @if (!empty($errorMessage))
            <p style="display: inline-block;border: 2px double red ;color:red">{{$errorMessage}}</p><br>
        @endif

        @if (!empty($errors->get('title')) && count($errors->get('title')) > 0)
            @foreach ($errors->get('title') as $message)
                <p style="display: inline-block;border: 2px double red ;color:red">{{$message}}</p><br>
            @endforeach
        @endif
        <label for="title">Заголовок</label><br>
        <input type="text" name="title" id="title" value="{{old('title','')}}" required><br>

        @if (!empty($errors->get('announce')) && count($errors->get('announce')) > 0)
            @foreach ($errors->get('announce') as $message)
                <p style="display: inline-block;border: 2px double red ;color:red">{{$message}}</p><br>
            @endforeach
        @endif
        <label for="announce">Анонс</label><br>
        <textarea rows="10" cols="45" name="announce" id="announce" required>{{old('announce','')}}</textarea><br>

        @if (!empty($errors->get('content')) && count($errors->get('content')) > 0)
            @foreach ($errors->get('content') as $message)
                <p style="display: inline-block;border: 2px double red ;color:red">{{$message}}</p><br>
            @endforeach
        @endif
        <label for="content">Содержимое</label><br>
        <textarea rows="10" cols="45" name="content" id="content" required>{{old('content','')}}</textarea><br>


        @if (!empty($errors->get('img')) && count($errors->get('img')) > 0)
            @foreach ($errors->get('img') as $message)
                <p style="display: inline-block;border: 2px double red ;color:red">{{$message}}</p><br>
            @endforeach
        @endif
        <label for="img">Ссылка на изображение записи</label><br>
        <input type="url" name="img" id="img" value="{{old('img','')}}"><br>

        <label for="tags">Теги</label><br>
        <textarea rows="10" cols="45" name="tags" id="tags"
                  placeholder="Укажите теги(одно слово) через запятую">{{old('tags','')}}</textarea><br>

        <input type="submit" value="Создать">
    </form>
@endsection