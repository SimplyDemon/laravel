<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>{{$title ?? 'Blog Place'}}</title>


    @include('css.header-css')
    @yield('extra-header-css')
    @include('js.header-scripts')
    @yield('extra-header-scripts')
</head>

<body>
<header class="header  push-down-45">
    <div class="container">
        @include('parts.header.logo')
        @include('parts.header.mobile-navigation-bar')
        @include('parts.header.top-menu')
        @include('parts.header.search-icon')
    </div>
</header>

@include('parts.search-panel')


@yield('container')

<footer class="footer">
    <div class="container">

        <div class="col-xs-12  col-md-3">
            @include('widgets.footer-social')
        </div>

        <div class="col-xs-12  col-md-3 col-md-offset-1">
            @include('widgets.footer-navigation')
        </div>
        <div class="col-xs-12  col-md-4 col-md-offset-1">
            @include('widgets.footer-contacts')
        </div>
    </div>
</footer>
<footer class="copyrights">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                @include('parts.footer.copyright')
            </div>
        </div>
    </div>
</footer>


@include('js.footer-scripts')
@yield('extra-footer-scripts')

</body>
</html>