// alert(jQuery.fn.jquery); //проверка верии и работоспособности jq

jQuery(document).ready(function() {//ждем загрузки все страницы

    var avatarElem = document.getElementById('top-navbar');

    var avatarSourceBottom = avatarElem.getBoundingClientRect().bottom + window.pageYOffset - 50;

    window.onscroll = function() {
      if (avatarElem.classList.contains('navbar-fixed-top') && window.pageYOffset < avatarSourceBottom) {
        avatarElem.classList.remove('navbar-fixed-top');
      } else if (window.pageYOffset > avatarSourceBottom) {
        avatarElem.classList.add('navbar-fixed-top');
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