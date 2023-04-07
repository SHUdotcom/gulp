<?php
function post_has_archive($args, $post_type)
{
	if ('post' == $post_type) {
		$args['rewrite'] = true;
		$args['has_archive'] = 'news';
		$args['label'] = 'お知らせ';
	}
	return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


// scriptとcssを読み込む
function my_theme_scripts()
{
	
	wp_enqueue_style('reset', get_theme_file_uri('./assets/css/destyle.min.css','1.0'));
	wp_enqueue_style('pc', get_theme_file_uri('./assets/css/style.css',['reset'],'1.0'));
	wp_enqueue_script('allpage', get_theme_file_uri('./assets/js/script.js','1.0'));
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');