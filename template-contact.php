<?php /* Template Name: Contact */ get_header(); ?>
	
	<section id="contact_page">
			<div class="col-xs-2"></div>
			<div class="col-xs-8 form_container">
				<h2 class="text-center">Contactez nous en remplissant notre formulaire ou <span class="block">directement sur notre adresse mail à hello@caplanguage.com
				</span></h2>

				<!-- form -->
				<div class="col-xs-2"></div>
				<div class="form col-xs-8">
					<?php the_content();?>
				</div>
				<div class="col-xs-2"></div>
				<!-- end form -->

			</div>
			<span class="col-xs-2"></span>
		<!-- tarif -->
		<div class="clearfix"></div>
		<!-- simulator -->
		<div id="contact_simulator">
			<div class="col-xs-2"></div>
			<div class='col-xs-8'>
				<div>
					
					<div>
						<h4>Pour une réponse rapide et précise sur vos projets :</h4>
					</div>
					<!-- btn -->
					<div class="col-xs-2"></div>
					<div class="col-xs-8">
						<div class="col-xs-2"></div>
						<ul class="text-uppercase col-xs-10">
							<li><a href="<?php echo get_page_link(60);?>?action=simulator" class='btn'>demander un devis</a></li>
						</ul>
							
					</div>
					<div class="col-xs-2"></div>
					<!-- end btn -->

				</div>
			</div>
			<div class="col-xs-2"></div>
			<div class="clearfix"></div>
		</div>
		</div>
	</section>

	



<?php get_footer(); ?>
