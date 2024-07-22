<?php
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Dairlab_Tm
 * @since Dairlab Tm 1.0
 */
?>
<div class="footer-menu">
<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

	<aside class="widget-area">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .widget-area -->

<?php endif; ?>
<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>

<aside class="widget-area">
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</aside><!-- .widget-area -->

<?php endif; ?>

</div>