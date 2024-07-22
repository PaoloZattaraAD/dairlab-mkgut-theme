<?php 
wp_enqueue_style('blog_css', get_template_directory_uri(  ).'/css/news.css');
get_header(); ?>
<div class="news-wrapper">
    <?php get_sidebar('blog'); ?>
    <div class="articles">
        <?php if(have_posts(  )): while(have_posts(  )): the_post(); ?>
            <?php get_template_part('template-parts/content/loop-new'); ?>
        <?php endwhile; ?>
        <div class="nav-next"><?php next_posts_link( 'Carica altre news' ); ?></div>
        <?php endif; ?>
    </div>
</div>
<script>
    let navfilter = document.querySelector('.filters-nav');
    let grouped = document.querySelector('.grouped');
    navfilter.addEventListener('click',function(){
        this.classList.toggle('active');
        grouped.classList.toggle('active');
    })
</script>
<div class="site-form wp-block-group alignwide din-margin is-layout-flow wp-block-group-is-layout-flow">
<div class="wp-block-group__inner-container">
<?php if(ICL_LANGUAGE_CODE == 'it'){  ?>
    <?php echo do_shortcode('[contact-form-7 id="8849baa" title="Modulo contatti IT"]'); ?>
    <?php }else{ ?>
        <?php echo do_shortcode('[contact-form-7 id="956a0e8" title="EN CONTACT FORM"]'); ?> 
    <?php } ?>
</div>
</div>
<?php get_footer(); ?>