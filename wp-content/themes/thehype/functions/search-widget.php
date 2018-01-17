<?php

function themehype_search_form( $form ) {
    $form = '<form class="form-inline" role="search" method="get" id="searchform" action="' . home_url('/') . '" >
	<input class="form-control mr-sm-1" type="text" value="' . get_search_query() . '" placeholder="' . esc_attr__('Search', 'themehype') . '..." name="s" id="s" />
	<button type="submit" id="searchsubmit" value="'. esc_attr__('Search', 'themehype') .'" class="btn btn-primary"><i class="fas fa-search"></i></button>
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'themehype_search_form' );
