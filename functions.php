<?php
/**
 * Theme bootstrap.
 *
 * Этот файл functions.php — основной файл логики темы.
 * Здесь подключаются стили, скрипты и настраиваются возможности темы.
 *
 * @package CleanAndDotTheme
 */

/*
|--------------------------------------------------------------------------
| Защита от прямого доступа
|--------------------------------------------------------------------------
|
| ABSPATH — это константа WordPress.
| Если кто-то попытается открыть этот PHP файл напрямую через браузер,
| WordPress не будет загружен и константа ABSPATH не будет определена.
|
| В таком случае выполнение файла прекращается.
|
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/*
|--------------------------------------------------------------------------
| Функция получения URL к ассетам темы
|--------------------------------------------------------------------------
|
| Ассеты — это статические файлы:
| CSS
| JS
| изображения
| шрифты
|
| В этой теме они лежат в папке:
|
| /assets
|
| Эта функция помогает удобно получать URL к файлам внутри этой папки.
|
*/

function clean_dot_asset_uri( $path = '' ) {

	// базовая папка ассетов
	$relative = 'assets';

	/*
	|---------------------------------------------------------
	| Если передан путь к файлу
	|---------------------------------------------------------
	|
	| Например:
	| clean_dot_asset_uri('css/main.css')
	|
	| Тогда формируется путь:
	|
	| assets/css/main.css
	|
	*/

	if ( '' !== $path ) {
		$relative .= '/' . ltrim( $path, '/' );
	}

	/*
	|---------------------------------------------------------
	| get_theme_file_uri()
	|---------------------------------------------------------
	|
	| Функция WordPress возвращает полный URL к файлу темы.
	|
	| Например:
	|
	| https://site.com/wp-content/themes/theme-name/assets/css/main.css
	|
	*/

	return get_theme_file_uri( $relative );
}


/*
|--------------------------------------------------------------------------
| Функция версии файла
|--------------------------------------------------------------------------
|
| Используется для правильного обновления кеша браузера.
|
| Когда браузер загружает CSS/JS, он может кешировать файл.
|
| Если файл изменился, но URL тот же, браузер может взять
| старую версию из кеша.
|
| Поэтому WordPress позволяет добавлять версию файла:
|
| main.css?ver=12345
|
| Эта функция возвращает время последнего изменения файла.
|
*/

function clean_dot_asset_version( $relative_path ) {

	/*
	|---------------------------------------------------------
	| Получаем физический путь к файлу на сервере
	|---------------------------------------------------------
	|
	| Пример:
	|
	| /var/www/site/wp-content/themes/theme/assets/css/main.css
	|
	*/

	$file_path = get_theme_file_path( ltrim( $relative_path, '/' ) );


	/*
	|---------------------------------------------------------
	| Проверяем существует ли файл
	|---------------------------------------------------------
	*/

	if ( file_exists( $file_path ) ) {

		/*
		|---------------------------------------------------------
		| filemtime()
		|---------------------------------------------------------
		|
		| Возвращает время последнего изменения файла.
		|
		| Это удобно использовать как версию.
		|
		*/

		return (string) filemtime( $file_path );
	}

	/*
	|---------------------------------------------------------
	| Если файл не найден
	|---------------------------------------------------------
	|
	| Используем версию темы.
	|
	*/

	return wp_get_theme()->get( 'Version' );
}


/*
|--------------------------------------------------------------------------
| Настройка темы
|--------------------------------------------------------------------------
|
| Здесь мы говорим WordPress, какие возможности поддерживает тема.
|
*/

function clean_dot_theme_setup() {

	/*
	|---------------------------------------------------------
	| WordPress сам управляет тегом <title>
	|---------------------------------------------------------
	|
	| Без этого пришлось бы вручную писать <title> в header.php
	|
	*/

	add_theme_support( 'title-tag' );


	/*
	|---------------------------------------------------------
	| Поддержка миниатюр записей
	|---------------------------------------------------------
	|
	| Позволяет добавлять featured image для постов и страниц.
	|
	*/

	add_theme_support( 'post-thumbnails' );


	/*
	|---------------------------------------------------------
	| HTML5 разметка
	|---------------------------------------------------------
	|
	| WordPress будет выводить эти элементы в HTML5 формате.
	|
	*/

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);


	/*
	|---------------------------------------------------------
	| Регистрация меню
	|---------------------------------------------------------
	|
	| В админке появится место для назначения меню:
	|
	| Primary Menu
	|
	*/

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'clean-and-dot' ),
		)
	);
}


/*
|--------------------------------------------------------------------------
| Хук инициализации темы
|--------------------------------------------------------------------------
|
| after_setup_theme — момент, когда WordPress уже загрузил тему,
| но ещё не начал выводить страницу.
|
*/

add_action( 'after_setup_theme', 'clean_dot_theme_setup' );



/*
|--------------------------------------------------------------------------
| Подключение CSS и JavaScript
|--------------------------------------------------------------------------
|
| Здесь подключаются все стили и скрипты темы.
|
*/

function clean_dot_enqueue_assets() {

	/*
	|---------------------------------------------------------
	| Получаем версию темы
	|---------------------------------------------------------
	*/

	$theme_version = wp_get_theme()->get( 'Version' );


	/*
	|--------------------------------------------------------------------------
	| Основной style.css
	|--------------------------------------------------------------------------
	*/

	wp_enqueue_style(
		'clean-dot-theme',     // уникальный ID стиля
		get_stylesheet_uri(),  // URL style.css
		array(),               // зависимости
		$theme_version
	);


	/*
	|--------------------------------------------------------------------------
	| Normalize.css
	|--------------------------------------------------------------------------
	|
	| Библиотека, которая выравнивает стили браузеров.
	|
	*/

	wp_enqueue_style(
		'clean-dot-normalize',
		clean_dot_asset_uri( 'libs/normalize.css' ),
		array(),
		clean_dot_asset_version( 'assets/libs/normalize.css' )
	);


	/*
	|--------------------------------------------------------------------------
	| Swiper CSS
	|--------------------------------------------------------------------------
	|
	| Стили для библиотеки слайдера.
	|
	*/

	wp_enqueue_style(
		'clean-dot-swiper',
		clean_dot_asset_uri( 'libs/swiper-bundle.min.css' ),
		array(),
		clean_dot_asset_version( 'assets/libs/swiper-bundle.min.css' )
	);


	/*
	|--------------------------------------------------------------------------
	| Основной CSS темы
	|--------------------------------------------------------------------------
	|
	| Подключается после остальных стилей.
	|
	*/

	wp_enqueue_style(
		'clean-dot-main',
		clean_dot_asset_uri( 'css/main.css' ),
		array( 'clean-dot-theme', 'clean-dot-normalize', 'clean-dot-swiper' ),
		clean_dot_asset_version( 'assets/css/main.css' )
	);



	/*
	|--------------------------------------------------------------------------
	| JavaScript библиотеки
	|--------------------------------------------------------------------------
	*/


	// Swiper
	wp_enqueue_script(
		'clean-dot-swiper',
		clean_dot_asset_uri( 'libs/swiper-bundle.min.js' ),
		array(),
		clean_dot_asset_version( 'assets/libs/swiper-bundle.min.js' ),
		true
	);


	// GSAP — библиотека анимаций
	wp_enqueue_script(
		'clean-dot-gsap',
		clean_dot_asset_uri( 'libs/gsap.min.js' ),
		array(),
		clean_dot_asset_version( 'assets/libs/gsap.min.js' ),
		true
	);


	// ScrollTrigger — плагин GSAP
	wp_enqueue_script(
		'clean-dot-scroll-trigger',
		clean_dot_asset_uri( 'libs/ScrollTrigger.min.js' ),
		array( 'clean-dot-gsap' ),
		clean_dot_asset_version( 'assets/libs/ScrollTrigger.min.js' ),
		true
	);


	// Маска для input (например для телефона)
	wp_enqueue_script(
		'clean-dot-imask',
		clean_dot_asset_uri( 'libs/imask.js' ),
		array(),
		clean_dot_asset_version( 'assets/libs/imask.js' ),
		true
	);


	// Lightbox для изображений
	wp_enqueue_script(
		'clean-dot-fslightbox',
		clean_dot_asset_uri( 'libs/fslightbox.js' ),
		array(),
		clean_dot_asset_version( 'assets/libs/fslightbox.js' ),
		true
	);


	/*
	|--------------------------------------------------------------------------
	| Скрипт слайдера портфолио
	|--------------------------------------------------------------------------
	*/

	wp_enqueue_script(
		'clean-dot-portfolio-slider',
		clean_dot_asset_uri( 'js/sliders/portfolio-preview-slider.js' ),
		array( 'clean-dot-swiper' ),
		clean_dot_asset_version( 'assets/js/sliders/portfolio-preview-slider.js' ),
		true
	);

  /*
	|--------------------------------------------------------------------------
	| Скрипт вызова мобильного меню при клике на кнопку
	|--------------------------------------------------------------------------
	*/

wp_enqueue_script(
    'clean-dot-mobile-navigation-menu',
    clean_dot_asset_uri( '/js/components/mobile-navigation-menu.js' ),
    array(), // пустой массив = нет зависимостей
    clean_dot_asset_version( 'assets/js/components/mobile-navigation-menu.js' ),
    true
);


	/*
	|--------------------------------------------------------------------------
	| Основной JS файл темы
	|--------------------------------------------------------------------------
	*/

	wp_enqueue_script(
		'clean-dot-main',
		clean_dot_asset_uri( 'js/main.js' ),
		array( 'clean-dot-imask', 'clean-dot-gsap', 'clean-dot-scroll-trigger' ),
		clean_dot_asset_version( 'assets/js/main.js' ),
		true
	);
}


add_action( 'wp_enqueue_scripts', 'clean_dot_enqueue_assets' );



/*
|--------------------------------------------------------------------------
| Добавление <base> в <head>
|--------------------------------------------------------------------------
|
| Тег <base> задаёт базовый URL для всех относительных ссылок.
|
*/

function clean_dot_print_front_page_base_tag() {

	printf(
		"<base href=\"%s\">\n",
		esc_url( trailingslashit( clean_dot_asset_uri() ) )
	);
}

add_action( 'wp_head', 'clean_dot_print_front_page_base_tag', 1 );



/*
|--------------------------------------------------------------------------
| Предзагрузка шрифтов
|--------------------------------------------------------------------------
|
| preload заставляет браузер загрузить шрифты заранее,
| чтобы текст отображался быстрее.
|
*/

function clean_dot_preload_front_page_fonts() {

	$fonts = array(

		'fonts/Golos/GolosText-Black.woff2',
		'fonts/Golos/GolosText-Regular.woff2',
		'fonts/Golos/GolosText-Medium.woff2',
		'fonts/Golos/GolosText-DemiBold.woff2',
		'fonts/Golos/GolosText-Bold.woff2',

		'fonts/Geologica/Geologica-Light.woff2',
		'fonts/Geologica/Geologica-Regular.woff2',
		'fonts/Geologica/Geologica-Medium.woff2',
		'fonts/Geologica/Geologica-SemiBold.woff2',
		'fonts/Geologica/Geologica-Bold.woff2',
		'fonts/Geologica/Geologica-ExtraBold.woff2',
	);

	/*
	|---------------------------------------------------------
	| Перебираем массив шрифтов
	|---------------------------------------------------------
	*/

	foreach ( $fonts as $font ) {

		printf(
			"<link rel=\"preload\" href=\"%s\" as=\"font\" type=\"font/woff2\" crossorigin>\n",
			esc_url( clean_dot_asset_uri( $font ) )
		);
	}
}


add_action( 'wp_head', 'clean_dot_preload_front_page_fonts', 2 );


require_once get_template_directory() . '/inc/shortcodes/social-block.php';
require_once get_template_directory() . '/inc/shortcodes/phones-block.php';
