@extends('layouts.base')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-xs-12  col-md-8">

            @yield('content')

        </div>

        <div class="col-xs-12  col-md-4">
            @include('widgets.author')
            <div class="sidebar  boxed  push-down-30">
                <div class="row">
                    <div class="col-xs-10  col-xs-offset-1">

                        @include('widgets.categories')
                        @include('widgets.featured-post')
                        @include('widgets.posts')
                        @include('widgets.tags')

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection