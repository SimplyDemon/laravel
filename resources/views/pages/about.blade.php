@extends('layouts.one-column')

@section('content')


    <div class="row">
        <div class="col-xs-12  col-md-8">

            <div class="widget-author  boxed  push-down-30">
                <div class="widget-author__image-container">
                    <img class="wp-post-image" src="images/dummy-licensed/about-us-image.jpg" alt="About Us image" width="748" height="324">
                </div>
                <div class="row">
                    <div class="col-xs-10  col-xs-offset-1">
                        <div class="widget-author__content">
                            <h4>About Us</h4>
                            <pre>
                                {{$content ?? 'No any custom content'}}
                            </pre>
                            <p>Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-us">

                <div class="row">
                    <div class="col-xs-12  col-sm-6">

                        <div class="widget-author  boxed  push-down-30">
                            <div class="widget-author__image-container">
                                <div class="widget-author__avatar--blurred">
                                    <img src="images/dummy/about-1.jpg" alt="Avatar image" width="90" height="90">
                                </div>
                                <img class="widget-author__avatar" src="images/dummy/about-1.jpg" alt="Avatar image" width="90" height="90">
                            </div>
                            <div class="row">
                                <div class="col-xs-10  col-xs-offset-1">
                                    <h4>Timothy Miler</h4>
                                    <p>User Interface Designer, Amateurish Poker Player and Imaginary Breakdancer ...</p>
                                </div>
                            </div>
                        </div>

                        <div class="widget-author  boxed  push-down-30">
                            <div class="widget-author__image-container">
                                <div class="widget-author__avatar--blurred">
                                    <img src="images/dummy/about-2.jpg" alt="Avatar image" width="90" height="90">
                                </div>
                                <img class="widget-author__avatar" src="images/dummy/about-2.jpg" alt="Avatar image" width="90" height="90">
                            </div>
                            <div class="row">
                                <div class="col-xs-10  col-xs-offset-1">
                                    <h4>Christine Rivera</h4>
                                    <p>Product designer, markup writer and player of videogames. I like everything robot related.</p>
                                </div>
                            </div>
                        </div>

                        <div class="widget-author  boxed  push-down-30">
                            <div class="widget-author__image-container">
                                <div class="widget-author__avatar--blurred">
                                    <img src="images/dummy/about-3.jpg" alt="Avatar image" width="90" height="90">
                                </div>
                                <img class="widget-author__avatar" src="images/dummy/about-3.jpg" alt="Avatar image" width="90" height="90">
                            </div>
                            <div class="row">
                                <div class="col-xs-10  col-xs-offset-1">
                                    <h4>Joseph Holmes</h4>
                                    <p>I am Product Designer. I am into clean, simple, minimal, modern and usable design.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12  col-sm-6">

                        <div class="widget-author  boxed  push-down-30">
                            <div class="widget-author__image-container">
                                <div class="widget-author__avatar--blurred">
                                    <img src="images/dummy/about-4.jpg" alt="Avatar image" width="90" height="90">
                                </div>
                                <img class="widget-author__avatar" src="images/dummy/about-4.jpg" alt="Avatar image" width="90" height="90">
                            </div>
                            <div class="row">
                                <div class="col-xs-10  col-xs-offset-1">
                                    <h4>Liana Timofti</h4>
                                    <p>Web designer, markup writer and player of videogames. I am into clean, simple, minimal, modern and usable design and I like everything robot related.</p>
                                </div>
                            </div>
                        </div>

                        <div class="widget-author  boxed  push-down-30">
                            <div class="widget-author__image-container">
                                <div class="widget-author__avatar--blurred">
                                    <img src="images/dummy/about-5.jpg" alt="Avatar image" width="90" height="90">
                                </div>
                                <img class="widget-author__avatar" src="images/dummy/about-5.jpg" alt="Avatar image" width="90" height="90">
                            </div>
                            <div class="row">
                                <div class="col-xs-10  col-xs-offset-1">
                                    <h4>Danielle Thatcher</h4>
                                    <p>Markup writer and player of videogames, amateurish Poker Player and Imaginary Breakdancer.</p>
                                </div>
                            </div>
                        </div>

                        <div class="widget-author  boxed  push-down-30">
                            <div class="widget-author__image-container">
                                <div class="widget-author__avatar--blurred">
                                    <img src="images/dummy/about-6.jpg" alt="Avatar image" width="90" height="90">
                                </div>
                                <img class="widget-author__avatar" src="images/dummy/about-6.jpg" alt="Avatar image" width="90" height="90">
                            </div>
                            <div class="row">
                                <div class="col-xs-10  col-xs-offset-1">
                                    <h4>Esteban Philippe</h4>
                                    <p>I am just hungry.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12  col-md-4">
            <div class="widget-author  boxed  push-down-30">
                <div class="widget-author__image-container">
                    <div class="widget-author__avatar--blurred">
                        <img src="images/dummy/about-1.jpg" alt="Avatar image" width="90" height="90">
                    </div>
                    <img class="widget-author__avatar" src="images/dummy/about-1.jpg" alt="Avatar image" width="90" height="90">
                </div>
                <div class="row">
                    <div class="col-xs-10  col-xs-offset-1">
                        <h4>Иван Иванов</h4>
                        <p>Web разработчик, PHP разработчик, блоггер</p>
                    </div>
                </div>
            </div>
            <div class="sidebar  boxed  push-down-30">
                <div class="row">
                    <div class="col-xs-10  col-xs-offset-1">

                        <div class="widget-categories  push-down-30">
                            <h6>РАЗДЕЛЫ</h6>
                            <ul>
                                <li>
                                    <a href="#">Разработка &nbsp; <span class="widget-categories__text">(16)</span> </a>
                                </li>
                                <li>
                                    <a href="#">PHP &nbsp; <span class="widget-categories__text">(13)</span> </a>
                                </li>
                                <li>
                                    <a href="#">JavaScript &nbsp; <span class="widget-categories__text">(9)</span> </a>
                                </li>
                                <li>
                                    <a href="#">Про жизнь &nbsp; <span class="widget-categories__text">(23)</span> </a>
                                </li>
                                <li>
                                    <a href="#">Путешествия &amp; Квесты &nbsp; <span class="widget-categories__text">(3)</span> </a>
                                </li>
                            </ul>
                        </div>

                        <div class="widget-featured-post  push-down-30">
                            <h6>Избранный пост</h6>
                            <img src="images/dummy-licensed/blog-image.jpg" alt="Featured post" width="293" height="127">
                            <h4>
                                <a href="post.html">Мой любимый пост</a>
                            </h4>
                            <p>Что нужно написать в посте чтобы он попал сюда?</p>
                        </div>

                        <div class="widget-posts  push-down-30">
                            <h6>Популярное / Свежее</h6>

                            <ul class="nav  nav-tabs">
                                <li class="active">
                                    <a href="#recent-posts" data-toggle="tab"> <span class="glyphicon  glyphicon-time"></span> &nbsp;Свежо</a>
                                </li>
                                <li>
                                    <a href="#popular-posts" data-toggle="tab"> <span class="glyphicon  glyphicon-flash"></span> &nbsp;Популярно </a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div class="tab-pane  fade  in  active" id="recent-posts">
                                    <div class="push-down-15">
                                        <img src="images/dummy-licensed/blog-image-small.jpg" alt="Posts">
                                        <h5>
                                            <a href="post.html">This is a showcase of the most recent posts</a>
                                        </h5>
                                        <span class="widget-posts__time">19 hours ago</span>
                                    </div>
                                    <div class="push-down-15">
                                        <img src="images/dummy-licensed/blog-image-3-small.jpg" alt="Posts">
                                        <h5>
                                            <a href="post.html">This is a showcase of the most recent posts</a>
                                        </h5>
                                        <span class="widget-posts__time">19 hours ago</span>
                                    </div>
                                    <div class="push-down-15">
                                        <img src="images/dummy-licensed/blog-image-small.jpg" alt="Posts">
                                        <h5>
                                            <a href="post.html">This is a showcase of the most recent posts</a>
                                        </h5>
                                        <span class="widget-posts__time">19 hours ago</span>
                                    </div>
                                </div>
                                <div class="tab-pane  fade" id="popular-posts">
                                    <div class="push-down-15">
                                        <img src="images/dummy-licensed/blog-image-3-small.jpg" alt="Posts">
                                        <h5>
                                            <a href="post.html">This is a showcase of the most popular posts</a>
                                        </h5>
                                        <span class="widget-posts__time">9 hours ago</span>
                                    </div>
                                    <div class="push-down-15">
                                        <img src="images/dummy-licensed/blog-image-small.jpg" alt="Posts">
                                        <h5>
                                            <a href="post.html">This is a showcase of the most popular posts</a>
                                        </h5>
                                        <span class="widget-posts__time">12 hours ago</span>
                                    </div>
                                    <div class="push-down-15">
                                        <img src="images/dummy-licensed/blog-image-3-small.jpg" alt="Posts">
                                        <h5>
                                            <a href="post.html">This is a showcase of the most popular posts</a>
                                        </h5>
                                        <span class="widget-posts__time">19 hours ago</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tags  widget-tags">
                            <h6>Тэги</h6>
                            <hr>
                            <a href="#" class="tags__link">Разработка</a>
                            <a href="#" class="tags__link">Web</a>
                            <a href="#" class="tags__link">UI/UX</a>
                            <a href="#" class="tags__link">Жизнь</a>
                            <a href="#" class="tags__link">Обо всем</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection