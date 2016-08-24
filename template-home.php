<?php /* Template Name: home */ get_header(); ?>

	<main role="main">
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
<?php get_sidebar(); ?>

<?php get_footer(); ?>
