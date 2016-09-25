<?php
/**
 * Шаблон рубрики (category.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>
<br>
<div class="container">
	        <div class="row m-top img110 h170">
            <!-- колонка -->
            <div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                <a class="thumbnail apple-all" href="<?php echo get_category_link('5'); ?>">

                    <div class="text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="..." class="">
                        <h4>Ремонт Apple iPhone</h4>
                    </div>
                </a>
            </div>
            <!-- КОНЕЦ колонки -->
            <!-- колонка -->
            <div class="col-xs-6 col-sm-6 col-lg-3 col-md-3">
                <a class="thumbnail apple-all" href="<?php echo get_category_link('10'); ?>">
                    <div class="text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/2.jpg" alt="..." class="">
                        <h4>Ремонт Apple iPad</h4>
                    </div>
                </a>
            </div>
            <!-- КОНЕЦ колонки -->
            <!-- колонка -->
            <div class="col-xs-6 col-sm-6 col-lg-3 col-md-3">
                <a class="thumbnail apple-all" href="<?php echo get_category_link('11'); ?>">
                    <div class="text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/3.jpg" alt="..." class="">
                        <h4>Ремонт Apple Macbook</h4>
                    </div>
                </a>
            </div>
            <!-- КОНЕЦ колонки -->
            <!-- колонка -->
            <div class="col-xs-6 col-sm-6 col-lg-3 col-md-3  ">
                <a class="thumbnail apple-all" href="<?php echo get_category_link('12'); ?>">
                    <div class="text-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/4.jpg" alt="..." class="">
                        <h4>Ремонт Apple iMac</h4>
                    </div>
                </a>
            </div>
            <!-- КОНЕЦ колонки -->
        </div>
        <!-- row -->
        </div>
        <!-- container -->
<section>
	<div class="container">
		<div class="row">
			<div class="<?php content_class_by_sidebar(); // функция подставит класс в зависимости от того есть ли сайдбар, лежит в functions.php ?>">
				<h1 class="text-center"><?php single_cat_title(); // название категории ?></h1>
				<?php if ( $cat_desc = category_description() )
	echo '<div class="row">'. $cat_desc .'</div>';
else
	echo '<div class="no__cat__desc">Описание отсутствует!</div>'; ?>
  <div class="clearfix"></div>
				<?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
					<?php get_template_part('loop'); // для отображения каждой записи берем шаблон loop.php ?>
				<?php endwhile; // конец цикла
				else: echo '<p>Нет записей.</p>'; endif; // если записей нет, напишим "простите" ?>
			</div>
				<hr>
<div class="container text-center">
					<?php pagination(); // пагинация, функция нах-ся в function.php ?>
</div>
			<?php get_sidebar(); // подключаем sidebar.php ?>
		</div>
	</div>
</section>

<?php get_footer(); // подключаем footer.php ?>