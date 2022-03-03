<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
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
		</div>
		<div class="panel--petrol">
			<div class="inner">
				<div class="card-wrapper">
					<?php
						if ( have_posts() ) {
							echo '<div class="archive-description"><div class="archive-description__content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div></div>';
							while ( have_posts() ) {
								the_post();

								get_template_part( 'template-parts/content/entry-card', get_post_type() );
							}
							echo '</div>';

							get_template_part( 'template-parts/content/pagination' );
						} else {
							get_template_part( 'template-parts/content/error' );
						}
					?>
			</div>
		</div>
		<div class="panel">
			<?php get_template_part( 'template-parts/content/promo-block' ); ?>
		</div>
	</main><!-- #primary -->
<?php
get_footer();
