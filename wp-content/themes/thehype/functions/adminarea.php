<?php
/*
Admin area
*/


function custom_admin_footer() {
	echo '<a href="http://themehype.test/">' . __( 'Webbplats byggd av Malin Thunberg - Themehype', 'translate' ) . '</a>';
}
add_filter( 'admin_footer_text', 'custom_admin_footer' );

