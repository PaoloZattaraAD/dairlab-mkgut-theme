<?php // intro full 
$images = get_field('intro_full_case_images');
$title = get_field('intro_full_case_title');
$subtitle = get_field('intro_full_case_subtitle');
$background = '';
if ( ! empty( $block['backgroundColor'] ) ) {
   $background = 'has-background has-'.$block['backgroundColor'].'-background-color';
}
$text_color = '';
if ( ! empty( $block['textColor'] ) ) {
    $text_color= 'has-'.$block['textColor'].'-text-color has-text-color';
}
?>

<div class="intro_full_case_history <?php echo esc_attr( $background . ' '.$text_color  ); ?>">
    <div class="meta_tags">
        <?php echo get_the_term_list( get_the_ID(), 'topic', '<ul class="topic"><li>', '</li><li>','</li></ul>' ); ?>
    </div>
    <div class="case_heading">
        <h1><?php echo $title; ?></h1>
        <h2><?php echo $subtitle; ?></h2>
    </div>
    <?php if($images){ ?>
        <div class="intro_slider splide">
            <div class="splide__track">
                <div class="splide__list">
                <?php foreach ($images as $image){ ?>
                    <div class="splide__slide"><img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['title']); ?>"></div>
                <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>
</div>