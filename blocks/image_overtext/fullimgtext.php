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

<div class="full_img_blocks">
    <img class="cover" src="<?php echo esc_url(get_field('full_landing_image')); ?>" alt="">
    <img class="sizer" src="<?php echo esc_url(get_field('full_landing_image')); ?>" alt="">
    <div class="text_area">
        <div class="content <?php echo esc_attr($text_color); ?>">
            <h2><?php the_field('full_landing_title'); ?></h2>
            <h1><?php the_field('full_landing_subtitle'); ?></h1>
        </div>
    </div>
</div>