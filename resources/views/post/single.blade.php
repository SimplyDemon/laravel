@extends('layouts.one-column')
@section('content')
    <div class="container">
        <div class="boxed  push-down-60">
            <div class="meta">
                <img class="wp-post-image" src="{{$post->image}}" alt="Blog image" width="1138" height="493">
                <div class="row">
                    <div class="col-xs-12  col-sm-10  col-sm-offset-1  col-md-8  col-md-offset-2">
                        <div class="meta__container--without-image">
                            <div class="row">
                                <div class="col-xs-12  col-sm-8">
                                    <div class="meta__info">
                                        <span class="meta__date"><span class="glyphicon glyphicon-calendar"></span> &nbsp; {{$date}}
                                            г.</span>
                                    </div>
                                </div>
                                <div class="col-xs-12  col-sm-4">
                                    {{--<div class="comment-icon-counter-detail">--}}
                                    {{--<span class="glyphicon glyphicon-comment comment-icon"></span>--}}
                                    {{--<span class="comment-counter">10</span>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xs-10  col-xs-offset-1  col-md-8  col-md-offset-2  push-down-60">

                    <div class="post-content">
                        <h1>
                            <a href="#">{{$post->title}}</a>
                        </h1>
                        <h3>{{$post->tagline}}</h3>
                        {!! $post->fulltext !!}
                    </div>

                    @if($tags)
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="tags">
                                    <h6>Тэги</h6>
                                    <hr>
                                    @foreach($tags as $tag)
                                        <a href="#" class="tags__link">{{$tag->name}}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </div>


@endsection