<?php //single content ?>
<article class="single-article onloop loop-article">
    <div class="image-featured">
        <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_post_thumbnail( "full" ); ?></a>
            <div class="meta-wrapper">
                <div class="meta_tags">
                    <?php echo get_the_category_list(); ?>
                    <?php if(get_field('tipologia_news')){?>
                        <div class="post_type"><?php echo get_field('tipologia_news'); ?></div>
                    <?php }else{ ?>
                        <div class="post_type">News</div>   
                    <?php } ?>
                </div>
                <!-- <div class="entry-date"><?php echo get_the_date('j F Y'); ?></div> -->
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
            Read More
            <?php } ?>
            <span class="line"></span>
        </a>
    </div>
</article>