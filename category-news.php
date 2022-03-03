<?php
/**
 * The template for displaying category archives.
 *
 * When active, applies to all category archives.
 * To target a specific category, rename file to category-{slug/id}.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#category
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );

?>
	<main id="primary" class="site-main">
		<div class="inner">
			<header class="page-header">
				<h1 class="page-title"><span>Case</span> Studies</h1>
			</header>	
			<?php
			if ( have_posts() ) {

				echo '<div class="card-wrapper">';
				echo '<div class="archive-description"><div class="archive-description__content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div></div>';
				while ( have_posts() ) {
					the_post();

					get_template_part( 'template-parts/content/entry-card-news', get_post_type() );
				}

				get_template_part( 'template-parts/content/pagination' );
			} else {
				get_template_part( 'template-parts/content/error' );
			}
			?>
		</div>
		<?php get_template_part( 'template-parts/content/promo-block' ); ?>
	</main><!-- #primary -->
<?php
get_footer();
