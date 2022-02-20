<?php
/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package wp_rig
 */

 /* Template Name: Homepage Template */

namespace WP_Rig\WP_Rig;

get_header();

// Use grid layout if blog index is displayed.
if ( is_home() ) {
	wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-front-page' );
} else {
	wp_rig()->print_styles( 'wp-rig-content' );
}

?>
	<main id="primary" class="site-main this is a test">

		<?php
            $file = get_field('cover_video');
		    $imagePoster = get_field('image_poster');
			$coverMediaText = get_field('cover_video_text_overlay');
		?>

		<!-- hero -->
		<?php if( !empty($file) ): ?>
			<div class="hero" style="background-image: url(<?php echo $imagePoster['url']; ?>)">
				<!--<div class="video-bg" data-yt-id="<?php echo $file; ?>">
                    <div id="player"></div>
				</div>-->

				<?php if($coverMediaText) : ?>
					<div class="inner">
						<div class="row">
							<div class="col col-8 reset-margin-top reset-margin-bottom">
								<div class='hero__text'><?php echo $coverMediaText; ?></div>
							</div>
						</div>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<!-- //hero -->

		<div class="panel panel--brown">
			<div class="inner">
				<div class="row">
					<div class="col col-8 col--center reset-margin-top reset-margin-bottom">
						<div class="promo-block">
							<div class="promo-block__image">
								<svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
									<path d="M20.9027 8.33832L22.821 11.3969L25 7.50098L20.2918 0H11.9241L0 15L6.14591 14.9395L11.393 8.33832H20.9027Z" fill="white"/>
									<path d="M0 24L11.9241 9H20.2918L25 16.5L20.9202 23.7931L0 24Z" fill="white"/>
								</svg>
							</div>
							<div class="promo-block__text"><?php the_content(); ?></div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="panel">
			<div class="inner inner--reset-max-width reset-padding">
				<div class="row">
					<div class="col col-6 col-dir-col reset-margin ">
						<div class="feature-text-split">
							<h1>Braithwaite</h1>
							<p>Braithwaite Group T/A Braithwaite Fit Out Limited is a multidisciplinary main contractor that specialises in the delivery of new build construction projects and interior fit out projects on a National Scale.</p>
						</div>
					</div>
					<div class="col col-6 reset-margin feature-image-split" style="background-image: url(<?php echo $imagePoster['url']; ?>)"></div>
				</div>
			</div>
		</div>

		<!--<div class="card-wrapper">
			<div class="card card-image card-image--square">
				<div class="card__image-wrapper">
					<img src="/wp-content/uploads/2021/12/CCS_6990-scaled.jpg" />
				</div>
				<div class="card__info">
					<h2 class="card__title">Test card title</h2>
					<p class="card__text">Braithwaite Group were the appointed Main contractors to deliver a Regional Distribution Centre for Farmfoods Ltd.</p>
					<div class="card__cta">
						<span class="card__cta-text">Find out more</span>
						<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M20.5148 9.57007C20.4735 9.51479 20.4283 9.4616 20.3792 9.4109L11.9613 0.720519C11.4419 0.184306 10.5998 0.184307 10.0804 0.720519C9.56101 1.25673 9.56101 2.12611 10.0804 2.66232L16.8079 9.60761H1.48942C0.731382 9.60761 0.116873 10.2221 0.116873 10.9802C0.116873 11.7382 0.731384 12.3527 1.48942 12.3527H16.8647L10.0803 19.3568C9.56087 19.893 9.56087 20.7624 10.0803 21.2986C10.5997 21.8348 11.4418 21.8348 11.9612 21.2986L20.7507 12.2244C21.3956 11.5587 21.3956 10.4794 20.7507 9.81363L20.5148 9.57007Z" />
						</svg>
					</div> 
				</div>

			</div>

			<div class="card card-image card-image--square">
				<div class="card__image-wrapper">
					<img src="/wp-content/uploads/2021/12/CCS_6990-scaled.jpg" />
				</div>
				<div class="card__info">
					<h2 class="card__title">Test card title</h2>
					<p class="card__text">Braithwaite Group were the appointed Main contractors to deliver a Regional Distribution Centre for Farmfoods Ltd.</p>
					<div class="card__cta">
						<span class="card__cta-text">Find out more</span>
						<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M20.5148 9.57007C20.4735 9.51479 20.4283 9.4616 20.3792 9.4109L11.9613 0.720519C11.4419 0.184306 10.5998 0.184307 10.0804 0.720519C9.56101 1.25673 9.56101 2.12611 10.0804 2.66232L16.8079 9.60761H1.48942C0.731382 9.60761 0.116873 10.2221 0.116873 10.9802C0.116873 11.7382 0.731384 12.3527 1.48942 12.3527H16.8647L10.0803 19.3568C9.56087 19.893 9.56087 20.7624 10.0803 21.2986C10.5997 21.8348 11.4418 21.8348 11.9612 21.2986L20.7507 12.2244C21.3956 11.5587 21.3956 10.4794 20.7507 9.81363L20.5148 9.57007Z" />
						</svg>
					</div> 
				</div>

			</div>

			<div class="card card-image card-image--square">
				<div class="card__image-wrapper">
					<img src="/wp-content/uploads/2021/12/CCS_6990-scaled.jpg" />
				</div>
				<div class="card__info">
					<h2 class="card__title">Test card title</h2>
					<p class="card__text">Braithwaite Group were the appointed Main contractors to deliver a Regional Distribution Centre for Farmfoods Ltd.</p>
					<div class="card__cta">
						<span class="card__cta-text">Find out more</span>
						<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M20.5148 9.57007C20.4735 9.51479 20.4283 9.4616 20.3792 9.4109L11.9613 0.720519C11.4419 0.184306 10.5998 0.184307 10.0804 0.720519C9.56101 1.25673 9.56101 2.12611 10.0804 2.66232L16.8079 9.60761H1.48942C0.731382 9.60761 0.116873 10.2221 0.116873 10.9802C0.116873 11.7382 0.731384 12.3527 1.48942 12.3527H16.8647L10.0803 19.3568C9.56087 19.893 9.56087 20.7624 10.0803 21.2986C10.5997 21.8348 11.4418 21.8348 11.9612 21.2986L20.7507 12.2244C21.3956 11.5587 21.3956 10.4794 20.7507 9.81363L20.5148 9.57007Z" />
						</svg>
					</div> 
				</div>

			</div>
		</div>

		<div class="card-wrapper">
			<div class="card card-image card-image--rectangle">
				<div class="card__image-wrapper">
					<img src="/wp-content/uploads/2021/12/CCS_6990-scaled.jpg" />
				</div>
				<div class="card__info">
					<h2 class="card__title">Test card title</h2>
					<p class="card__text">Braithwaite Group were the appointed Main contractors to deliver a Regional Distribution Centre for Farmfoods Ltd.</p>
					<div class="card__cta">
						<span class="card__cta-text">Find out more</span>
						<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M20.5148 9.57007C20.4735 9.51479 20.4283 9.4616 20.3792 9.4109L11.9613 0.720519C11.4419 0.184306 10.5998 0.184307 10.0804 0.720519C9.56101 1.25673 9.56101 2.12611 10.0804 2.66232L16.8079 9.60761H1.48942C0.731382 9.60761 0.116873 10.2221 0.116873 10.9802C0.116873 11.7382 0.731384 12.3527 1.48942 12.3527H16.8647L10.0803 19.3568C9.56087 19.893 9.56087 20.7624 10.0803 21.2986C10.5997 21.8348 11.4418 21.8348 11.9612 21.2986L20.7507 12.2244C21.3956 11.5587 21.3956 10.4794 20.7507 9.81363L20.5148 9.57007Z" />
						</svg>
					</div> 
				</div>

			</div>
			<div class="card card-image card-image--rectangle">
				<div class="card__image-wrapper">
					<img src="/wp-content/uploads/2021/12/CCS_6990-scaled.jpg" />
				</div>
				<div class="card__info">
					<h2 class="card__title">Test card title</h2>
					<p class="card__text">Braithwaite Group were the appointed Main contractors to deliver a Regional Distribution Centre for Farmfoods Ltd.</p>
					<div class="card__cta">
						<span class="card__cta-text">Find out more</span>
						<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" clip-rule="evenodd" d="M20.5148 9.57007C20.4735 9.51479 20.4283 9.4616 20.3792 9.4109L11.9613 0.720519C11.4419 0.184306 10.5998 0.184307 10.0804 0.720519C9.56101 1.25673 9.56101 2.12611 10.0804 2.66232L16.8079 9.60761H1.48942C0.731382 9.60761 0.116873 10.2221 0.116873 10.9802C0.116873 11.7382 0.731384 12.3527 1.48942 12.3527H16.8647L10.0803 19.3568C9.56087 19.893 9.56087 20.7624 10.0803 21.2986C10.5997 21.8348 11.4418 21.8348 11.9612 21.2986L20.7507 12.2244C21.3956 11.5587 21.3956 10.4794 20.7507 9.81363L20.5148 9.57007Z" />
						</svg>
					</div> 
				</div>

			</div>
		</div>-->

		<div class="panel panel--petrol">
			
				<div class="row">
					<div class="col col-4 col-dir-col">
						<h1>Sectors</h1>
						<p>Braithwaite Group T/A Braithwaite Fit Out Limited is a multidisciplinary main contractor that specialises in the delivery of new build construction projects and interior fit out projects on a National Scale.</p>
					</div>
					
					<div class="col col-8 col-glider reset-padding-right">
						<div class="glider-contain">
							<div class="glider">
								<div>
									<div class="card card-image card-image--square">
										<div class="card__image-wrapper">
											<img src="/wp-content/uploads/2021/12/CCS_6990-scaled.jpg" />
										</div>
										<div class="card__info">
											<h2 class="card__title">Test card title</h2>
											<p class="card__text">Braithwaite Group were the appointed Main contractors to deliver a Regional Distribution Centre for Farmfoods Ltd.</p>
											<div class="card__cta">
												<span class="card__cta-text">Find out more</span>
												<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M20.5148 9.57007C20.4735 9.51479 20.4283 9.4616 20.3792 9.4109L11.9613 0.720519C11.4419 0.184306 10.5998 0.184307 10.0804 0.720519C9.56101 1.25673 9.56101 2.12611 10.0804 2.66232L16.8079 9.60761H1.48942C0.731382 9.60761 0.116873 10.2221 0.116873 10.9802C0.116873 11.7382 0.731384 12.3527 1.48942 12.3527H16.8647L10.0803 19.3568C9.56087 19.893 9.56087 20.7624 10.0803 21.2986C10.5997 21.8348 11.4418 21.8348 11.9612 21.2986L20.7507 12.2244C21.3956 11.5587 21.3956 10.4794 20.7507 9.81363L20.5148 9.57007Z" />
												</svg>
											</div> 
										</div>

									</div>
								</div>

								<div>
									<div class="card card-image card-image--square">
										<div class="card__image-wrapper">
											<img src="/wp-content/uploads/2021/12/CCS_6990-scaled.jpg" />
										</div>
										<div class="card__info">
											<h2 class="card__title">Test card title</h2>
											<p class="card__text">Braithwaite Group were the appointed Main contractors to deliver a Regional Distribution Centre for Farmfoods Ltd.</p>
											<div class="card__cta">
												<span class="card__cta-text">Find out more</span>
												<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M20.5148 9.57007C20.4735 9.51479 20.4283 9.4616 20.3792 9.4109L11.9613 0.720519C11.4419 0.184306 10.5998 0.184307 10.0804 0.720519C9.56101 1.25673 9.56101 2.12611 10.0804 2.66232L16.8079 9.60761H1.48942C0.731382 9.60761 0.116873 10.2221 0.116873 10.9802C0.116873 11.7382 0.731384 12.3527 1.48942 12.3527H16.8647L10.0803 19.3568C9.56087 19.893 9.56087 20.7624 10.0803 21.2986C10.5997 21.8348 11.4418 21.8348 11.9612 21.2986L20.7507 12.2244C21.3956 11.5587 21.3956 10.4794 20.7507 9.81363L20.5148 9.57007Z" />
												</svg>
											</div> 
										</div>

									</div>
								</div>

								<div>
									<div class="card card-image card-image--square">
										<div class="card__image-wrapper">
											<img src="/wp-content/uploads/2021/12/CCS_6990-scaled.jpg" />
										</div>
										<div class="card__info">
											<h2 class="card__title">Test card title</h2>
											<p class="card__text">Braithwaite Group were the appointed Main contractors to deliver a Regional Distribution Centre for Farmfoods Ltd.</p>
											<div class="card__cta">
												<span class="card__cta-text">Find out more</span>
												<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M20.5148 9.57007C20.4735 9.51479 20.4283 9.4616 20.3792 9.4109L11.9613 0.720519C11.4419 0.184306 10.5998 0.184307 10.0804 0.720519C9.56101 1.25673 9.56101 2.12611 10.0804 2.66232L16.8079 9.60761H1.48942C0.731382 9.60761 0.116873 10.2221 0.116873 10.9802C0.116873 11.7382 0.731384 12.3527 1.48942 12.3527H16.8647L10.0803 19.3568C9.56087 19.893 9.56087 20.7624 10.0803 21.2986C10.5997 21.8348 11.4418 21.8348 11.9612 21.2986L20.7507 12.2244C21.3956 11.5587 21.3956 10.4794 20.7507 9.81363L20.5148 9.57007Z" />
												</svg>
											</div> 
										</div>

									</div>
								</div>

								<div>
									<div class="card card-image card-image--square">
										<div class="card__image-wrapper">
											<img src="/wp-content/uploads/2021/12/CCS_6990-scaled.jpg" />
										</div>
										<div class="card__info">
											<h2 class="card__title">Test card title</h2>
											<p class="card__text">Braithwaite Group were the appointed Main contractors to deliver a Regional Distribution Centre for Farmfoods Ltd.</p>
											<div class="card__cta">
												<span class="card__cta-text">Find out more</span>
												<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M20.5148 9.57007C20.4735 9.51479 20.4283 9.4616 20.3792 9.4109L11.9613 0.720519C11.4419 0.184306 10.5998 0.184307 10.0804 0.720519C9.56101 1.25673 9.56101 2.12611 10.0804 2.66232L16.8079 9.60761H1.48942C0.731382 9.60761 0.116873 10.2221 0.116873 10.9802C0.116873 11.7382 0.731384 12.3527 1.48942 12.3527H16.8647L10.0803 19.3568C9.56087 19.893 9.56087 20.7624 10.0803 21.2986C10.5997 21.8348 11.4418 21.8348 11.9612 21.2986L20.7507 12.2244C21.3956 11.5587 21.3956 10.4794 20.7507 9.81363L20.5148 9.57007Z" />
												</svg>
											</div> 
										</div>

									</div>
								</div>

								<div>
									<div class="card card-image card-image--square">
										<div class="card__image-wrapper">
											<img src="/wp-content/uploads/2021/12/CCS_6990-scaled.jpg" />
										</div>
										<div class="card__info">
											<h2 class="card__title">Test card title</h2>
											<p class="card__text">Braithwaite Group were the appointed Main contractors to deliver a Regional Distribution Centre for Farmfoods Ltd.</p>
											<div class="card__cta">
												<span class="card__cta-text">Find out more</span>
												<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" clip-rule="evenodd" d="M20.5148 9.57007C20.4735 9.51479 20.4283 9.4616 20.3792 9.4109L11.9613 0.720519C11.4419 0.184306 10.5998 0.184307 10.0804 0.720519C9.56101 1.25673 9.56101 2.12611 10.0804 2.66232L16.8079 9.60761H1.48942C0.731382 9.60761 0.116873 10.2221 0.116873 10.9802C0.116873 11.7382 0.731384 12.3527 1.48942 12.3527H16.8647L10.0803 19.3568C9.56087 19.893 9.56087 20.7624 10.0803 21.2986C10.5997 21.8348 11.4418 21.8348 11.9612 21.2986L20.7507 12.2244C21.3956 11.5587 21.3956 10.4794 20.7507 9.81363L20.5148 9.57007Z" />
												</svg>
											</div> 
										</div>

									</div>
								</div>
								

								
									

							</div>

							<div class="tiny-controls">
								<button aria-label="Previous" class="gprev">«</button>
  								<button aria-label="Next" class="gnext">»</button>
							</div>

						</div>
					</div>
				</div>
								
			
		</div>

		<?php

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content/entry', get_post_type() );
		}

		get_template_part( 'template-parts/content/pagination' );
		?>
	</main><!-- #primary -->

	<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>

	<script type="module">
		var slider = tns({
			container: '.glider',
			"items": 2,
			"loop": false,
			"swipeAngle": false,
			"speed": 400,
			"edgePadding": 150,
			gutter: 12,
			nav: false,
			controlsContainer: '.tiny-controls',
		});
	</script>

<?php
get_footer();
