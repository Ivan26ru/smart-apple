<?php
/**
 * Шаблон НАЧАЛЬНОЙ страницы (front-page.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?>
<!-- Менюшка -->
<div class="clearfix"></div>
<br>
<br>
<h1 class="text-center">Ремонт техники</h1>
<div class="container">
<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
		<div class="text-center">
        	<img src="http://placehold.it/220x240" alt="..." class="">
        	<h4>Ремонт телефонов</h4>
        	<ul class="dn">
        		<li>lonem01</li>
        		<li>lonem02</li>
        		<li>lonem03</li>
        		<li>lonem04</li>
        		<li>lonem05</li>
        		<li>lonem06</li>
        		<li>lonem07</li>
        		<li>lonem08</li>
        		<li>lonem09</li>
        		<li>lonem10</li>
        	</ul>
        </div>
	</div>

	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
		<div class="text-center">
        	<img src="http://placehold.it/220x240" alt="..." class="">
        	<h4>Ремонт планшетов</h4>
        </div>
	</div>

	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
		<div class="text-center">
        	<img src="http://placehold.it/220x240" alt="..." class="">
        	<h4>Ремонт ноутбука</h4>
        </div>
	</div>

	<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
		<div class="text-center">
        	<img src="http://placehold.it/220x240" alt="..." class="">
        	<h4>Ремонт электронных книг</h4>
        </div>
	</div>

</div>
</div>
<?php get_footer(); // подключаем footer.php ?>