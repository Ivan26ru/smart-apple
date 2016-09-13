<?php
/**
 * Запись в цикле (loop.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<div class="col-sm-6 col-md-4 col-ls-3 col-lg-4 img150">
<a href="<?php the_permalink(); ?>" class="thumbnail text-center td-n h-loop-post">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
	<h2 class="text-center">
	<!-- <a href="<?php the_permalink(); ?>"> -->
	<?php the_title(); ?>
	<!-- </a> -->
	</h2> <?php // заголовок поста и ссылка на его полное отображение (single.php) ?>
	<!-- <div class="meta">
		<p>Опубликовано: <?php the_time(get_option('date_format')." в ".get_option('time_format')); ?></p> <?php // дата и время создания ?>
		<p>Автор:  <?php the_author_posts_link(); ?></p>
		<p>Категории: <?php the_category(',') ?></p> <?php // ссылки на категории в которых опубликован пост, через зпт ?>
		<?php the_tags('<p>Тэги: ', ',', '</p>'); // ссылки на тэги поста ?>
	</div> -->
	<div class="row">
		<?php if ( has_post_thumbnail() ) { ?>
			<div class="col-sm-12">
				<!-- <a href="<?php the_permalink(); ?>" class="thumbnail"> -->
					<?php the_post_thumbnail(); ?>
				<!-- </a> -->
			</div>
		<?php } ?>
	</div>
</article>
	</a>
</div>
<!-- col-md-6 -->