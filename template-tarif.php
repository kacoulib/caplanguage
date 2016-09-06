<?php /* Template Name: Tarif */ get_header(); ?>
	<section id="tarif">
		<h1><img src="<?php echo get_template_directory_uri();?>/img/tarif/text_0.png" alt=""></h1>
		<span class="col-md-2"></span>
		<p class="col-md-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate expedita sunt id accusamus distinctio, autem quaerat enim illo deserunt hic alias iste officia quod nulla in eius inventore impedit vero.</p>
		<span class="col-md-2"></span>
		<!-- form -->
		<div class="clearfix"></div>
		<ul id='tarif_menu'>
			<li><a href="#" class="simulate_menu tarif_menu active">Simuler un tarif</a></li>
			<li><a href="#" class="simulate_menu devis_menu">Demander un devis</a></li>
		</ul>
		<div class="col-md-2"></div>
		<form action="" id="process" class="col-md-8">
				<div class="step">
					<h2>choisissez une langue</h2>
					<div class="col-md-5">
						<span class="col-md-2"></span>
						<span class="col-md-10">
							<select class="langue_source form-control"></select>  
						</span>
					</div>
					<div class="col-md-2"><span><img src="<?php echo get_template_directory_uri();?>/img/tarif/arrow.png" alt=""></span></div>
					<div class="col-md-5">
						<span class="col-md-10">
							<select class="langue_cible form-control " multiple="multiple"></select> 

						</span>
						<span class="col-md-2"></span>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="step">
					<div>
						<h2>Choisissez le texte à traduire</h2>
						<h4>Importer un fichier depuis votre ordinateur</h4>
						<span class="good_extensions">(.txt, .doc ou .pdf)</span>
						<div class="col-md-6">
							<span class="col-md-2"></span>
							<span class="col-md-10">
								<input type="file" name="files[]" id='simulator_files' multiple/>
							</span>
						</div>
						<div class="col-md-6">
							<span class="col-md-10">
								<select type="file" name="files[]" class='simulator_files_selected col-md-12' multiple/>
									
								</select>
							</span>
							<span class="col-md-2"></span>
						</div>
						<span class="col-md-1"></span>
						<div class="col-md-10">
							<p class="law">*Vos données sont gérées en toute confidentialité, elle ne sont pas enregistrées dans le cadre d'une simple simulation de tarif. Elle ne seront enregistrées que si vous cliquez sur le bouton "enregistrer" pour envoyer votre demande de devis. Vous pouvez également nous transmettre vos documents directement par mail à  hello@caplanguage.</p>	
						</div>
						<span class="col-md-1"></span>
					</div>

					<!-- ou -->
					<p class="text-center col-md-12"><span class="ou"></span></p>
					<span class="clearfix"></span>

					<div class="col-md-12">
						<h4>Saisir le nombre de mots</h4>
						<span class="col-md-1"></span>
						<div class="input_cont col-md-11 text-left" id="nb_mots" >
							<input type="text">mots
						</div>
					<!-- ou -->
					<span class="clearfix"></span>
					<p class="text-center col-md-12"><span class="ou"></span></p>
						
					</div>
					<div>
						<h4>Saisir directement le texte</h4>
						<textarea id="past_mode" ></textarea>
					</div>

				</div>
				<div class="step">
					<h2>Définissez la date de retour</h2>
					<div class="col-xs-3 col-md-3"></div>
					<div class="col-xs-6 col-md-6">
						<div>
							<div id="my-calendar"></div>
							<div class="checkbox">
								<label>
									<input type="checkbox" id="choix_heure"> Choisir l'heure (optionnel)
								</label>
							</div>
							
							<div>
								<select name="select" id="select_time">
								<!-- AM -->
								  <optgroup label="AM">
									<option value="01AM">01 AM</option> 
									<option value="02AM">02 AM</option>
									<option value="03AM">03 AM</option>
									<option value="04AM">04 AM</option>
									<option value="05AM">05 AM</option>
									<option value="06AM">06 AM</option>
									<option value="07AM">07 AM</option>
									<option value="08AM">08 AM</option>
									<option value="09AM">09 AM</option>
									<option value="10AM">10 AM</option>
									<option value="11AM">11 AM</option>
									<option value="12AM">12 AM</option>
								  </optgroup>
									  <!-- PM -->
								  <optgroup label="PM">
									<option value="01PM">01 PM</option> 
									<option value="02PM">02 PM</option>
									<option value="03PM">03 PM</option>
									<option value="04PM">04 PM</option>
									<option value="05PM">05 PM</option>
									<option value="06PM">06 PM</option>
									<option value="07PM">07 PM</option>
									<option value="08PM">08 PM</option>
									<option value="09PM">09 PM</option>
									<option value="10PM">10 PM</option>
									<option value="11PM">11 PM</option>
									<option value="12PM">12 PM</option>
								  </optgroup>
								</select>
								<p class="law">(UTC +1:00) Central European Time (Paris)</p>
							</div>
						</div>
					</div>
					<div class="col-xs-3 col-md-3">
						<ul id="code_color">
							<li>
								<p>Délai urgent</p>
								<span class="bg_red"></span>
							</li>
							<li>
								<p>Délai express</p>
								<span class="bg_orange"></span>
							</li>
							<li>
								<p>Délai normal</p>
								<span class="bg_green"></span>
							</li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
				<!-- information -->
				<div class="step devis_display" id="information">
					<h2>Entrez vos informations</h2>
					<!-- 1 -->
					<div class="col-md-6">
						<label>
							<div class="text-left">Nom ou societé*</div>
							<input type="text" name="nom" class="information_input">
						</label>
					</div>
					<div class="col-md-6">
						<label>
							<div class="text-left">Prenom*</div>
							<input type="text" name="prenom" class="information_input">
						</label>
					</div>					
					<!-- 2 -->
					<div class="col-md-6">
						<label>
							<div class="text-left">Adresse*</div>
							<input type="text" name="adresse" class="information_input">
						</label>
					</div>
					<div class="col-md-6">
						<label>
							<div class="text-left">Ville*</div>
							<input type="text" name="ville" class="information_input">
						</label>
					</div>					
					<!-- 3 -->
					<div class="col-md-6">
						<label>
							<div class="text-left">Code postal*</div>
							<input type="text" name="code_postal" class="information_input">
						</label>
					</div>
					<div class="col-md-6">
						<label>
							<div class="text-left">Pays*</div>
							<input type="text" name="pays" class="information_input">
						</label>
					</div>					
					<!-- 4 -->
					<div class="col-md-6">
						<label>
							<div class="text-left">Email*</div>
							<input type="email" name="email" class="information_input">
						</label>
					</div>
					<div class="col-md-6">
						<label>
							<div class="text-left">N° téléphone*</div>
							<input type="number" name="telephone" class="information_input">
						</label>
					</div>					
					<div class="clearfix"></div>
				</div>
				<p class="law">Conformément à la loi « informatique et libertés » du 6 janvier 1978 modifiée, vous disposez d’un droit d’accès et de rectification aux informations qui vous concernent. Vous pouvez accèder aux informations vous concernant en vous adressant à : hello@caplanguage.com
Vous pouvez également, pour des motifs légitimes, vous opposer au traitement des données vous concernant.
Pour en savoir plus, consultez vos droits sur le site de la CNIL.</p>
				<div class="devis_display">
					<ul>
						<li cla><a href="" class="btn sub"><span>Envoyer</a></li>
					</ul>
				</div>
				<!-- resultat -->
				<div id="tarif_result" class="tarif_display">
					<div id="show_result" class="col-md-12">
						<p class="text-center text-uppercase" id="slogan">Prix en € <span>h.t.</span> <span class="text-lowercase">environ 0,604 € / mot</span></p>

						<p class="law">Prix estimé non contractuel ; contactez-nous par mail ou tel pour un devis officiel.</p>
						<h2>Récapitulatif</h2>
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
					<div class="col-md-12">
						<ul class="text-uppercase">
							<li class="pull-left"><a href="#" id="launch_simulation">simuler un tarif</a></li>
							<li class="pull-right"><a href="<?php echo get_page_link(60);?>?action=simulator">demander un devis</a></li>
						</ul>
					</div>

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
