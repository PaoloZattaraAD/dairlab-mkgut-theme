<?php 
// Register a slider block.
add_action('acf/init', 'my_register_blocks');
function my_register_blocks() {

    // check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'mkslider',
            'title'             => __('Slider Combo'),
            'description'       => __('A custom slider block.'),
            'render_callback'   => 'mk_slider_callback',
			'category'          => 'formatting',
			'icon' 				=> 'images-alt2',
			'align'				=> 'full',
			'enqueue_assets' 	=> function(){
				wp_enqueue_script( 'block-slider', get_template_directory_uri() . '/blocks/slider.js', array('jquery'), '3.23', true );
			  },
        ));
    }
}

// Block for simply slideshow

function mk_slider_callback($block, $content = '', $is_preview = false, $post_id = 0 ){
    
    $id = 'slider-' . $block['id'];
    $className = '';
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
    <?php } 
    
    $slidetype = get_field('mk_slide_type');
    
    ?>
    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> mk_slider_element">
    <?php 
    //first slide 
    ?>
        <?php if( have_rows('mk_slider') ): ?>
            <div class="splide <?php echo $slidetype; ?>">
                <div class="splide__track">
                    <div class="splide__list">
                        <?php while( have_rows('mk_slider') ): the_row(); 
                        $image = get_sub_field('image');
                        ?>
                        <?php if($slidetype != "mk_slider_slideshow_image"){ ?>
                            <div class="splide__slide">
                                <div class="content">
                                    <?php if(get_sub_field('url_link')){ ?>
                                <a href="<?php echo esc_url(get_sub_field('url_link')); ?>" target="_blank" rel="nofollow"><?php echo wp_get_attachment_image( $image['id'], 'full'); ?></a>
                                    <?php }else{ ?>
                                    <?php echo wp_get_attachment_image( $image['id'], 'full'); ?>
                                <?php } ?>
                                    <h4><?php echo get_sub_field('testo'); ?></h4>
                                </div>
                            </div>
                            <?php } else { ?> 
                                <div class="splide__slide">
                                    <?php echo wp_get_attachment_image( $image['id'], 'full'); ?>
                                </div>
                            <?php } ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
</div>
<?php 
} ?>