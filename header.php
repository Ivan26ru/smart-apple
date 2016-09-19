<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_head(); // необходимо для работы плагинов и функционала ?>
</head>
<body <?php body_class(); // все классы для body ?>>
	<header>
	<!-- Шапка сайта -->
	<div class="container">
		<div class="col-md-4">
			<a href="<?php echo site_url(); ?>">
				<h1>
				<img src="<?php echo get_template_directory_uri(); ?>/img/smart-mobile-logo.png" class="logo-img" alt="">
				<?php bloginfo('name'); ?></h1>
			</a>
		</div>
	</div>
	<!-- /Шапка сайта -->
				<div class="col-md-12 navbar-margin">
					<nav class="navbar navbar-default" id="top-navbar">
					<!-- navbar-fixed-top для прижатие к потолку	 -->
					<div class="container">
						<div class="navbar-header">
						                    <a class="navbar-brand dn" href="<?php echo site_url(); ?>" id="menu-top-name-siti">
						                    	<!-- <span class="glyphicon glyphicon-random"></span> -->
						                    	<img src="<?php echo get_template_directory_uri(); ?>/img/smart-mobile-logo.png" class="logo-img-menu" alt="">
                    							<?php bloginfo('name'); ?>
                    						</a>
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topnav" aria-expanded="false">
								<span class="sr-only">Меню</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse" id="topnav">
							<?php $args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
								'theme_location' => 'top', // идентификатор меню, определен в register_nav_menus() в functions.php
								'container'=> false, // обертка списка, тут не нужна
						  		'menu_id' => 'top-nav-ul', // id для ul
						  		'items_wrap' => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
								'menu_class' => 'top-menu', // класс для ul, первые 2 обязательны
						  		'walker' => new bootstrap_menu(true) // верхнее меню выводится по разметке бутсрапа, см класс в functions.php, если по наведению субменю не раскрывать то передайте false
					  			);
								wp_nav_menu($args); // выводим верхнее меню
							?>
                            <!-- Отправить на ремонт -->
                            <form class="navbar-form navbar-right" role="search">
                                <a href="<?php echo get_permalink(36); ?>" class="btn btn-success">Онлайн консультант</a>
                                <a href="<?php echo get_permalink(36); ?>" class="btn btn-success">Отправить на ремонт</a>
                            </form>
						</div>
						</div><!-- container -->
					</nav>
				</div><!-- col-md-12 -->
	</header>
	<div class="clearfix"></div>


<?php //if( is_front_page() ) { //Если главная страница, отобразить карусель
	//get_template_part( 'carousel' );}
?>