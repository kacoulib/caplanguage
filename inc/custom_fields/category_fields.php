<?php
// Add term page
function langues_category_add_new_meta_field() {
	// this will add the custom meta field to the add new term page
	?>
	<div class="form-field">
		<label for="langues_prefix">Langue Prefix</label>
		<input type="text" name="langues_prefix" id="langues_prefix" placeholder="Ex: Fr">
		<p class="description">Le prefix de la langue. Ex: Fr, En ...</p>
	</div>
	<div class="form-field">
		<label for="langues_prix">Langue prix</label>
		<input type="text" name="langues_prix" id="langues_prix" placeholder="Ex: 0.25">
		<p class="description">Le prix par mots de la langue. 0.25</p>
	</div>
<?php
}
// add_action( 'category_add_form_fields', 'langues_category_add_new_meta_field', 10, 2 );
add_action( 'genres_add_form_fields', 'langues_category_add_new_meta_field', 10, 2 );