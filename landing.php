<?php 
/* Template Name: Landing */
wp_enqueue_style('landing_css', get_template_directory_uri(  ).'/landing/style.css');

get_header('landing');
?>
<?php the_content(); ?>
<?php get_footer('landing'); ?>