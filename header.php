<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Yuko_Academy
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<header>
		<div class="container">

		<!-- basicExampleNav -->


	<!--Navbar-->

		<nav class="navbar navbar-expand-lg navbar-dark my-primary-color">
		  <div class="header-logo">
		  		<?php the_custom_logo(); ?>
		  </div>
		<!-- Collapse button -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#YukoNavigation"
		  aria-controls="YukoNavigation" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icons"><i class="fas fa-align-justify"></i></span>
		</button>
	  
		<!-- Collapsible content -->
		<div class="collapse navbar-collapse" id="YukoNavigation">

		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'menu_class' => 'navbar-nav mr-auto nav-item link-custom',
				)
			);
		?>

	  
		  <!-- Links -->
			<ul class="navbar-nav mr-auto">
				
			<!-- <li class="nav-item active">
			  <a class="nav-link link-custom" href="#">Главная
				<span class="sr-only">(current)</span>
			  </a>
			</li>
			<li class="nav-item">
			  <a class="nav-link link-custom" href="#">Обучение</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link link-custom" href="#">Тестирование</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link link-custom" href="#">О компании</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link link-custom link-margin" href="#">Контакты</a>
			</li> -->

			<!-- Меню языков -->

			<!-- <li class="nav-item">
				<a class="nav-link link-custom link-active" href="#">Укр</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link link-custom link-no-active" href="#">Рус</a>
			</li> -->

			<!-- Меню языков -->

			</ul>
		
			<button type="button" class="btn btn-light" onclick="window.location.href = 'http://academy.testing.in.net/%d1%81%d1%82%d1%80%d0%b0%d0%bd%d0%b8%d1%86%d0%b0-%d1%80%d0%b5%d0%b3%d0%b8%d1%81%d1%82%d1%80%d0%b0%d1%86%d0%b8%d0%b8/';">Регистрация</button>
			<button type="button" class="btn btn-indigo" data-toggle="modal" data-target="#exampleModalCenter">Войти</button>
			</nav>

			<div class="block-info">

			</div>

	  <!--/.Navbar-->
	
		</div>
	</header>


