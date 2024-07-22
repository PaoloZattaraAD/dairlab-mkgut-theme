<?php 

remove_filter ('acf_the_content', 'wpautop');

// Register a slider block.
add_action('acf/init', 'mkgut_coverblock');
function mkgut_coverblock() {

    // check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(
            'name'              => 'mkcover',
            'title'             => __('Custom Cover Image'),
            'description'       => __('A custom Conver Image'),
            'render_callback'   => 'mk_cover_callback',
			'category'          => 'dairlab',
			'icon' 				=> 'images-alt2',
			'align'				=> 'full'
        ));
    }
}

// Block for simply slideshow

function mk_cover_callback($block, $content = '', $is_preview = false, $post_id = 0 ){
    
    $id = 'mkcover-' . $block['id'];

    // Create class attribute allowing for custom "className" and "align" values.
    
    $imagecover = get_field('mkgut_image');
    $imagecover_posizione = get_field('mkgut_posizione');
    $imagecover_stile = get_field('mkgut_stile');
    $imagecover_titolo = get_field('mkgut_titolo');
    $imagecover_sottotitolo = get_field('mkgut_sottotitolo');
    $imagecover_testo = get_field('mkgut_testo');
    $imagecover_buttons = get_field('mkgut_buttons');
    $imagecover_tipologia = get_field('mkgut_tipologia');
    ?>
    
    <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($imagecover_tipologia); ?> <?php echo esc_attr($imagecover_stile); ?> <?php echo esc_attr($imagecover_posizione); ?> din-margin">
    <?php 
    //first slide 
    ?>
        <?php if( $imagecover ): ?>
            <div class="image_block">
                <img src="<?php echo wp_get_attachment_url( $imagecover['id'], 'full'); ?>">
            </div>  
        <?php endif; ?>
                <?php if($imagecover_tipologia == "full-cover-image"){ ?>
                    <?php if($imagecover_buttons){ ?>
                    <div class="link-button-container">
                        <?php foreach($imagecover_buttons as $button){ ?>
                        <a class="button" href="<?php echo  $button['link_button']; ?>"><?php echo  $button['text_button']; ?></a>
                        <?php } ?>
                    </div>
                    <?php } ?>
                <?php }else{ ?>
				<?php if($imagecover_titolo || $imagecover_sottotitolo || $imagecover_testo || $imagecover_buttons){ ?>
                <div class="block-container">
                    <?php if($imagecover_titolo){ ?>
                        <h1><?php echo $imagecover_titolo;  ?></h1>
                    <?php } ?>
                    <?php if($imagecover_titolo){ ?>
                        <h2><?php echo $imagecover_sottotitolo;  ?></h2>
                    <?php } ?>
                    <?php if($imagecover_testo){ ?>
                    <p><?php echo $imagecover_testo;  ?></p>
                    <?php } ?>
                    <?php if($imagecover_buttons){ ?>
                        <div class="link-button-container">
                            <?php foreach($imagecover_buttons as $button){ ?>
                                <a class="button" href="<?php echo  $button['link_button']; ?>"><?php echo  $button['text_button']; ?></a>
                            <?php } ?>
                        </div>
                    <?php } ?>
                </div>
				<?php } ?>
        <?php } ?>
    </div>
<?php 
} ?>