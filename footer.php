<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dyna
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-info">
        Copyright <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> <span class="sep"> | </span>

		<?php _e('Created with', 'dyna'); ?>

        <a href="<?php echo esc_url( __( 'https://wordpress.org/', '_s' ) ); ?>">WordPress</a>

		<?php _e('and', 'dyna'); ?>

        <a href="<?php echo esc_url( __( 'https://dyna.press/', '_s' ) ); ?>">Dyna</a>

	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
