$ = jQuery.noConflict();
$(document).ready(function () {
	var setting ={
		page : function(){
			let page  = 'home';
			if ($('body').hasClass('page-template-template-tarif'))
				page = 'tarif';
			else if ($('body').hasClass('page-template-template-apropos'))
				page = 'apropos';
			else if($('body').hasClass('page-template-template-acceuil'))
				page = 'home';
			return page;
		}
	}
	
	if (setting.page() == 'home'){
		function resize_section(){
			let a = 0,
				b = 0; 
			$('#secteurs> ul> li:first-child').css('height', $('#secteurs> ul> li:last-child').height()+'px');
			// $('#secteurs> ul> li:first-child a').css('padding-top', paddingTop+'px');
			a = $('#secteurs> ul> li:first-child a').height(),
			b = $('#secteurs> ul> li:first-child a span').height();
			
			$('#secteurs> ul> li:first-child a').css('padding-top', ((a-b)/2)+'px');

		}
		resize_section();
		window.onresize = resize_section;

		// svg anim
		var polyline_position={
			'first':[1500, 1300],
			'second':[1700, 1500],
			'third':[2000, 1700],
			'fourth':[2300, 2000],
			'fifth':[2600, 2300],
			'sixth':[2900, 2600],
			'seventh':[3200, 2900],
		}

		skrollr.init({
			beforerender: function(data) {
				return data.direction == 'down';
			}
			,
			constants: {
				first_start: function(){
					console.log(this)
					// return 1734;
					// return parseInt($('.remake_to_path').eq(0).position().top) - polyline_position.first[0];
						
					},
				first_end: function(){
					// console.log(parseInt($('.remake_to_path').eq(0).position().top) - polyline_position.first[0])
					// return -1734;
					// return parseInt($('.remake_to_path').eq(0).position().top) - polyline_position.first[0];
						
					},
			}
		});
	}
	if (setting.page() == 'apropos') {
		$('#play_video').on('click', function(){
			document.getElementById("capVideo").play();
			$(this).animate({
				'opacity': 0
			}, 500)
		});
	}
	if (setting.page() == 'tarif'){
		var date = new Date(),
		d = date.getDate(),
		m = date.getMonth()+1,
		y = date.getFullYear(),
		data_date = data_lang =  [],
		form_datas= {date:'', time: '', langue_cible: [], nb_mots: 0, tarif: 0, prix_par_mot : 0};


		////////////////
		//  select2   //
		////////////////

		 // langue source
		lang_data = [
			{'id':'Francais','text': 'Francais'},
			{'id':'Anglais','text':'Anglais'},
			{'id':'Russe','text': 'Russe'}
			];
		$(".langue_source").select2({
			placeholder: "Langue source",
			allowClear: true,
			language: "es",
			data: lang_data
		});

		// langue cible
		$(".langue_cible").select2({
			placeholder: "Langue cible",
			allowClear: true,
			language: "es",
			data: lang_data
		});

		// file upload
		let uploader = document.getElementById('simulator_files'),
			uploader_data = [{id: 1, text: '1'}, {id: 2, text: '2'}];

		$("#simulator_files").on('change', function(e){
			console.log('lsd');
			i = 0;
			uploader_data = [];
			for (; i < uploader.files.length; i++) {
				uploader_data.push({id: (i + 1), text : uploader.files[i].name});
			}

		})
		$(".simulator_files_selected").select2({
		  tags: true,
		  data: function(){return uploader_data}
		})


		////////////////
		//    menu   //
		////////////////
		
		// page load
		if (document.location.search.indexOf('devis') >= 0 || document.location.search.indexOf('simulator') >= 0) {
			$('#process').css('display', 'block');
		}
		if (document.location.search.indexOf('devis') >= 0) {

			$('.tarif_display').css('display', 'none');
			$('.devis_display').css('display', 'block');
			$('#tarif_menu li a').removeClass('active');
			$('.devis_menu').addClass('active');
			$('.tarif_menu').addClass('not_selected');
		}
		if (document.location.search.indexOf('simulator') >= 0) {
			$('.devis_menu').addClass('not_selected');
		}
		// menu on click
		$('.devis_menu, .tarif_menu').on('click', function(e){
			e.preventDefault();
			$('#process').css('display', 'block');
			$('.devis_menu, .tarif_menu').removeClass('not_selected');
			if ($(this).hasClass('tarif_menu')){
				$('.devis_display').css('display', 'none');
				$('.tarif_display').css('display', 'block');
				$('.devis_menu').addClass('not_selected');
			}else{
				$('.tarif_display').css('display', 'none');
				$('.devis_display').css('display', 'block');
				$('.tarif_menu').addClass('not_selected');
			}
			$('#tarif_menu li a').removeClass('active');
			$(this).addClass('active');
		});

		$('.sub').on('click', function(e){
			e.preventDefault();
		})

		////////////////
		// fileUpload //
		////////////////

	  	function calcul_price(){
	  		let checked_language = $('.simulator_language:checkbox[name=estimate]:checked'),
	  			i = 0,
	  			txt = '',
	  			total = 0,
	  			curent_lang_name,
	  			curent_lang_total;

			if ( checked_language.length <= 0 ){
				$('#simulator_result').html('');
				$('#simulator_total').html('');
				alert('Please choose a language!');

				return;
			};

			_simutator.languages = [];
			for (; i <= checked_language.length - 1; i++) {
				let price = $(checked_language[i]).data('simulatorPrice');
				total += curent_lang_total = (_simutator.text_length * price);
				curent_lang_name = $(checked_language[i]).val();

				_simutator.languages.push({'lang': curent_lang_name, 'price': price});
				txt += '<div>'+ curent_lang_name;
				txt +=  ' <div> ' + curent_lang_total.toFixed(2) + '</div>';
				txt += '</div>';
			}
			$('#simulator_result').html(txt);
			$('#simulator_total').html('total = '+ total.toFixed(2) +'$');
	  	}
	  	function calcul_length(param){
	  		console.log(param)
	  		let i = count = 0,
	  		param_split = param.trim().split(' ');

	  		for (; i < param_split.length; i++)
	  			if (param_split[i].length != 0) count++;

	  		return count;
	  	}

		////////////////
		// calendar   //
		////////////////

		for (var i = 0; i < 10; i++) {
			// date
			d++;
			m = parseInt(m);
			if(d<10)
				d='0'+d;
			if(m<10)
				m='0'+m;
			// color
				color = 'green';
			if (i<2)
				color = 'red';
			if(i>=2 && i < 6)
				color = 'orange';

			data_date.push({"date": y+'-'+m+'-'+d, "classname": color});
		}

		$("#my-calendar").zabuto_calendar({
			language: 'fr',
			today: true,
			show_days: true,
			year: date.getFullYear(),
			month: date.getMonth() + 1,
			show_previous: false,
			show_next: 3,
			data : data_date,
			action: function(){
				form_datas.date = $('#'+this.id).data('date').split("-").reverse().join("-");
				
			}
		});


		////////////////
		//   submit   //
		////////////////

		// get form date
		$('#launch_simulation').on('click', function(e){
			e.preventDefault();
			let r = '';

			// add time if checked
			if ($('#choix_heure').is(':checked'))
				form_datas.time = $('#select_time option:selected').val();

			form_datas.langue_source = $(".langue_source").val();
			form_datas.langue_cible = $(".langue_cible").val();

			let files = $('#simulator_files').val();
			
			// if tarif is set
			if (form_datas.tarif != undefined) {
				r += '<p class="text-center text-uppercase" id="slogan">';
				r += (form_datas.tarif * form_datas.prix_par_mot) + ' €';
				r += '<span>h.t</span><span class="text-lowercase">	environ '+form_datas.prix_par_mot +' € / mot';
				r += '</p>';
				r += '<p class="law">Prix estimé non contractuel ; contactez-nous par mail ou tel pour un devis officiel.</p>';
			}

			// if language cible is set
			// if language source is set
			if (form_datas.langue_source != undefined) {
				r += '<h3></h3>';
				r += '<div id="text">'+form_datas.langue_source+'<span class="simulator_arrow"></span>';
				
				if (form_datas.langue_cible != undefined) {
					r += '<span>';
					r += form_datas.langue_cible.join('</span>,<span> ');
					r += '</span>';
				}
				r += '</div>';
			}
			// if date and time are set
			if (form_datas.date != undefined){
				r += ' <h4>date de retoure:</h4><p>Le '+ form_datas.date;
				if (form_datas.time != undefined)
					r += ' à '+ form_datas.time;
			}
			$('#show_result').css('display', 'block').html(r);

			console.log(r)
			console.log(form_datas)
		})
	}





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


})
