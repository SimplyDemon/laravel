<?php $routeName = Route::currentRouteName()?>
<nav class="navbar navbar-default" role="navigation">
    <div class="collapse  navbar-collapse" id="readable-navbar-collapse">
        <ul class="navigation">
            <li class="dropdown <?= $routeName === 'index' ? 'active' : ''?>">

                <a href="/" class="dropdown-toggle" data-toggle="dropdown">Главная</a>
            </li>
            <li class="<?= $routeName === 'elements' ? 'active' : ''?>">
                <a href="elements" class="dropdown-toggle" data-toggle="dropdown">Верстка</a>
            </li>
            <li class="<?= $routeName === 'about' ? 'active' : ''?>">
                <a href="about" class="dropdown-toggle" data-toggle="dropdown">Обо мне</a>
            </li>
            <li class="<?= $routeName === 'contacts' ? 'active' : ''?>">
                <a href="contacts" class="dropdown-toggle" data-toggle="dropdown">Обратная связь</a>
            </li>
        </ul>
    </div>
</nav>