<?php 
// Register a slider block.
add_action('acf/init', 'mk_full_slider');
function mk_full_slider() {

    // check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'mainslider',
            'title'             => __('Full Slider'),
            'description'       => __('A custom slider block.'),
            'render_callback'   => 'mk_fullslider_callback',
			'category'          => 'formatting',
			'icon' 				=> 'images-alt2',
			'align'				=> 'full',
            'enqueue_assets' 	=> function(){
				wp_enqueue_script( 'block-fullslider', get_template_directory_uri() . '/blocks/fullslide.js', array('jquery'), '1.23.0', true );
			  },
        ));
    }
}

// Block for simply slideshow

function mk_fullslider_callback($block, $content = '', $is_preview = false, $post_id = 0 ){
    
    $id = 'slider-' . $block['id'];

        // Create class attribute allowing for custom "className" and "align" values.
        $className = '';
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
    <?php $slidefull = get_field('mk_fullslider'); ?>
    <div id="<?php echo esc_attr($id); ?>" class="mk-fullslider mk_slider <?php echo esc_attr($className); ?>">
        <div class="mk_slider_slideshow splide">
            <div class="splide__track">
                <div class="splide__list">
                <?php foreach($slidefull as $slide): 
                    $img_buttons = $slide['slide']['mkgut_buttons'];
                    
                    ?>
                    <div class="splide__slide <?php if($slide['slide']['customclass']){ echo $slide['slide']['customclass']; }; ?> ">
                        <div class="<?php echo esc_attr($slide['slide']['mkgut_tipologia']); ?> <?php echo esc_attr($slide['slide']['mkgut_stile']); ?> <?php echo esc_attr($slide['slide']['mkgut_posizione']); ?>">
                            <div class="image_block">
                                <img class="show-desk" src="<?php echo wp_get_attachment_url( $slide['slide']['mkgut_image']['id'], 'full'); ?>">
                                <img class="show-mob" src="<?php echo ($slide['slide']['mkgut_image_mobile'] ? wp_get_attachment_url( $slide['slide']['mkgut_image_mobile']['id'], 'full') : wp_get_attachment_url( $slide['slide']['mkgut_image']['id'], 'full')); ?>">
                            </div>
                            <div class="block-container">
                                <?php if($slide['slide']['mkgut_titolo']){ ?>
                                    <h1 class="show-desk"><?php echo $slide['slide']['mkgut_titolo'];  ?></h1>
                                <?php } ?>
                                <?php if($slide['slide']['mkgut_titolo'] || $slide['slide']['mkgut_titolo_mobile']){ ?>
                                    <h1 class="show-mob"><?php echo ($slide['slide']['mkgut_titolo_mobile'] ? $slide['slide']['mkgut_titolo_mobile'] : $slide['slide']['mkgut_titolo']);  ?></h1>
                                <?php } ?>
                                <?php if($slide['slide']['mkgut_sottotitolo']){ ?>
                                    <h2 class="show-desk"><?php echo $slide['slide']['mkgut_sottotitolo'];  ?></h2>
                                <?php } ?>
                                <?php if($slide['slide']['mkgut_sottotitolo'] || $slide['slide']['mkgut_sottotitolo_mobile']){ ?>
                                    <h2 class="show-mob"><?php echo ($slide['slide']['mkgut_sottotitolo_mobile'] ? $slide['slide']['mkgut_sottotitolo_mobile'] : $slide['slide']['mkgut_sottotitolo']);  ?></h2>
                                <?php } ?>
                                <?php if($slide['slide']['mkgut_testo']){ ?>
                                <p class="show-desk"><?php echo $slide['slide']['mkgut_testo'];  ?></p>
                                <?php } ?>
                                <?php if($slide['slide']['mkgut_testo'] || $slide['slide']['mkgut_testo_mobile']){ ?>
                                <p class="show-mob"><?php echo ($slide['slide']['mkgut_testo_mobile'] ? $slide['slide']['mkgut_testo_mobile'] : $slide['slide']['mkgut_testo']);  ?></p>
                                <?php } ?>
                                <?php if($img_buttons){ ?>
                                    <div class="link-button-container">
                                        <?php foreach($img_buttons as $button){ ?>
                                            <a class="button" href="<?php echo  $button['link_button']; ?>"><?php echo  $button['text_button']; ?></a>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
<?php 
} ?>