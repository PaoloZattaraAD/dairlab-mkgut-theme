<?php
// Register a slider block.
add_action('acf/init', 'mk_preview_articolo');
function mk_preview_articolo() {

    // check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'getarticle',
            'title'             => __('Article Preview'),
            'description'       => __('Article Preview.'),
            'render_callback'   => 'mk_preview_articolo_callback',
			'category'          => 'formatting',
			'icon' 				=> 'images-alt2',
			'align'				=> 'alignwide',
            'enqueue_assets' 	=> function(){
				wp_enqueue_script( 'block-slider', get_template_directory_uri() . '/blocks/slider.js', array('jquery'), '3.23', true );
			  },
        ));
    }
}

// Block for simply slideshow

function mk_preview_articolo_callback($block, $content = '', $is_preview = false, $post_id = 0 ){

    $id = 'new-post-' . $block['id'];

        // Create class attribute allowing for custom "className" and "align" values.

        if( !empty($block['className']) ) {
            $className .= ' ' . $block['className'];
        }
        if( !empty($block['align']) ) {
            $className .= ' align' . $block['align'];
        }
        if( $is_preview ) {
            $className .= ' is-admin';
            ?>
            <style>
            </style>
        <?php }

    ?>
    <?php $articoloprev = get_field('preview_articolo'); ?>
    <?php $isslide = get_field('mk_tipologia_preview_news'); ?>
    <?php if( $articoloprev && $isslide ){ ?>
        <div class="mk_slider_element din-margin">
        <section id="<?php echo esc_attr($id); ?>" class="articles-preview articles-slide splide <?php echo esc_attr($className); ?> mk_slider_slideshow_image">
            <div class="splide__track">
                <div class="splide__list">
                <?php foreach( $articoloprev as $article ): ?>
                    <article class="single-post getarticle splide__slide">
                        <div class="image-featured">
                            <?php echo get_the_post_thumbnail($article,"full"); ?>
                                <div class="content">
                                    <a href="<?php echo get_permalink($article); ?>">
                                    <span><?php the_field('mk_image_over_text',$article); ?></span>
                                    </a>
                                    <div class="link-button-container">
                                        <a class="button" href="<?php echo get_permalink($article); ?>">
                                          <?php if(ICL_LANGUAGE_CODE == 'it'){  ?>
                                              SCOPRI DI PIÙ...
                                              <?php }else{ ?>
                                              READ MORE...
                                              <?php } ?>
                                        </a>
                                    </div>
                                </div>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
                </div>
    <?php } elseif($articoloprev) { ?>
        <section id="<?php echo esc_attr($id); ?>" class="articles-preview <?php echo esc_attr($className); ?>">
            <?php foreach( $articoloprev as $article ): ?>
            <article class="single-post getarticle alignwide onloop">
                <div class="image-featured">
                    <?php echo get_the_post_thumbnail($article,"full"); ?>
                        <div class="content">
                            <a href="<?php echo get_permalink($article); ?>">
                            <span><?php the_field('mk_image_over_text',$article); ?></span>
                            </a>
                            <div class="link-button-container">
                                <a class="button" href="<?php echo get_permalink($article); ?>">

                                  <?php if(ICL_LANGUAGE_CODE == 'it'){  ?>
                                      SCOPRI DI PIÙ...
                                      <?php }else{ ?>
                                      READ MORE...
                                      <?php } ?>

                                </a>
                            </div>
                        </div>
                </div>
            </article>
            <?php endforeach; ?>
        </section>
        <?php } ?>
<?php
} ?>
