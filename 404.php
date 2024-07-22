<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Dairlab_Tm
 * @since Dairlab Tm 1.0
 */

get_header();
?>

	<div class="error-404 not-found alignwide" style="min-height:40vh;padding-top:20vh">
		<div class="page-content">
			<p><?php esc_html_e( 'Nothing here', 'dairlabtm' ); ?></p>
			<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'dairlabtm' ); ?></p>
		</div><!-- .page-content -->
	</div><!-- .error-404 -->

<?php
get_footer();
