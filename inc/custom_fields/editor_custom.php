<?php
	add_action( 'show_user_profile', 'editor_custom_extra_profile_fields' );
	add_action( 'edit_user_profile', 'editor_custom_extra_profile_fields' );

	function editor_custom_extra_profile_fields( $user ) {
		$html = '';
		// nombre évènements dans les îles de guadeloupre
		$html .= '<h2>Information general</h2></th>';

		// Numero de téléphone de l'agence
		$html .= '<table class="form-table"><tr><th>';
		$html .= '<label for="nbTraduction">Téléphone de l\'agence</label></th>';
		$html .= '<td><input type="text" name="agencyTel" class="regular-text" id="agencyTel" value="'.esc_attr( get_the_author_meta( 'agencyTel', $user->ID ) ).'" palceholder="Veillez entre le nombre évènements dans les îles de guadeloupre"/><br />';
		$html .= '</td></tr></table>';


		// Nombre de traduction effectuer par l'agence
		$html .= '<table class="form-table"><tr><th>';
		$html .= '<label for="nbTraduction">Nombre de traduction</label></th>';
		$html .= '<td><input type="text" name="nbTraduction" class="regular-text" id="nbTraduction" value="'.esc_attr( get_the_author_meta( 'nbTraduction', $user->ID ) ).'" palceholder="Veillez entre le nombre de traduction"/><br />';
		$html .= '</td></tr></table>';
		echo $html;
	}

	add_action( 'personal_options_update', 'editor_custom_save_extra_profile_fields' );
	add_action( 'edit_user_profile_update', 'editor_custom_save_extra_profile_fields' );

	function editor_custom_save_extra_profile_fields( $user_id ) {

		/* Copy and paste this line for additional fields. Make sure to change 'twitter' to the field ID. */
		update_usermeta( $user_id, 'agencyTel', $_POST['agencyTel'] );
		update_usermeta( $user_id, 'nbTraduction', $_POST['nbTraduction'] );
	}