<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>title</title>

    <script src="jquery.js"></script>
</head>
<header>
    @section('header')
        This is the default Header.
    @show

</header>
<body>

<div class="content">
    @yield('content')
</div>

@include('blocks.footer')
</body>
</html>