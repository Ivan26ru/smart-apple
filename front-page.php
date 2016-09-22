<?php
/**
 * Шаблон НАЧАЛЬНОЙ страницы (front-page.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>

<?php get_template_part( 'carousel' );//подключаем карусель ?>

<?php get_template_part( 'service-category' );//подключаем сервис(Ремонт техники) ?>
<br>
<?php get_template_part( 'contact-form' );//подключаем форму обратной связи ?>

<?php get_template_part( 'map' );//подключаем карту ?>

<?php //dynamic_sidebar( 'sidebar' ); // сайт бар который пока что не нужен?>

<?php get_footer(); // подключаем footer.php ?>