<?php
$menuArgs = [
	[
		'title'   => 'Главная',
		'url'     => route( 'index' ),
		'submenu' => [
			[
				'title' => 'Регистрация',
				'url'   => route( 'getRegister' ),
			],
			[
				'title' => 'Авторизация',
				'url'   => route( 'getLogin' ),
			],
		]
	],
	[
		'title' => 'Верстка',
		'url'   => route( 'elements' ),
	],
	[
		'title' => 'Обо мне',
		'url'   => route( 'about' )
	],
	[
		'title' => 'Обратная связь',
		'url'   => route( 'contacts' )
	],

];
function generateMenu($menuArgs) {
$currentRouteName = Route::currentRouteName();

if ( empty( $menuArgs ) || ! is_array( $menuArgs ) ) {
	return false;
}
ob_start(); ?>
<nav class="navbar navbar-default" role="navigation">
    <div class="collapse  navbar-collapse" id="readable-navbar-collapse">
        <ul class="navigation">
	        <?php
	        foreach ($menuArgs as $single){
	        ?>
			<li class="dropdown <?= route( $currentRouteName ) == $single['url'] ? 'active' : ''?>">
				<a href="{{$single['url']}}" class="dropdown-toggle" data-toggle="dropdown">{{$single['title']}}</a>
		        <?php
		        if ( ! empty( $single['submenu'] ) && is_array( $single['submenu'] ) ) {?>
				<ul class="navigation__dropdown">
			        <?php
			        foreach ( $single['submenu'] as $sub ) {
			        ?>
					<li><a href="{{$sub['url']}}">{{$sub['title']}}</a></li>
			        <?php
			        }
			        ?>
				</ul>
		        <?php
		        }
		        ?>
            </li>
	        <?php
	        }
	        ?>
        </ul>
    </div>
</nav>
<?php

return ob_get_clean();
}
echo generateMenu( $menuArgs );
?>
