<?php
/**
 * Изображений категорий (img-category)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<!-- Изображение категорий -->

<div class="container">
    <div class="row">
        <h1 class="text-center">
            <?php single_cat_title() //название текущей категории?>
        </h1>
            <?php //echo get_query_var('cat'); //ID  текущей категории(в loop походу ни работает) ?>


            
<?php /* вывод списка рубрик */
// ЧТОБ ВЫВЕЛОСЬ ИЗОБРАЖЕНИЕ ОБЯЗАТОЛЬКО ДОЛЖНА БЫТЬ ХОТЬ ОДНА ЗАПИСЬ
$this_id_cat = get_query_var('cat');//присваиваем переменной ID текущей категории

$args = array(
// 'child_of' => 0,// вывод всего дерева дочерних элементов
 'parent' => $this_id_cat,//вывод подкатегорий, первого уровня от данной категории
 'hide_empty' => 0,
 'exclude' => '', // ID рубрики, которую нужно исключить
 'number' => '0',
 'orderby' => 'count',
 'order' => 'DESC',
 'taxonomy' => 'category', // таксономия, для которой нужны изображения
 'pad_counts' => true
);
$catlist = get_categories($args); // получаем список рубрик
echo '<ul class="category-img">'; 
foreach($catlist as $categories_item){
 
 // получаем данные из плагина Taxonomy Images
 $terms = apply_filters('taxonomy-images-get-terms', '', array(
 'taxonomy' => 'category' // таксономия, для которой нужны изображения
 ));
 
 if (!empty($terms)){
 foreach((array)$terms as $term){
 if ($term->term_id == $categories_item->term_id){
 // выводим изображение рубрики
 print '<li>
 <a href="' . esc_url(get_term_link($term, $term->taxonomy)) . '" title="Нажмите, чтобы перейти в рубрику">' . wp_get_attachment_image($term->image_id, 'medium');//определяем размер изображение(слово в кавычках) в данный момент medium
                               echo '</a>';
        }
    }
 }
 
 // выводим название рубрики
 //echo '<p>' . $categories_item->cat_name . '</p></li>';
 }
echo '</ul>';
 ?>

    </div>
</div>

<!-- \Изображение категорий -->