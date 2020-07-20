( function($) {
  'use strict';
$(function(e) {

/*Intro-Slider*/
	$('#intro .owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
	dots:false,
	autoplay:true,
    autoplayTimeout:3000,
    responsive:{
        0:{items:1},
        600:{items:1},
        1000:{items:1}
    }
	});
	


/*Services*/
	$('#our-services .owl-carousel').owlCarousel({
    loop:true,
    margin:15,
    nav:true,
	dots:false,
	animateOut: 'fadeOut',
	autoplay:true,
    autoplayTimeout:3000,
    responsive:{
        0:{items:1},
        768:{items:2},
        1000:{items:4}
    }
	});
	
/*Testimonials*/
	$('#testimonials .owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:false,
	dots:true,
	center:true,
	autoplay:true,
    autoplayTimeout: 3000,
    responsive:{
        0:{items:1},
        600:{items:1},
        1000:{items:3}
    }
	});
	
/*Testimonials-2*/
	$('#testimonials2 .owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    nav:false,
	dots:true,
	autoplay:true,
    autoplayTimeout: 3000,
    responsive:{
        0:{items:1},
        900:{items:2},
        1000:{items:2}
    }
	});

/*Services-Box*/
	$('#services .owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:false,
	dots:true,
	animateOut: 'fadeOut',
	autoplay:true,
    autoplayTimeout:3000,
    responsive:{
        0:{items:1},
        600:{items:2},
        1000:{items:3}
    }
	});
});

})(jQuery);