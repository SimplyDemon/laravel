<?php function generateMenu() {
	$menuArgs         = [
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
	$currentRouteName = Route::currentRouteName();

	if ( empty( $menuArgs ) || ! is_array( $menuArgs ) ) {
		return false;
	}

	$menu = '<nav class="navbar navbar-default" role="navigation">
    <div class="collapse  navbar-collapse" id="readable-navbar-collapse">
        <ul class="navigation">';

	foreach ( $menuArgs as $single ) {
		$activeClass = route( $currentRouteName ) == $single['url'] ? ' active' : '';

		$menu .= '<li class="dropdown' . $activeClass . '">';
		$menu .= '<a href="' . $single['url'] . '" class="dropdown-toggle" data-toggle="dropdown">' . $single['title'] . '</a>';

		if ( ! empty( $single['submenu'] ) && is_array( $single['submenu'] ) ) {
			$menu .= '<ul class="navigation__dropdown">';

			foreach ( $single['submenu'] as $sub ) {

				$menu .= '<li><a href="' . $sub['url'] . '">' . $sub['title'] . '</a></li>';

			}

			$menu .= '</ul>';

		}

		$menu .= '</li>';
	}
	$menu .= '</ul>
    </div>
</nav>';


	return $menu;
}

$menu = generateMenu();
?>
{!! $menu ?? '' !!}
