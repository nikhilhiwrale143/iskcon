!(function($) {
  "use strict";



	$(document).ready(function() {
	 	// console.log("hello");
	});
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})
 	
  var swiper = new Swiper('.swiper_testimonial', {
      // spaceBetween: 30,
      slidesPerView: 1,
      spaceBetween: 60,
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

 	var swiper = new Swiper('.swiper_home_banner_notused', {
      // spaceBetween: 30,
      slidesPerView: 1,
      spaceBetween: 60,
      loop: false,
      observer: true,
      observeParents: true,
      // autoplay: {
      //     delay: 2500,
      //     disableOnInteraction: false,
      //   },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

    });

  //TOGGLING NESTED ul
$(".drop-down .selected a").click(function() {
    $(".drop-down .options ul").toggle();
});

//SELECT OPTIONS AND HIDE OPTION AFTER SELECTION
$(".drop-down .options ul li a").click(function() {
    var text = $(this).html();
    $(".drop-down .selected a span").html(text);
    $(".drop-down .options ul").hide();
}); 


//HIDE OPTIONS IF CLICKED ANYWHERE ELSE ON PAGE
$(document).bind('click', function(e) {
    var $clicked = $(e.target);
    if (! $clicked.parents().hasClass("drop-down"))
        $(".drop-down .options ul").hide();
});



})(jQuery);