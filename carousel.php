<?php
/**
 * Карусель (carousel.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<!-- карусель -->
 <!-- carusel -->
 <div class="hidden-sm hidden-xs">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/slider-karusel/1.jpg" width="100%">
                    <div class="carousel-caption">
                        <h3>БЕСПЛАТНАЯ ДИАГНОСТИКА</h3>
                        <p>Быстро и качественно проведем диагностику Вашего устройства, и абсолютно бесплатно, даже если вы откажитесь от предложенного ремонта. Вы оплачиваете только те работы, которые привели к положительному результату.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/slider-karusel/2.jpg" width="100%">
                    <div class="carousel-caption">
                        <h3>СЕРВИСНЫЙ ЦЕНТР</h3>
                        <p>Вам требуется ремонт цифровой техники? Тогда вы зашли по адресу. Наш сервисный центр в Светлограде предлагает вам быстрый и качественный ремонт мобильных телефонов, ноутбуков, планшетов или иной мобильной техники.</p>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/slider-karusel/3.jpg" width="100%">
                    <div class="carousel-caption">
                        <h3>ГАРАНТИЯ КАЧЕСТВА РАБОТ</h3>
                        <p>Мы имеем новейшее специализированное оборудование, оригинальные запчасти и квалифицированных специалистов, поэтому вы можете без опасений доверить ремонт мобильных устройств сервисному центру "<?php bloginfo('name'); ?>".</p>
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
</div>