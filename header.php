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
		<div class="col-md-6">
			<a href="<?php echo site_url(); ?>">
				<h1 class="site-name-header">
				<img src="<?php echo get_template_directory_uri(); ?>/img/smart-mobile-logo.png" class="logo-img" alt="">
				<?php bloginfo('name'); ?></h1>
			</a>
		</div>
		<div class="col-md-6 text-right">
		<br>
		<p class="time-work"><span class="glyphicon glyphicon-map-marker"></span>Светлоград   <span class="glyphicon glyphicon-time">
		</span>ПН-ПТ: 9:00 - 18:00 СБ: 9:00 - 15:00
		<br>ВС: выходной</p>
		<p class="telefon-number"><span class="glyphicon glyphicon-earphone"></span> 8-962-440-44-01</p>
		</div>
	</div><!-- /container -->
	<!-- /Шапка сайта -->
				<div class="navbar-margin">
					<nav class="navbar navbar-default" id="top-navbar">
					<!-- navbar-fixed-top для прижатие к потолку	 -->
					<div class="container">
						<div class="navbar-header">

						<!-- логотип и название сайта в фиксированном меню -->
							<a class="navbar-brand dn site-name-menu" href="<?php echo site_url(); ?>" id="menu-top-name-siti">
						        <!-- <span class="glyphicon glyphicon-random"></span> -->
						        <img src="<?php echo get_template_directory_uri(); ?>/img/smart-mobile-logo.png" class="logo-img-menu" alt="">
                    			<?php bloginfo('name'); ?>
                    		</a>
						<!-- /логотип и название сайта в фиксированном меню -->

							<!-- кнопка для показа меню -->
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topnav" aria-expanded="false">
								<span class="sr-only">Меню</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!-- /кнопка для показа меню -->

						</div>
						<div class="collapse navbar-collapse" id="topnav">

						<!-- Вывод меню -->
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
							<!-- /Вывод меню -->

                            <!-- кнопки справа-->
                            <form class="navbar-form navbar-right" role="search" action="<?php echo home_url( '/' ) ?>" >
                            <?php get_search_form() ?>

<!-- кнопка для вызова модального окна -->
<a class="btn btn-remont" data-toggle="modal" data-target=".bs-example-modal-sm">Статус заказа</a>

<!-- модальное окно -->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
<!-- кнопка закрыть справа -->
<p class="text-right">
<button type="button" class="btn btn-default text-right" data-dismiss="modal">Закрыть</button>
</p>
<!-- виджер статуса ремонта -->
  	<div class="container text-center" style="margin-top: 158px;">
		<div id="remonline-widget" data-key="447858abad1a687c1c3ed19a9f2ccbc3"></div>
  	</div>
</div>

                                <!-- <a href="<?php echo get_permalink(36); ?>" class="btn btn-success">Онлайн консультант</a> -->
                                <a href="<?php echo get_permalink(36); ?>" class="btn btn-remont">Отправить на ремонт</a>
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