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
				<h1 class="page-title"><span>Our</span> Sectors</h1>
			</header>		
			<?php
			if ( have_posts() ) {

				echo '<div class="card-wrapper">';
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
		<?php get_template_part( 'template-parts/content/promo-block' ); ?>
		<div class="panel">
    		<div class="inner">
        		<div class="row">
            		<div class="col col-dir-col col--center reset-margin-top reset-margin-bottom">
						<h2 class="title__main"><span>Our</span> Services</h2>
						<div class="services">
							<div class="service service--build">
								<h3 class="service__title">BUILD CONSULTANCY</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							</div>
							<div class="service service--health">
								<h3 class="service__title">HEALTH & SAFETY</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							</div>
							<div class="service service--sustainable">
								<h3 class="service__title">SUSTAINABILITY PRACTICES</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							</div>
							<div class="service service--budget">
								<h3 class="service__title">BUDGET PLANNING</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							</div>
							<div class="service service--project">
								<h3 class="service__title">PROJECT MANAGEMENT</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							</div>
							<div class="service service--community">
								<h3 class="service__title">COMMUNITY BUILDING</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main><!-- #primary -->
<?php
get_footer();
