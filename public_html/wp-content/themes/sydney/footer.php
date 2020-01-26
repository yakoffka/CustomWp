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

<?php do_action('sydney_before_footer'); ?>

<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
<?php get_sidebar('footer'); ?>
<?php endif; ?>

<a class="go-top"><i class="fa fa-angle-up"></i></a>

<footer id="colophon" class="site-footer" role="contentinfo">



	<!-- <div class="light-block">Светлая секция</div> -->
	<svg class="wave-divider" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
		viewBox="0 24 150 28" preserveAspectRatio="none">
		<defs>
			<path id="gentle-wave" d="M-160 44c30 0 
        58-18 88-18s
        58 18 88 18 
        58-18 88-18 
        58 18 88 18
        v44h-352z" />
		</defs>
		<g class="wave-parallax1">
			<use xlink:href="#gentle-wave" x="50" y="3" fill="#d87676" /><!-- BFE2FF -->
		</g>
		<g class="wave-parallax2">
			<use xlink:href="#gentle-wave" x="50" y="0" fill="#d65050" fill-opacity=".9" /><!-- 5e9cd1 -->
		</g>
		<g class="wave-parallax3">
			<use xlink:href="#gentle-wave" x="50" y="9" fill="#471b1b" fill-opacity=".9" /><!-- 73bbf5 -->
		</g>
		<g class="wave-parallax4">
			<use xlink:href="#gentle-wave" x="50" y="6" fill="#0c0707" fill-opacity=".9" /><!-- 337AB7 -->
		</g>
	</svg>
	<div class="dark-block">

		<div id="copyright">
			&copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> yakOffka
			<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
		</div>

	</div>
	<!-- <svg class="wave-divider dark-bg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
		viewBox="0 24 150 28" preserveAspectRatio="none">
		<g class="wave-parallax1">
			<use xlink:href="#gentle-wave" x="50" y="3" fill="#5e9cd1" />
		</g>
		<g class="wave-parallax2">
			<use xlink:href="#gentle-wave" x="50" y="0" fill="#73bbf5" />
		</g>
		<g class="wave-parallax3">
			<use xlink:href="#gentle-wave" x="50" y="9" fill="#BFE2FF" />
		</g>
		<g class="wave-parallax4">
			<use xlink:href="#gentle-wave" x="50" y="6" fill="#FFFFFF" />
		</g>
	</svg> -->
	<!-- <div class="light-block">Светлая секция</div> -->




	<?php /*
		<div class="site-info container">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'sydney' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'sydney' ), 'WordPress' ); ?></a>
	<span class="sep"> | </span>
	<?php printf( __( 'Theme: %2$s by %1$s.', 'sydney' ), 'aThemes', '<a href="https://athemes.com/theme/sydney" rel="nofollow">Sydney</a>' ); ?>
	</div><!-- .site-info -->
	*/ ?>
</footer><!-- #colophon -->

<?php do_action('sydney_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>