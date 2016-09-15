// alert(jQuery.fn.jquery); //проверка верии и работоспособности jq

jQuery(document).ready(function() {//ждем загрузки все страницы

// прилипающее меню
    var avatarElem = document.getElementById('top-navbar');//id элемента, который будем прилеплять к шапке

    var avatarSourceBottom = avatarElem.getBoundingClientRect().bottom + window.pageYOffset;//определения нижнего пикселя элемента

    window.onscroll = function() {//функция скроллинга
      if (avatarElem.classList.contains('navbar-fixed-top') && window.pageYOffset < avatarSourceBottom) {
        avatarElem.classList.remove('navbar-fixed-top');//добавить класс ни прокрутке вниз
      } else if (window.pageYOffset > avatarSourceBottom) {
        avatarElem.classList.add('navbar-fixed-top');//убрать класс при обратной прокрутке
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