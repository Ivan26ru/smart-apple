<?php
/**
 * Шаблон Ремонта техники блока данные берез и дерева категорий (service-category.php)
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
            <a href="<?php echo site_url();//адрес сайта ?>/category/telefony/">
                <div id="width-js-1" class="blockcont text-center">
                    <div class="icon-phone"></div>
                    <p>Ремонт телефонов</p>
                </div>
            </a>

<?php
$args = array(
//'child_of' => 0,// вывод всего дерева дочерних элементов
 'parent' => 19,//вывод подкатегорий, первого уровня от данной категории
 'hide_empty' => 1,//Скрывать ли термины в которых нет записей. 1(true) - скрывать пустые, 0(false) - показывать пустые.
 'exclude' => '', // ID рубрики, которую нужно исключить
 'number' => '0',//Максимальное количество элементов, которые будут получены. Лимит. По умолчанию - все.
 'orderby' => 'name',//Поле по которому сортировать результат
 'order' => 'ASC',//Направление сортировки, ASC или DESC
 'taxonomy' => 'category', // таксономия, для которой нужны изображения
 'pad_counts' => true//Если передать true, то число которое показывает количество записей в родительских категориях будет суммой своих записей и записей из дочерних категорий. По умолчанию подсчитываются только свои записи.
);

$catlist = get_categories($args); // получаем список рубрик
echo '<ul id="width-js-2" class="menu forplates list-unstyled">';
foreach($catlist as $categories_item){

 // получаем данные из плагина Taxonomy Images
 // $terms = apply_filters('taxonomy-images-get-terms', '', array(
 // 'taxonomy' => 'category' // таксономия, для которой нужны изображения
 // ));

 // выводим название рубрики
 print '<li><a href="'. get_term_link($categories_item) .'">' . $categories_item->cat_name . '</a></li>';
 }
echo '</ul>';
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
    'menu_class'      => 'menu forplates list-unstyled',          // (string) class самого меню (ul тега)
    'menu_id'         => 'width-js-2',              // (string) id самого меню (ul тега)
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