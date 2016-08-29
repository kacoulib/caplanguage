<?php
	add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
	add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

	function my_show_extra_profile_fields( $user ) {
		$html = '';
		$html .= '<h3>Extra profile information</h3>';
		$html .= '<table class="form-table"><tr><th>';
		$html .= '<label for="twitter">Date de mariage</label></th>';
		$html .= '<td><input type="date" name="date_de_mariage" id="date_de_mariage" value="'.esc_attr( get_the_author_meta( 'date_de_mariage', $user->ID ) ).'" palceholder="Veillez entre la date de votre mariage"/><br />';
		$html .= '</td></tr></table>';
		echo $html;
	}

	add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
	add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

	function my_save_extra_profile_fields( $user_id ) {

		if ( !current_user_can( 'edit_user', $user_id ) )
			return false;

		/* Copy and paste this line for additional fields. Make sure to change 'twitter' to the field ID. */
		update_usermeta( $user_id, 'date_de_mariage', $_POST['date_de_mariage'] );
	}