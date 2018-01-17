<?php

function themehype_setup() {
	add_editor_style('theme/css/editor-style.css');
	add_theme_support('post-thumbnails');
	update_option('thumbnail_size_w', 350);
	update_option('medium_size_w', 730);
	update_option('large_size_w', 1110);
}
add_action('init', 'themehype_setup');

if (! isset($content_width)) {
	$content_width = 600;
}

function themehype_excerpt_readmore() {
	return '&nbsp; <a href="'. get_permalink() . '">' . '&hellip; ' . __('Continue reading', 'themehype') . ' <i class="fas fa-arrow-right"></i>' . '</a></p>';
}
add_filter('excerpt_more', 'themehype_excerpt_readmore');

// Add post formats support. See http://codex.wordpress.org/Post_Formats
add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));
