<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'twentytwelve_credits' ); ?>
			
		
				<!--
<a href="http://lod-lam.net/summit/"><img height=30 src="/image/LODLAM.png"></a>
			<a href="http://www.oclc.org/us/en/default.htm"><img height=30 src="/image/oclc.png"></a>
			<a href="http://www.alise.org/"><img height=30  src="/image/alise.jpg"></a>
			<a href="http://www.pratt.edu/academics/information_and_library_sciences/"><img height=25 src="/image/pratt_logo.jpg"></a>
-->

	


			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Linked Jazz powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
