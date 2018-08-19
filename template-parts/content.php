<?php
/**
 * Content partial
 *
 * Template part for displaying posts.
 *
 * @package Dyna
 * @subpackage Partial
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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php
				dyna_posted_on();
				dyna_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php dyna_post_thumbnail(); ?>

		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'dyna' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dyna' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php dyna_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
