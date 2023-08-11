jQuery(document).ready(function($){
	$(document).ready(function(){
		$('.home-gallery').slick({
			dots: false,
            infinite: true,
            speed: 300,
            slidesToScroll: 1,
            slidesToShow: 3,
            autoplay: true,
            autoplaySpeed: 3000,
            prevArrow: '<i class="btn-prev"></i>',
            nextArrow: '<i class="btn-next"></i>',
			swipeToSlide: true,
			allowTouchMove: false,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 3,
						slidesToScroll: 1,
						infinite: true,
						}
				},
				{
					breakpoint: 600,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1
					}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
			]
		});
		$('.home-myteam').slick({
			dots: false,
            infinite: true,
            speed: 300,
            slidesToScroll: 1,
            slidesToShow: 2,
            autoplay: true,
            autoplaySpeed: 3000,
            prevArrow: '<i class="btn-prev"></i>',
            nextArrow: '<i class="btn-next"></i>',
			swipeToSlide: true,
			allowTouchMove: false,
			responsive: [
				{
					breakpoint: 1024,
					settings: {
						slidesToShow: 2,
						slidesToScroll: 1,
						infinite: true,
						}
				},
				{
					breakpoint: 480,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			// You can unslick at a given breakpoint now by adding:
			// settings: "unslick"
			// instead of a settings object
			]
		});
		// $('.form-ks .block-inner-form').slick({
		// 	dots: true,
        //     infinite: false,
        //     speed: 100,
        //     slidesToScroll: 1,
        //     slidesToShow: 1,
        //     autoplay: false,
        //     autoplaySpeed: false,
        //     prevArrow: false,
        //     nextArrow: false,
		// 	fade: true,
  		// 	cssEase: 'linear'
		// });
	});
});