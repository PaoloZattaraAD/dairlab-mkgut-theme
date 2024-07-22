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
        var slider = $block.find(".mk_slider_slideshow");
        if(slider[0]){
            new Splide( slider[0],{
                type   : 'loop',
                autoHeight: true,
                arrows     : false,
                autoplay    : true,
                pauseOnHover: false,
                interval: 4000,
                easing:'ease',
                speed: 2000,
            }).mount();
        }
    }
    // Initialize each block on page load (front end).
    $(document).ready(function(){
        $('.mk_slider').each(function(){
            initializeBlock( $(this) );
        });
    });

    // Initialize dynamic block preview (editor).
    if( window.acf ) {
        window.acf.addAction( 'render_block_preview/type=mainslider', initializeBlock );
    }

})(jQuery);


