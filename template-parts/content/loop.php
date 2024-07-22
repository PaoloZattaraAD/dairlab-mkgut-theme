<?php //single content ?>
<article class="single-post alignwide onloop">
    <div class="image-featured">
        <?php the_post_thumbnail( "full" ); ?>
            <div class="content">
                <a href="<?php the_permalink(); ?>">
                <span><?php  the_field('mk_image_over_text'); ?></span>
                </a>
                <div class="link-button-container">
                    <a class="button" href="<?php the_permalink(); ?>">
                    <?php if(ICL_LANGUAGE_CODE == 'it'){  ?>
                        SCOPRI DI PIÙ...
                        <?php }else{ ?>
                        READ MORE...
                        <?php } ?>
                    </a>
                </div>
            </div>
    </div>
    <header>
       <a href="<?php the_permalink(); ?>">
       <h1 class="entry-title"><?php the_title(); ?></h1>
        </a>
    </header>
    <div class="entry-content">
        <?php the_excerpt(); ?> 
    </div>
</article>