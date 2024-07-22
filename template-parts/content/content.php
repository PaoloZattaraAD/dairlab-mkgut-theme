<?php //single content ?>
<article class="single-post alignwide">
    <div class="image-featured">
        <?php the_post_thumbnail( "full" ); ?>
        <div class="content"><span><?php  the_field('mk_image_over_text'); ?></span></div>
    </div>
    <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>
    <div class="entry-content">
        <?php the_content(); ?> 
    </div>
</article>