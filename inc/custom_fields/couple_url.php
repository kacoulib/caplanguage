<?php
	add_action( 'show_user_profile', 'couples_url' );
	add_action( 'edit_user_profile', 'couples_url' );

	function couples_url( $user ) {
		$html = '<h3 style="text-align:center; text-decoration:underline;">Gestion des invité(e)s</h3>';
		$html .= '<table class="form-table"><tr><th>';
		$html .= '<label for="twitter"><strong>URL pour des invité(e)s</strong></label></th>';
		$html .= '<td>'.get_author_posts_url($user->data->ID).'</td></tr></table>';
		echo $html;
	}
