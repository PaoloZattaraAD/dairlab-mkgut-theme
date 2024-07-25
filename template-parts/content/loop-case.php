<?php //single content ?>
<article class="single-article onloop loop-article">
    <div class="image-featured">
        <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_post_thumbnail( "full" ); ?></a>
            <div class="content">
                <div class="meta_tags">
                    <ul>
                        <?php wp_list_categories( array(
                            'title_li' => false,
                            'orderby' => 'name',
                            'include' => array( 3, 5, 9, 16 )
                        ) ); ?> 
                    </ul>
                    <div class="post_type"><?php echo get_field('tipologia_news'); ?></div>
                </div>
            </div>
    </div>
    <header>
       <a href="<?php the_permalink(); ?>">
       <h1 class="entry-title"><?php the_title(); ?></h1>
        </a>
    </header>
    <div class="read-more">
        <a href="<?php the_permalink(); ?>">
            <?php if(ICL_LANGUAGE_CODE == 'it'){  ?>
            Leggi l'articolo
            <?php }else{ ?>
            READ MORE
            <?php } ?>
            <span class="line"></span>
        </a>
    </div>
</article>