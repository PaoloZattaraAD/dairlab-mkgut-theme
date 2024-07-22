(function($){

    /**
     * initializeBlock
     *
     * Adds custom JavaScript to the block HTML.
     *
     * @date    15/4/19
     * @since   1.0.0
     *
     * @param   object $block The block jQuery element.
     * @param   object attributes The block attributes (only available when editing).
     * @return  void
     */
    var initializeBlock = function( $block ) {
        var slider = $block.find(".mk_slider_slideshow_image");
        var carousel = $block.find(".mk_slider_carousel_wide");
        if(slider[0]){
            new Splide( slider[0],{
                type: 'loop',
                //autoHeight: true,
                arrows:true,
                autoplay    : true,
                pauseOnHover: false,
                interval: 3000,
                easing:'ease',
                'arrowPath': 'M 10 37.332031 L 27.332031 20 L 10 2.667969 L 10 0 L 30 20 L 10 40 Z M 10 37.332031',
            }).mount();
        } else if(carousel[0]){
            new Splide( carousel[0],{
                type: 'loop',
                gap: 50,
                perPage : 3,
				perMove: 1,
                // autoHeight: true,
                pagination: false,
                autoplay    : true,
                pauseOnHover: false,
				easing:'ease',
                interval: 3000,
                'arrowPath': 'M 10 37.332031 L 27.332031 20 L 10 2.667969 L 10 0 L 30 20 L 10 40 Z M 10 37.332031',
                breakpoints: {
                    960: {
                        perPage: 2,
                    },
                    767: {
                        perPage: 1,
                    },
                }
                }).mount();
        } 
    }
    // Initialize each block on page load (front end).
    $(document).ready(function(){
        $('.mk_slider_element').each(function(){
            initializeBlock( $(this) );
        });
    });

    // Initialize dynamic block preview (editor).
    if( window.acf ) {
        window.acf.addAction( 'render_block_preview/type=mkslider', initializeBlock );
    }

})(jQuery);


