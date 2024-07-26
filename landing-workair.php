<?php
/* Template Name: Landing Workair*/
wp_enqueue_style('landing_css', get_template_directory_uri(  ).'/landing-workair/style.css');

get_header('landing-workair');
?>

<?php while(have_posts(  )): the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; ?>

<?php get_footer('landing-workair'); ?>
