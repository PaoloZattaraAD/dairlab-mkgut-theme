<?php $myquery = new WP_Query(array(
    "post_type" => 'post',
    "orderby" => 'date',
    "posts_per_page" => '6',
));
if($myquery->have_posts(  )): ?>
    <section id="latest-posts" class="latest-posts din-margin">
        <h2 class="has-text-align-center alignwide section-title">D-AIR LAB <strong>HIGHLIGHTS</strong></h2>
        <div id="newscarousel" class="news-carousel postcarousel splide">
            <div class="splide__track">
                <div class="splide__list">
                <?php while($myquery->have_posts(  )): $myquery->the_post(); ?>
                <?php $category = get_the_category(); 
                $categorytitle .= $category[0] ? $category[0]->name : ' ';
                ?>
                    <article id="post-<?php the_ID(); ?>" class="splide__slide">
                        <div class="thumbail splide__slide__container">
                            <a href="<?php the_permalink( ); ?>" rel="bookmark"><?php the_post_thumbnail( 'dairlab-thumb') ?></a>
                        </div>   
                        <header class="entry-header">
                        <h2 class="cat-title-post-title"><span class="cat-title"><?php the_title(); ?></span> <span class="entry-title"><?php the_excerpt(); ?></span></h2>
                        </header><!-- .entry-header -->
                    </article>
                <?php $categorytitle = ""; ?>
                <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>