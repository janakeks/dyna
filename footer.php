<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package Dyna
 * @subpackage Footer
 * @since 0.0.1
 * @version 0.0.8
 * @author Automattic Themeshaper Team
 * @author Alf Drollinger - alf@dyna.press
 * @copyright 2018 Dyna - https://dyna.press
 * @license GNU GPL V2 - https://www.gnu.org/licenses/gpl
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

namespace Dyna;

?>

<footer id="colophon" class="site-footer">
	<div class="site-info">
        Copyright <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?> <span class="sep"> | </span>

		<?php _e('Created with', 'dyna'); ?>

        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'dyna' ) ); ?>">WordPress</a>

		<?php _e('and', 'dyna'); ?>

        <a href="<?php echo esc_url( __( 'https://dyna.press/', 'dyna' ) ); ?>">Dyna</a>

	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
