jQuery(function($){
	$(document).ready(function () {
		console.log('oui')
		// $('.slider-nav').slick({
		// 	slidesToShow: 3,
		// 	slidesToScroll: 1,
		// 	autoplay: true,
		// 	autoplaySpeed: 20,
		// 	arrows: true,
		// 	dots: true,
	 //  infinite: true,
	 //  speed: 500
		// });

		$("select").select2({
			theme: "classic",
			tags: true
		});
	})
})