<?php 
/* Template Name: File Search */
wp_enqueue_script('serialweb', get_template_directory_uri().'/plug_work_activation/workair_activation_scripts.js',array(),'23032021' , true );
wp_enqueue_style('workairstyle', get_template_directory_uri().'/plug_work_activation/workair.css', '10202',true );
 ?>
<?php get_header(); ?>
<?php while(have_posts(  )): the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; ?>
<?php get_footer(); ?>