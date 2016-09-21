// alert(jQuery.fn.jquery); //проверка верии и работоспособности jq

jQuery(document).ready(function() {//ждем загрузки все страницы

// Одинаковая ширина Ремонт техники иконки и выпадающего меню, через id не получилось, поэтому использовал классы

width_js=jQuery('#width-js-1').outerWidth();//достаем ширину первого блока При смене разрешения экрана косяки
jQuery('.width-js-2').width(width_js);//присваиваем ширину всем выпадающим меню



// прилипающее меню
    var avatarElem = document.getElementById('top-navbar');//id элемента, который будем прилеплять к шапке
    var nameSitiElem = document.getElementById('menu-top-name-siti');//id названия сайта в верхнем меню

    var avatarSourceBottom = avatarElem.getBoundingClientRect().bottom + window.pageYOffset;//определения нижнего пикселя элемента

    window.onscroll = function() {//функция скроллинга
      if (avatarElem.classList.contains('navbar-fixed-top') && window.pageYOffset < avatarSourceBottom) {//при прокрутке вниз
        avatarElem.classList.remove('navbar-fixed-top');//убрать класс
        nameSitiElem.classList.add('dn');//убрать класс ни прокрутке вниз
      } else if (window.pageYOffset > avatarSourceBottom) {//при обратной прокрутке
        nameSitiElem.classList.remove('dn');//убрать класс ни прокрутке вниз
        avatarElem.classList.add('navbar-fixed-top');//добавить класс
      }
    };

   // if (jQuery(window).scrollTop() < 333) {
   //    jQuery('#top-navbar').addClass('navbar-fixed-top');
   // }
   // else
   // {
   //    jQuery('#top-navbar').removeClass('navbar-fixed-top');
   // }


// jQuery("#top-navbar").slideUp(3000);//скрываем вверх блок

// 		var wrap = jQuery("#top-navbar");

// wrap.on("scroll", function(e) {

//   if (window.scrollTop > 147) {//Если страница опустится вниз  на 147 пикселей
//     wrap.addClass('navbar-fixed-top');
//   } else {
//     wrap.removeClass('navbar-fixed-top');
//   }

// });

});