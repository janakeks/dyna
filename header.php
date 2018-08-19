<?php
/**
 * The header for the theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">.
 * It also calls the wp_head() that loads all head-information needed by WordPress or loaded plugins.
 *
 * @package Dyna
 * @subpackage Header
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

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'dyna' ); ?></a>
		<header id="masthead" class="site-header">
			<div class="site-branding">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				<?php
				endif; ?>
			</div><!-- .site-branding -->

			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'dyna' ); ?></button>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->
