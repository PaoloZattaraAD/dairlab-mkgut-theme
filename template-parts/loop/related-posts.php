<?php $myquery = new WP_Query(array(
    "post_type" => 'post',
    "orderby" => 'date',
    "posts_per_page" => '6',
));
$categorytitle = "";
if($myquery->have_posts(  )): ?>
    <section id="footer_posts_related">
        <div id="relatedposts" class="posts-carousel postcarousel splide">
            <div class="slide_head_wrapper">
            <h2 class="section-title"><strong>Articoli correlati</strong></h2>
        <div class="splide__arrows"></div>
            </div>
            <div class="splide__track">
                <div class="splide__list">
                <?php while($myquery->have_posts(  )): $myquery->the_post(); ?>
                <div class="splide__slide">
                    <?php get_template_part('template-parts/content/loop-new'); ?>      
                </div>
                <?php endwhile; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>