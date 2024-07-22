<article class="single-entry">
    <div class="image-featured">
        <?php the_post_thumbnail( "full" ); ?>
    </div>
    <div class="meta-wrapper">
        <div class="meta_tags">
            <?php echo get_the_category_list(); ?>
            <?php if(get_field('tipologia_news')){?>
                <div class="post_type"><?php echo get_field('tipologia_news'); ?></div>
            <?php }else{ ?>
                <div class="post_type">News</div>   
            <?php } ?>
        </div>
        <div class="entry-date"><?php echo get_the_date('j F Y'); ?></div>
    </div>
    <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
    <div class="entry-content">
        <?php the_content(); ?> 
    </div>
</article>
<?php get_template_part('template-parts/loop/related-posts'); ?>