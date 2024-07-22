<?php 

$myquery = new WP_Query(array(
    "post_type" => 'case-history',
    "orderby" => 'date',
    "posts_per_page" => '6',
));
if($myquery->have_posts(  )): ?>
    <section id="latest-posts" class="latest-posts din-margin">
        <div id="newscarousel" class="news-carousel postcarousel splide">
            <div class="splide__track">
                <div class="splide__list">
                <?php while($myquery->have_posts(  )): $myquery->the_post();
                get_template_part('template-parts/content/loop-case');
                endwhile; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>