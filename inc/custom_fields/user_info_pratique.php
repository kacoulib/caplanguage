<?php
	add_action( 'show_user_profile', 'user_info_pratique_extra_profile_fields' );
	add_action( 'edit_user_profile', 'user_info_pratique_extra_profile_fields' );

	function user_info_pratique_extra_profile_fields( $user ) {
		// instagram api info

		echo '<h3 style="text-align: center;text-decoration: underline;">Vos info pratiques</h3>';

		$content = ( get_the_author_meta( 'infoPratique', $user->ID ) );
		if(empty($content)){
			$content = '
				<div class="info_pratique_content borderAnneau">
					<h4 class="grayColor">déroulé de la semaine</h4>
					<ul class="listAnneau redAnneau">
						<li><div>lundi : </div> Journée plage</li>
						<li><div>mardi : </div> Journée en bâteau</li>
						<li><div>mercredi : </div> Randonnée sur la montagne Soufrière</li>
						<li><div>jeudi : </div> Enterrement de vie de jeune fille et de vie de garçon</li>
						<li><div>vendredi : </div> Temps libre</li>
						<li class="redColor"><div>samedi : </div> j-j cérémonie </li>
					</ul>
				</div>
				<div class="info_pratique_content borderAnneau">
					<h4 class="grayColor">déroulé de la cérémonie</h4>
					<ul class="listAnneau redAnneau">
						<li><div>11h : </div> Brunch</li>
						<li><div>15h : </div> Rendez-vous sur la plage de Roseau </li>
						<li><div>16h : </div> Arrivée des mariées, début de la cérémonie</li>
						<li><div>18h : </div> Vin d’honneur sur la plage</li>
						<li><div>21h : </div> Dîner à la Villa Les Palmiers</li>
						<li><div>00h : </div> Fête jusqu’au bout de la nuit</li>
					</ul>
				</div>
				<div class="info_pratique_content borderAnneau">
					<h4 class="grayColor">quelques petits plus</h4>
					<ul class="listAnneau redAnneau">
						<li><div>Se rendre en guadeloupe : </div>Quatre compagnies d\'aviation proposent chaque jour un aller-retour entre Paris et Pointe-à-Pitre. Une compagnie canadienne propose également un voyage par semaine au départ de Québec.</li>
						<li><div>Où dormir : </div> Villa Caraïbes, Villa Hamak, Le Club Med, La Créole Beach Hôtel</li>
						<li><div>argent : </div> Attention à toujours avoir de l\'argent liquide sur soi car les commerçants prennent rarement les chèques hors place (hors Guadeloupe) et ne sont pas tous équipés du paiement par carte de crédit. Des distributeurs sont disponibles dans tous les bourgs de Guadeloupe.</li>
						<li><div>Plats traditionnels : </div> Bébélé : à base de tripes dombrés et bananes vertes, Bokit, Danquitte, Matoutou, Migan : Purée grossière de banane et de fruits à pain, Pain au beurre</li>
					</ul>
				</div>';
		}
		wp_editor( $content, $user->ID, array('textarea_name'=>'infoPratique', 'tinymce' => array('content_css' => get_stylesheet_directory_uri().'/style-tinymce.css'))); 
	}

	add_action( 'personal_options_update', 'user_info_pratique_save_extra_profile_fields' );
	add_action( 'edit_user_profile_update', 'user_info_pratique_save_extra_profile_fields' );

	function user_info_pratique_save_extra_profile_fields( $user_id ) {

		if ( !current_user_can( 'edit_user', $user_id ) )
			return false;

		/* Copy and paste this line for additional fields. Make sure to change 'twitter' to the field ID. */
		update_usermeta( $user_id, 'infoPratique', $_POST['infoPratique'] );
	}