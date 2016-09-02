<?php /* Template Name: Tarif */ get_header(); ?>
	<section id="tarif">
		<h1><img src="<?php echo get_template_directory_uri();?>/img/tarif/text_0.png" alt=""></h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate expedita sunt id accusamus distinctio, autem quaerat enim illo deserunt hic alias iste officia quod nulla in eius inventore impedit vero.</p>
		<ul>
			<li><a href="" class="tarif_menu active">Simulater un tarif</a></li>
			<li><a href="" class="tarif_menu">Demander un devis</a></li>
		</ul>
		<div class="col-md-2"></div>
		<form action="" id="process" class="col-md-8">
				<div class="step">
					<h2>choisissez une langue</h2>
					<select class="js-example-basic-single">
					  
					  <option value="AL">Alabama</option>
					    ...
					  <option value="WY">Wyoming</option>
					</select>
				</div>
				<div class="step">
					<h2>Choisissez le texte à traduire</h2>
					<h3>Importer un fichier depuis votre ordinateur</h3>
					<span class="good_extensions">(.txt, .doc ou .pdf)</span>
					<p class="text-center">OU</p>
					<h3>Saisir le nombre de mots</h3>
					<div class="input_cont">
						<input type="text" id="nb_mots">mots
					</div>
					<p class="text-center">OU</p>
					<h3>Saisir directement le texte</h3>
					<textarea id="past_mode" ></textarea>

				</div>
				<div class="step">
					<h2>Définissez la date de retour</h2>
					<div class="col-xs-4 col-md-4"></div>
					<div class="col-xs-4 col-md-4">
						<div>
					calendar
							<input type="checkbox" name="choix_heure" id="choix_heure">
							<label for="choix_heure" class="pointer">Choisir l'heure (optionnel)</label>
						</div>
					</div>
					<div class="col-xs-4 col-md-4">
						<ul id="code_color">
							<li>
								<p>Délai urgent</p>
								<span></span>
							</li>
							<li>
								<p>Délai express</p>
								<span></span>
							</li>
							<li>
								<p>Délai normal</p>
								<span></span>
							</li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="step" id="display_tarif">
				</div>
				<div>
					<ul>
						<li><a href="" class="btn"><span>Enregistre l'estimation</a></li>
						<li><a href="" class="btn">Demander un devis</a></li>
					</ul>
				</div>
				<!-- resultat -->
				<div id="tarif_result">
					<p class="text-center text-uppercase" id="slogan">Prix en € <span>h.t.</span> <span class="text-lowercase">environ 0,604 € / mot</span></p>
					<h3>Récapitulatif</h3>
					<div id="recap">
						<span>Francais</span>
						<span>Anglais, Espagnol, Allemand</span>
					</div>
					<h3>Texte</h3>
					<div id="text">Text.txt</div>
					<h3>Date de retour:</h3>
					<div id="date_retour">Le 31 Aout 2016 à 3PM.</div>

					<p>Langue</p>
				</div>
		</form>
		<div class="col-md-2"></div>

	</section>
	<main role="main">
		<!-- section -->
		<section class="block_container"></section>
		<!-- section -->
		<!-- section -->
		<section id="price_simutator">
		  	<ul>
		  		<li>Deposer</li>
		  		<li>Test</li>
		  	</ul>
			  <form>
			  		<input type="file" name="files[]" id='simulator_files' multiple/>
			  		<label>
			  			<span>Fr</span>
				  		<input type="checkbox" name='estimate' value="French" class="simulator_language" data-simulator-price='0.25'>
			  		</label>
			  		<label>
			  			<span>En</span>
			  			<input type="checkbox" name='estimate' value="English" class="simulator_language" data-simulator-price='0.35'>
			  		</label>
			  		<label>
			  			<span>Ru</span>
			  			<input type="checkbox" name='estimate' value="Russian" class="simulator_language" data-simulator-price='0.50'>
			  		</label>
			  		<textarea id="simulator_textarea"></textarea>
			  		<input type="submit" value="submit" id="sumulator_submit">
			  </form>
			  <div id="simulator_text_lenght"></div>
			  <div id="simulator_result"></div>
			  <div id="simulator_total"></div>
		  </div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
