<?php 

/* block region */

// Support custom "anchor" values.
$background = '';
if ( ! empty( $block['backgroundColor'] ) ) {
   $background = 'has-'.$block['backgroundColor'].'-background-color has-background';
}
$text_color = '';
if ( ! empty( $block['textColor'] ) ) {
    $text_color= 'has-'.$block['textColor'].'-text-color has-text-color';
}
?>

<div class="meta_tags">
    <ul>
        <?php wp_list_categories( array(
            'title_li' => false,
            'orderby' => 'name',
            'include' => array( 3, 5, 9, 16 )
        ) ); ?> 
    </ul>
    <div class="post_type">
        <?php if(get_field('tipologia_news')){ ?>
            <?php echo get_field('tipologia_news'); ?>
        <?php }else{ ?>
        News
        <?php } ?>
    </div>
</div>