<?php
/**
 * Шаблон Ремонта техники блока данные берез и дерева категорий (service-category.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<?php
// ID категорий, которые используем в меню
$s_telefony=19;
$s_planshety=25;
$s_notebooks=26;
$s_elbooks=27;
 ?>
<div class="clearfix"></div>
<br>
<br>
<h1 class="text-center">Ремонт техники</h1>
<div class="container icons-service">
    <div class="row  text-center">

    <!-- Ремонт телефонов -->
        <div class="block col-xs-12 col-sm-6 col-md-3 col-lg-3">

<?php echo '<a href="' . get_category_link($s_telefony) . '">
                <div id="width-js-1" class="blockcont text-center">
                    <div class="icon-phone"></div>
                    <p>'. get_cat_name($s_telefony) .'</p>
                </div>
            </a>';
?>

<?php
$args = array(
//'child_of' => 0,// вывод всего дерева дочерних элементов
 'parent' => $s_telefony,//вывод подкатегорий, первого уровня от данной категории
 'hide_empty' => 1,//Скрывать ли термины в которых нет записей. 1(true) - скрывать пустые, 0(false) - показывать пустые.
 'exclude' => '', // ID рубрики, которую нужно исключить
 'number' => '0',//Максимальное количество элементов, которые будут получены. Лимит. По умолчанию - все.
 'orderby' => 'name',//Поле по которому сортировать результат
 'order' => 'ASC',//Направление сортировки, ASC или DESC
 'taxonomy' => 'category', // таксономия, для которой нужны изображения
 'pad_counts' => true//Если передать true, то число которое показывает количество записей в родительских категориях будет суммой своих записей и записей из дочерних категорий. По умолчанию подсчитываются только свои записи.
);

$catlist = get_categories($args); // получаем список рубрик
echo '<ul class="menu forplates list-unstyled width-js-2">';
foreach($catlist as $categories_item){//перебор рубрик



 // выводим название рубрики
 print '<li><a href="'. get_term_link($categories_item) .'">' . $categories_item->cat_name . '</a></li>';
 }
echo '</ul>';
 ?>
<!-- 2 планшетов-->
       </div>
        <div class="block col-xs-12 col-sm-6 col-md-3 col-lg-3">
<?php echo '<a href="' . get_category_link($s_planshety) . '">
                <div id="width-js-1" class="blockcont text-center">
                    <div class="icon-plansh"></div>
                    <p>'. get_cat_name($s_planshety) .'</p>
                </div>
            </a>';
?>

<?php
$args = array(
//'child_of' => 0,// вывод всего дерева дочерних элементов
 'parent' => $s_planshety,//вывод подкатегорий, первого уровня от данной категории
 'hide_empty' => 1,//Скрывать ли термины в которых нет записей. 1(true) - скрывать пустые, 0(false) - показывать пустые.
 'exclude' => '', // ID рубрики, которую нужно исключить
 'number' => '0',//Максимальное количество элементов, которые будут получены. Лимит. По умолчанию - все.
 'orderby' => 'name',//Поле по которому сортировать результат
 'order' => 'ASC',//Направление сортировки, ASC или DESC
 'taxonomy' => 'category', // таксономия, для которой нужны изображения
 'pad_counts' => true//Если передать true, то число которое показывает количество записей в родительских категориях будет суммой своих записей и записей из дочерних категорий. По умолчанию подсчитываются только свои записи.
);

$catlist = get_categories($args); // получаем список рубрик
echo '<ul class="menu forplates list-unstyled width-js-2">';
foreach($catlist as $categories_item){//перебор рубрик

 // выводим название рубрики
 print '<li><a href="'. get_term_link($categories_item) .'">' . $categories_item->cat_name . '</a></li>';
 }
echo '</ul>';
 ?>
<!-- 3 ноутбуков-->
        </div>
        <div class="block col-xs-12 col-sm-6 col-md-3 col-lg-3">
<?php echo '<a href="' . get_category_link($s_notebooks) . '">
                <div id="width-js-1" class="blockcont text-center">
                    <div class="icon-notebook"></div>
                    <p>'. get_cat_name($s_notebooks) .'</p>
                </div>
            </a>';
?>
<?php
$args = array(
//'child_of' => 0,// вывод всего дерева дочерних элементов
 'parent' => $s_notebooks,//вывод подкатегорий, первого уровня от данной категории
 'hide_empty' => 1,//Скрывать ли термины в которых нет записей. 1(true) - скрывать пустые, 0(false) - показывать пустые.
 'exclude' => '', // ID рубрики, которую нужно исключить
 'number' => '0',//Максимальное количество элементов, которые будут получены. Лимит. По умолчанию - все.
 'orderby' => 'name',//Поле по которому сортировать результат
 'order' => 'ASC',//Направление сортировки, ASC или DESC
 'taxonomy' => 'category', // таксономия, для которой нужны изображения
 'pad_counts' => true//Если передать true, то число которое показывает количество записей в родительских категориях будет суммой своих записей и записей из дочерних категорий. По умолчанию подсчитываются только свои записи.
);

$catlist = get_categories($args); // получаем список рубрик
echo '<ul class="menu forplates list-unstyled width-js-2">';
foreach($catlist as $categories_item){//перебор рубрик

 // выводим название рубрики
 print '<li><a href="'. get_term_link($categories_item) .'">' . $categories_item->cat_name . '</a></li>';
 }
echo '</ul>';
 ?>
 <!-- 4 электронных книг-->
        </div>
        <div class="block col-xs-12 col-sm-6 col-md-3 col-lg-3">
<?php echo '<a href="' . get_category_link($s_elbooks) . '">
                <div id="width-js-1" class="blockcont text-center">
                    <div class="icon-ebook"></div>
                    <p>'. get_cat_name($s_elbooks) .'</p>
                </div>
            </a>';
?>
<?php
$args = array(
//'child_of' => 0,// вывод всего дерева дочерних элементов
 'parent' => $s_elbooks,//вывод подкатегорий, первого уровня от данной категории
 'hide_empty' => 1,//Скрывать ли термины в которых нет записей. 1(true) - скрывать пустые, 0(false) - показывать пустые.
 'exclude' => '', // ID рубрики, которую нужно исключить
 'number' => '0',//Максимальное количество элементов, которые будут получены. Лимит. По умолчанию - все.
 'orderby' => 'name',//Поле по которому сортировать результат
 'order' => 'ASC',//Направление сортировки, ASC или DESC
 'taxonomy' => 'category', // таксономия, для которой нужны изображения
 'pad_counts' => true//Если передать true, то число которое показывает количество записей в родительских категориях будет суммой своих записей и записей из дочерних категорий. По умолчанию подсчитываются только свои записи.
);

$catlist = get_categories($args); // получаем список рубрик
echo '<ul class="menu forplates list-unstyled width-js-2">';
foreach($catlist as $categories_item){//перебор рубрик

 // выводим название рубрики
 print '<li><a href="'. get_term_link($categories_item) .'">' . $categories_item->cat_name . '</a></li>';
 }
echo '</ul>';
 ?>
        </div>
    </div>
</div>