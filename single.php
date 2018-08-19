<?php
/**
 * The single template file
 *
 * The template for displaying all single posts.
 *
 * @package Dyna
 * @subpackage Templates
 * @since 0.0.1
 * @version 0.0.8
 * @author Automattic Themeshaper Team
 * @author Alf Drollinger - alf@dyna.press
 * @copyright 2018 Dyna - https://dyna.press
 * @license GNU GPL V2 - https://www.gnu.org/licenses/gpl
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */

namespace Dyna;

get_header();
?>

	<main id="primary" class="site-main">

	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', get_post_type() );

		the_post_navigation( array(
			'prev_text' => '← %title',
			'next_text' => '%title →',
		) );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile; // End of the loop.
	?>

	</main><!-- #primary -->

<?php
get_footer();
