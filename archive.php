<?php
/**
 * The archive template file
 *
 * The template for displaying archive pages.
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
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

namespace Dyna;

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
			?>
		</header><!-- .page-header -->

		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post();

			/*
				* Include the Post-Format-specific template for the content.
				* If you want to override this in a child theme, then include a file
				* called content-___.php (where ___ is the Post Format name) and that will be used instead.
				*/
			get_template_part( 'template-parts/content', get_post_format() );

		endwhile;

		the_posts_navigation();

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif; ?>

	</main>><!-- #primary -->

<?php
get_footer();
