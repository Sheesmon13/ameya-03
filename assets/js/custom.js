$(document).ready(function () {

    $('.product-active').owlCarousel({
        loop: true,
        margin: 15,
        nav: false,
        dots: false,
       
        smartSpeed: 1000, 

      /* navText: [
        "<button class='discount-slider-button-prev'>Prev</button>",
        "<button class='discount-slider-button-next'>Next</button>"
    ],*/
        responsive: {
            0: { items: 1 },  
            576: { items: 2 }, 
            768: { items: 2 }, 
            992: { items: 3 }, 
            1200: { items: 4 } 
        }
    });


    $('.collection').owlCarousel({
        loop: true,
        margin: 50,
        nav: false,
        dots: true,
        autoplay:true,
     autoplayTimeout:3000,
        responsive: {
            0: { items: 2 },  
            576: { items: 3 }, 
            768: { items: 4 }, 
            992: { items: 5}, 
            1200: { items: 6 } 
        }
    });



    $(".testimonial").owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      dots: true,
      autoplay: true,
      autoplayTimeout: 5000,
      smartSpeed: 800,
      responsive:{
        0:{ items:1 },
        768:{ items:1 },
        992:{ items:1 }
      }
    });


     /*---------------------------
      Nice Select 
   ------------------------------ */

    $('select.shop-sort').niceSelect();


    /*---------------------------
        Product Details Slider 
    ------------------------------ */
    var zoomThumb = new Swiper('.zoom-thumbs', {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
    });
    var zoomTop = new Swiper('.zoom-top', {
        spaceBetween: 0,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: zoomThumb
        }
    });


    /*-------------------------------
      Product Gallery - Image Zoom
     --------------------------------*/

    $('.zoom-image-hover').zoom();




     /*----------------------------
        Cart Plus Minus Button
    ------------------------------ */
    var CartPlusMinus = $(".cart-plus-minus");
    CartPlusMinus.prepend('<div class="dec qtybutton">-</div>');
    CartPlusMinus.append('<div class="inc qtybutton">+</div>');
    $(".qtybutton").on("click", function() {
        var $button = $(this);
        var oldValue = $button.parent().find("input").val();
        if ($button.text() === "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 1) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 1;
            }
        }
        $button.parent().find("input").val(newVal);
    });


    /*----- 
        Shipping Form Toggle
    --------------------------------*/ 
    $('[data-shipping]').on('click', function(){
        if( $('[data-shipping]:checked').length > 0 ) {
            $('#shipping-form').slideDown();
        } 
        else {
            $('#shipping-form').slideUp();
        }
    });




     /*** Swiper Slider ***/
    var swiper = new Swiper('.home-swiper', {
        loop: true,
        // autoplay:true,
        // autoplayTimeout:3000,
     
        
      navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
    });
    

    $("#mobile-menu").meanmenu({
		meanMenuContainer: ".mobile-menu",
		meanScreenWidth: "991",
		meanExpand: ['<i class="fal fa-plus"></i>'],
	});

	$("#mobile-menu-2").meanmenu({
		meanMenuContainer: ".mobile-menu-2",
		meanScreenWidth: "4000",
		meanExpand: ['<i class="fal fa-plus"></i>'],
	});

	/*======================================
	Sidebar Toggle
	========================================*/
	$(".offcanvas__close,.offcanvas__overlay").on("click", function () {
		$(".offcanvas__info").removeClass("info-open");
		$(".offcanvas__overlay").removeClass("overlay-open");
	});
	$(".sidebar__toggle").on("click", function () {
		$(".offcanvas__info").addClass("info-open");
		$(".offcanvas__overlay").addClass("overlay-open");
	});

	/*======================================
	Body overlay Js
	========================================*/
	$(".body-overlay").on("click", function () {
		$(".offcanvas__area").removeClass("offcanvas-opened");
		$(".df-search-area").removeClass("opened");
		$(".body-overlay").removeClass("opened");
	});

    
/* Sticky */

$(document).ready(function () {
    $(window).on("scroll", function () {
        var scrollTop = $(window).scrollTop(); // Get current scroll position

        if (scrollTop > 100) {
            $(".sticky-nav").addClass("sticky").removeClass("fadeOutUp").addClass("fadeInDown");
        } else {
            $(".sticky-nav").removeClass("sticky fadeInDown").addClass("fadeOutUp");
        }
    });
});


});

