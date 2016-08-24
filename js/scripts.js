(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
			function isHome(){
				// for local
				return /(caplanguage\/?|accueil\/?|home\/?)+$/.test(document.location.pathname);
			}
			console.log(isHome());
		// DOM ready, take it away

		/* -- simulator -- */
	
		var _simutator = {
  		text_length : 0,
  		languages : [],
  		extension : [
	  					['.doc', '.txt', '.pdf'], ['document', 'text/plain', 'application/pdf'],
					]
	  	};

	  	$('#sumulator_submit').on('click', function(e){
	  		e.preventDefault();
	  		// if text has been past
	  		let simulator_textarea_val = $('#simulator_textarea').val();
	  		if( simulator_textarea_val.length > 0){
	  			_simutator.text_length = calcul_length(simulator_textarea_val);
	  			$('#simulator_text_lenght').html(_simutator.text_length +' mots');
	  			calcul_price();
	  			return;
	  		}

	  		if (window.File && window.FileReader && window.FileList && window.Blob) {
	  			let input = document.getElementById('simulator_files');
				if (!input.files.length) {
			      alert('Please select a file!');
			      return;
			    }

			    // re initialise simutalor text length
		  		_simutator.text_length = 0;
			  	for (var i = 0;  i < input.files.length; i++) {
			  		
			  		(function(file){
					    let reader = new FileReader();

					    reader.onload = function(){
					  		_simutator.text_length += calcul_length(reader.result);
					    };
					  	reader.onloadend = function(e){
					  		calcul_price()
					  	};

					    reader.readAsText(file);

			  		})(input.files[i])
			  	}
		  		return;

			} else {
			  alert('The File APIs are not fully supported by your browser.');
			}
	  	})

	  	// return the count * price
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
	  		let i = 0, 
	  		count = 0,
	  		param_split = param.trim().split(' ');

	  		for (; i < param_split.length; i++)
	  			if (param_split[i].length != 0) count++;

	  		return count;
	  	}

		/* -- /simulator -- */
		
	});
	
})(jQuery, this);
