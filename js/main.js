jQuery(document).ready(function(e) {

	jQuery('#myCarousel').carousel({
        interval: 5000
    })
	
	jQuery('#featurette .owl-carousel').owlCarousel({
		loop:true,
		autoplay: true,
        autoPlaySpeed: 5000,
        autoPlayTimeout: 5000,
        autoplayHoverPause: true,
        margin:10,
        nav:true,
        navText: [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });
	
	// jQuery("#carousel").hover(function(){
	// 	$(".carousel-control-next-icon").toggleClass("slider-nav-active");
	// 	$(".carousel-control-prev-icon").toggleClass("slider-nav-active");
	// });

});



// Toggle menu on scroll
// jQuery(window).scroll(function() {    
//     var scroll = $(window).scrollTop();

//     if (scroll >= 115) {
// 		jQuery(".navbar").addClass("main-nav-toggle");
// 		jQuery("#carousel").addClass("carousel-margin");
// 	}
// 	else {
// 		jQuery(".navbar").removeClass("main-nav-toggle");
// 		jQuery("#carousel").removeClass("carousel-margin");
// 	}
// });
// Toggle menu on scroll