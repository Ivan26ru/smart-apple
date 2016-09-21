<?php
/**
 * Шаблон НАЧАЛЬНОЙ страницы (front-page.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>
<!-- Менюшка -->

<?php get_template_part( 'carousel' );//подключаем карусель ?>

<?php get_template_part( 'service' );//подключаем сервис(Ремонт техники) ?>

<?php get_template_part( 'map' );//подключаем карту ?>

<?php //dynamic_sidebar( 'sidebar' ); // сайт бар который пока что не нужен?>

<?php get_footer(); // подключаем footer.php ?>