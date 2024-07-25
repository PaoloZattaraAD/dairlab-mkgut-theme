<?php
/* Template Name: Landing Workair*/
wp_enqueue_style('landing_css', get_template_directory_uri(  ).'/landing-workair/style.css');

get_header('landing-workair');
?>
<?php the_content(); ?>
<?php get_footer('landing-workair'); ?>
