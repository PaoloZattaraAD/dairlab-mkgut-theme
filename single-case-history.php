<?php 
wp_enqueue_style('blog_css', get_template_directory_uri(  ).'/css/news.css');
get_header(); ?>
<?php while(have_posts(  )): the_post(); ?>
<?php get_template_part('template-parts/content/new'); ?>
<?php
	// Previous/next post navigation.

	// $dairlabtm_next_label     = "Avanti";
	// $dairlabtm_previous_label = "Indietro";

	// the_post_navigation(
	// 	array(
	// 		'next_text' => '<p class="meta-nav">' . $dairlabtm_next_label.  '</p><p class="post-title">%title</p>',
	// 		'prev_text' => '<p class="meta-nav">' .$dairlabtm_previous_label. '</p><p class="post-title">%title</p>',
	// 	)
	// );
?>
<?php endwhile; ?>
<?php get_footer(); ?>