<?php

// function post_images() {
//   global $post, $posts;
//   ob_start();
//   ob_end_clean();
//   preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
//   return $matches[1];
// }

add_action('init', function () {
  remove_filter('the_excerpt', 'wpautop');
  remove_filter('the_content', 'wpautop');
});
add_filter('tiny_mce_before_init', function ($init) {
  $init['wpautop'] = false;
  $init['apply_source_formatting'] = true;
  return $init;
});

add_theme_support('post-thumbnails');
