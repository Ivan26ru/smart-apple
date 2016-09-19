<?php
/**
 * Шаблон Ремонта техники блока (service.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>

<div class="clearfix"></div>
<br>
<br>
<h1 class="text-center">Ремонт техники</h1>
<div class="container icons-service">
    <div class="row  text-center">
        <div class="block col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <a href="#">
                <div id="width-js-1" class="blockcont text-center">
                    <div class="icon-phone"></div>
                    <p>Ремонт телефонов</p>
                </div>
            </a>
<?php $args = array(
    'container'       => '',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
    'container_class' => '',              // (string) class контейнера (div тега)
    'container_id'    => '',              // (string) id контейнера (div тега)
    'menu_class'      => 'menu forplates  list-unstyled',          // (string) class самого меню (ul тега)
    'menu_id'         => 'width-js-2',              // (string) id самого меню (ul тега)
    'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
    'before'          => '',              // (string) Текст перед <a> каждой ссылки
    'after'           => '',              // (string) Текст после </a> каждой ссылки
    'link_before'     => '',              // (string) Текст перед анкором (текстом) ссылки
    'link_after'      => '',              // (string) Текст после анкора (текста) ссылки
    'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
    'walker'          => '',              // (object) Класс собирающий меню. Default: new Walker_Nav_Menu
    'theme_location'  => 'service-phone'               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
);
wp_nav_menu($args); // выводим меню ТЕЛЕФОНОВ
?>
        </div>
        <div class="block col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <a href="#">
                <div id="width-js-1" class="blockcont text-center">
                    <div class="icon-plansh"></div>
                    <p>Ремонт планшетов</p>
                </div>
            </a>
    <?php $args = array(
    'menu_class'      => 'menu forplates  list-unstyled',          // (string) class самого меню (ul тега)
    'menu_id'         => 'width-js-22',              // (string) id самого меню (ul тега)
    'theme_location'  => 'service-plansh'               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
);
wp_nav_menu($args); // выводим меню планшетов
?>
        </div>
        <div class="block col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <a href="#">
                <div id="width-js-1" class="blockcont text-center">
                    <div class="icon-notebook"></div>
                    <p>Ремонт ноутбуков</p>
                </div>
            </a>
    <?php $args = array(
    'menu_class'      => 'menu forplates  list-unstyled',          // (string) class самого меню (ul тега)
    'menu_id'         => 'width-js-23',              // (string) id самого меню (ul тега)
    'theme_location'  => 'service-notebook'               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
);
wp_nav_menu($args); // выводим меню ноутбуков
?>
        </div>
        <div class="block col-xs-12 col-sm-6 col-md-3 col-lg-3">
            <a href="#">
                <div id="width-js-1" class="blockcont text-center">
                    <div class="icon-ebook"></div>
                    <p>Ремонт электронных книг</p>
                </div>
            </a>
    <?php $args = array(
    'menu_class'      => 'menu forplates  list-unstyled',          // (string) class самого меню (ul тега)
    'menu_id'         => 'width-js-24',              // (string) id самого меню (ul тега)
    'theme_location'  => 'service-ebook'               // (string) Расположение меню в шаблоне. (указывается ключ которым было зарегистрировано меню в функции register_nav_menus)
);
wp_nav_menu($args); // выводим меню электронных книг
?>
        </div>
    </div>
</div>