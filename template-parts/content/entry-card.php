<?php
/**
 * Template part for displaying a post
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'card card-image card-image--square' ); ?>>
	
	<div class="card__image-wrapper">
		<?php get_template_part( 'template-parts/content/entry-card_thumbnail', get_post_type() ); ?>
	</div>

	<div class="card__info">
		<?php the_title( '<h2 class="entry-title card-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
		<p class="card__text"></p>
	<div>

	<div class="card__cta">
		<span class="card__cta-text">Find out more</span>
		<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" clip-rule="evenodd" d="M20.5148 9.57007C20.4735 9.51479 20.4283 9.4616 20.3792 9.4109L11.9613 0.720519C11.4419 0.184306 10.5998 0.184307 10.0804 0.720519C9.56101 1.25673 9.56101 2.12611 10.0804 2.66232L16.8079 9.60761H1.48942C0.731382 9.60761 0.116873 10.2221 0.116873 10.9802C0.116873 11.7382 0.731384 12.3527 1.48942 12.3527H16.8647L10.0803 19.3568C9.56087 19.893 9.56087 20.7624 10.0803 21.2986C10.5997 21.8348 11.4418 21.8348 11.9612 21.2986L20.7507 12.2244C21.3956 11.5587 21.3956 10.4794 20.7507 9.81363L20.5148 9.57007Z" />
		</svg>
	</div> 
</article><!-- #post-<?php the_ID(); ?> -->
