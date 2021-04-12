<?php
/**
 * Yuko Academy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Yuko_Academy
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'yuko_academy_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function yuko_academy_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Yuko Academy, use a find and replace
		 * to change 'yuko-academy' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'yuko-academy', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary-Header', 'yuko-academy' ),
				'menu-2' => esc_html__( 'Primary-Footer', 'yuko-academy' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
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

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'yuko_academy_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'yuko_academy_setup' );



/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function yuko_academy_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'yuko_academy_content_width', 640 );
}
add_action( 'after_setup_theme', 'yuko_academy_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function yuko_academy_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'yuko-academy' ),
			'id'            => 'footer',
			'description'   => esc_html__( 'Add widgets here.', 'yuko-academy' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'yuko_academy_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function yuko_academy_scripts() {

	// style

	wp_enqueue_style( 'yuko-academy-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/my_style/style.css' );
	wp_enqueue_style( 'yuko-academy-googlefonts', 'https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/MDB-Free/css/bootstrap.min.css' );
	wp_enqueue_style( 'mdb', get_template_directory_uri() . '/assets/MDB-Free/css/mdb.min.css' );
	wp_enqueue_style( 'slick-slider-style', get_template_directory_uri() . '/assets/slick-slider/slick.css' );
	wp_enqueue_style( 'slick-slider-theme', get_template_directory_uri() . '/assets/slick-slider/slick-theme.css' );
	wp_style_add_data( 'yuko-academy-style', 'rtl', 'replace' );

	// scripts

	wp_enqueue_script( 'yuko-academy-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	
	wp_deregister_script( 'jquery' );
  	wp_register_script( 'jquery', get_template_directory_uri() . '/assets/MDB-Free/js/jquery.min.js', array(), _S_VERSION, true );
  	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'slick-slider', get_template_directory_uri() . '/assets/slick-slider/slick.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'popper', get_template_directory_uri() . '/assets/MDB-Free/js/popper.min.js' , array(), _S_VERSION, true);
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/MDB-Free/js/bootstrap.min.js', array(), _S_VERSION, true);
	wp_enqueue_script( 'mdb', get_template_directory_uri() . '/assets/MDB-Free/js/mdb.min.js', array(), _S_VERSION, true); 
	wp_enqueue_script( 'fontawesome-script', get_template_directory_uri() . '/assets/fontawesome-5/fontawesome.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'common-script', get_template_directory_uri() . '/js/common.js', array(), _S_VERSION, true );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'yuko_academy_scripts' );

// font-awesome  cdn

// add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
// function enqueue_load_fa() {
// wp_enqueue_style( 'load-fa', 'https://use.fontawesome.com/releases/v5.11.2/css/all.css' );
// }



// font circe

// add_action( 'wp_enqueue_scripts', 'circe_fonts' );

// function circe_fonts() {
//   wp_enqueue_style( 'circe-font', get_template_directory_uri() . '/fonts/stylesheet.css' );
// }

// Логотип сайта

add_theme_support( 'custom-logo');



// Тест

// Добавляем событие в процесс инициализации JS скриптов
add_action( 'wp_enqueue_scripts', 'wplb_ajax_enqueue' );

//Описываем событие
function wplb_ajax_enqueue() {

	// Подключаем файл js скрипта.
	wp_enqueue_script(
		'wplb-ajax', // Имя
		get_stylesheet_directory_uri() . '/js/wplb-ajax.js', // Путь до JS файла.
		array( 'jquery' ), // В массив jquery.
		'',
		true
	);

	// Используем функцию wp_localize_script для передачи переменных в JS скрипт.
	wp_localize_script(
		'wplb-ajax', // Куда будем передавать
		'wplb_ajax_obj', // Название массива, который будет содержать передаваемые данные
		array(
			'ajaxurl' => admin_url( 'admin-ajax.php' ), // Элемент массива, содержащий путь к admin-ajax.php
			'nonce' => wp_create_nonce( 'wplb-nonce' ) // Создаем nonce
		)
	);

}

// Создаём событие обработки Ajax запроса.
add_action( 'wp_ajax_nopriv_wplb_ajax_request', 'wplb_ajax_request' );
add_action( 'wp_ajax_wplb_ajax_request', 'wplb_ajax_request' );

// Описываем саму функцию.
function wplb_ajax_request() {

	// Перемененная $_REQUEST содержит все данные заполненных форм.

	if ( isset( $_REQUEST ) ) {

		// Проверяем nonce, а в случае если что-то пошло не так, то прерываем выполнение функции.
		if ( !wp_verify_nonce( $_REQUEST[ 'security' ], 'wplb-nonce' ) ) {
			wp_die( 'Базовая защита не пройдена' );
		}

		// Введём переменную, которая будет содержать массив с результатом отработки события.
		$result = array( 'status' => false, 'content' => false );

		// Создаём массив который содержит значения полей заполненной формы.
		parse_str( $_REQUEST[ 'content' ], $creds );

		switch ( $_REQUEST[ 'type' ] ) {
			case 'registration':
				/**
				 * Заполнена форма регистрации.
				 */

				// Пробуем создать объект с пользователем.
				$user = username_exists( $creds[ 'wplb_login' ] );


				// Проверяем, а может быть уже есть такой пользователь
				if ( !$user && false == email_exists( $creds[ 'wplb_email' ] ) ) {
					// Пользователя не существует.

					// Создаём массив с данными для регистрации нового пользователя.
					$user_data = array(
						'user_login' => $creds[ 'wplb_login' ], // Логин.
						'user_email' => $creds[ 'wplb_email' ], // Email.
						'user_pass' => $creds[ 'wplb_password' ], // Пароль.
						'display_name' => $creds[ 'wplb_login' ], // Отображаемое имя.
						'role' => 'subscriber' // Роль.
					);

					// Добавляем пользователя в базу данных.
					$user = wp_insert_user( $user_data );

					// Проверка на ошибки.
					if ( is_wp_error( $user ) ) {

						// Невозможно создать пользователя, записываем результат в массив.
						$result[ 'status' ] = false;
						$result[ 'content' ] = $user->get_error_message();

					} else {

						// Создаём массив для авторизации.
						$creds = array(
							'user_login' => $creds[ 'wplb_login' ], // Логин пользователя.
							'user_password' => $creds[ 'wplb_password' ], // Пароль пользователя.
							'remember' => true // Запоминаем.
						);

						// Пробуем авторизовать пользователя.
						$signon = wp_signon( $creds, false );

						if ( is_wp_error( $signon ) ) {

							// Авторизовать не получилось.
							$result[ 'status' ] = false;
							$result[ 'content' ] = $signon->get_error_message();

						} else {

							// Авторизация успешна, устанавливаем необходимые куки.
							wp_clear_auth_cookie();
							clean_user_cache( $signon->ID );
							wp_set_current_user( $signon->ID );
							wp_set_auth_cookie( $signon->ID );
							update_user_caches( $signon );

							// Записываем результаты в массив.
							$result[ 'status' ] = true;
						}

					}
				} else {
					
					// Такой пользователь уже существует, регистрация не возможна, записываем данные в массив.
					$result[ 'status' ] = false;
					$result[ 'content' ] = esc_html__( 'Пользователь уже существует', 'wplb_ajax_lesson' );
				}
				break;

				case 'authorization':
				/**
				 * Заполнена форма авторизации.
				 */

				// Создаём массив для авторизации
				$creds = array(
					'user_login' => $creds[ 'wplb_login' ], // Логин пользователя
					'user_password' => $creds[ 'wplb_password' ], // Пароль пользователя
					'remember' => true // Запомнинаем
				);

				// Пробуем авторизовать пользователя.
				$signon = wp_signon( $creds, false );

				if ( is_wp_error( $signon ) ) {

					// Авторизовать не получилось
					$result[ 'status' ] = false;
					$result[ 'content' ] = $signon->get_error_message();

				} else {

					// Авторизация успешна, устанавливаем необходимые куки.
					wp_clear_auth_cookie();
					clean_user_cache( $signon->ID );
					wp_set_current_user( $signon->ID );
					wp_set_auth_cookie( $signon->ID );
					update_user_caches( $signon );

					// Записываем результаты в массив.
					$result[ 'status' ] = true;
				}


				break;
		}

		// Конвертируем массив с результатами обработки и передаем его обратно как строку в JSON формате.
		echo json_encode( $result );

	}

	// Заканчиваем работу Ajax.
	wp_die();
}

// Тест


// Получение данных пользователей из базы 



// Получение данных пользователей из базы 



/**
 * Регистрация нового пользователя
 */




/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// Шаблоны слайдеров шорткод

require_once( dirname(__FILE__) . '/template-chortcode/about-company-sliders.php');
require_once( dirname(__FILE__) . '/template-chortcode/home-page-slider.php');

// Активный класс меню

// Хидер

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}

// Футер

add_filter('nav_menu_css_class' , 'special_nav_class_two' , 10 , 2);

function special_nav_class_two ($classes, $item) {
  if (in_array('current-menu-item', $classes) ){
    $classes[] = 'active ';
  }
  return $classes;
}





