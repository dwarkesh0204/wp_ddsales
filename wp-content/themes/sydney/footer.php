<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
			</div>
		</div>
	</div><!-- #content -->

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

    <a class="go-top"><i class="fa fa-angle-up"></i></a>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<a href="<?php echo esc_url( __( 'http://ddsales.in', 'ddsales' ) ); ?>"><?php printf( __( '© 2015 %s', 'ddsales' ), 'D. D. Sales' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Website developed by %2$s ', 'Dwarkesh' ), 'Dwarkesh Soni', '<a href="http://dwarkesh.joomla.com" rel="developer"><b>Dwarkesh Soni</b></a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
