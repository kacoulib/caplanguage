jQuery(function($){
	$(document).ready(function () {

		$('#myCarousel').carousel({
	interval: 10000
	})

		function init_svg_anim(scroll){
			let i = 0,
				el;

			// if the scroll postion is superior than the last position
			// or the svg_position length is less than 0
			if (scroll > svg_position[svg_position.length - 1] || svg_position.length - 1 <0 ) return;

			for (; i < svg_position.length; i++) {
				anim_elem = $('.remake_to_path').eq(i);
				// if (scroll > (svg_position[0] - win_height/2) && 
				// 	scroll < (svg_position[i - 1] - win_height/2)
				// ) {
				(function(i){
					if (scroll > (svg_position[i] - win_height/2))
					{
						$(anim_elem).animate({
							'stroke-dashoffset' : 0
						},{
							duration: 2000,
							queue: false, 
							complete:function(now, fn){
								svg_position.splice(i, 1);
								$()(i)
							}
						});
					}
				})(i)
			}
		}
		var top = $(window).scrollTop(),
			svg_position = [],
			anim_lines = $('.picto_anim'),
			win_height = parseInt($(window).height());
			i = 0;

		for (; i < anim_lines.length; i++)
			svg_position.push(Math.round($(anim_lines[i]).position().top));
		i = 0;

		$(window).on('scroll', function(e){
			top = $(this).scrollTop();
			// console.log($(this).scrollTop());
			// (function(e){
			// 	init_svg_anim(e)
				
			// })(top)
		})
		// $("select").select2({
		// 	theme: "classic",
		// 	tags: true
		// });

		var polyline_position={
			'first':[1200, 1400],
			'second':[1200, 1400],
			'third':[1200, 1400],
		}

		skrollr.init({
			beforerender: function(data) {
				// return data.direction == 'down';
			}
			// ,
			// constants: {
			// 	first_start: function(){
			// 		console.log(parseInt($('.remake_to_path').eq(0).position().top) - polyline_position.first[0])
			// 		return 1000;
			// 		return parseInt($('.remake_to_path').eq(0).position().top) - polyline_position.first[0];
						
			// 		},
			// 	first_end: 00,
			// }
		});
	})
})