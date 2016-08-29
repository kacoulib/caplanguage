<?php
	add_action( 'show_user_profile', 'subcriber_extra_profile_fields' );
	add_action( 'edit_user_profile', 'subcriber_extra_profile_fields' );

	function subcriber_extra_profile_fields( $user ) {

		$subcribers = new WP_User_Query( array( 'meta_key' => 'user_linking', 'meta_value' => $user->ID) );
		$html = '';
		echo '<h3><a href="#listInvite">Liste des invité(e)s</a></h3>';
		echo '<div id="lists" style="text-align:center;max-width:500px;max-height:500px;overflow-y:scroll;margin:auto">';
		if (!empty($subcribers->results)) {
			foreach ($subcribers->results as $value) {
			echo '<p style="border-bottom:1px solid black;">'.$value->data->display_name.'</p>';
			}
		}
		echo '</div>';
	}
