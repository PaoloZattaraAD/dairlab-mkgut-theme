<?php 
/* blog sidebar */
?>
<aside id="secondary" class="widget-area" role="complementary" aria-label="<?php esc_attr_e( 'Blog Sidebar', 'twentyseventeen' ); ?>">
    <div class="filters-nav">
    <?php if(ICL_LANGUAGE_CODE == 'it'){  ?>
            Filtra per
            <?php }else{ ?>
            Filters
            <?php } ?>
    </div>
    <div class="grouped">
        <?php dynamic_sidebar( 'blog' ); ?>
    </div>
</aside><!-- #secondary -->