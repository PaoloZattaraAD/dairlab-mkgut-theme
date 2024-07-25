<?php
/* add new blocks */

add_action( 'init', 'register_acf_blocks' );
function register_acf_blocks() {
    register_block_type( get_theme_file_path('/blocks/case_history_intro'));
    register_block_type( get_theme_file_path('/blocks/meta_tags'));
    register_block_type( get_theme_file_path('/blocks/post_slider'));
    register_block_type( get_theme_file_path('/blocks/case_slider'));
    register_block_type( get_theme_file_path('/blocks/image_overtext'));
}

// load block css included into page

add_filter( 'should_load_separate_core_block_assets', '__return_true' );
