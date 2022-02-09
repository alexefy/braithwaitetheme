<?php
/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package braithwaiteProd
 */

namespace WP_Rig\WP_Rig;

get_header();

// Use grid layout if blog index is displayed.
if ( is_home() ) {
	braithwaiteProd()->print_styles( 'braithwaiteProd-content', 'braithwaiteProd-front-page' );
} else {
	braithwaiteProd()->print_styles( 'braithwaiteProd-content' );
}

?>
	<main id="primary" class="site-main this is a test">

		<div class="card-wrapper">
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
							<path fill-rule="evenodd" clip-rule="evenodd" d="M20.5148 9.57007C20.4735 9.51479 20.4283 9.4616 20.3792 9.4109L11.9613 0.720519C11.4419 0.184306 10.5998 0.184307 10.0804 0.720519C9.56101 1.25673 9.56101 2.12611 10.0804 2.66232L16.8079 9.60761H1.48942C0.731382 9.60761 0.116873 10.2221 0.116873 10.980undefined16873 11.7382 0.731384 12.3527 1.48942 12.3527H16.8647L10.0803 19.3568C9.56087 19.893 9.56087 20.7624 10.0803 21.2986C10.5997 21.8348 11.4418 21.8348 11.9612 21.2986L20.7507 12.2244C21.3956 11.5587 21.3956 10.4794 20.7507 9.81363L20.5148 9.57007Z" />
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
							<path fill-rule="evenodd" clip-rule="evenodd" d="M20.5148 9.57007C20.4735 9.51479 20.4283 9.4616 20.3792 9.4109L11.9613 0.720519C11.4419 0.184306 10.5998 0.184307 10.0804 0.720519C9.56101 1.25673 9.56101 2.12611 10.0804 2.66232L16.8079 9.60761H1.48942C0.731382 9.60761 0.116873 10.2221 0.116873 10.980undefined16873 11.7382 0.731384 12.3527 1.48942 12.3527H16.8647L10.0803 19.3568C9.56087 19.893 9.56087 20.7624 10.0803 21.2986C10.5997 21.8348 11.4418 21.8348 11.9612 21.2986L20.7507 12.2244C21.3956 11.5587 21.3956 10.4794 20.7507 9.81363L20.5148 9.57007Z" />
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
							<path fill-rule="evenodd" clip-rule="evenodd" d="M20.5148 9.57007C20.4735 9.51479 20.4283 9.4616 20.3792 9.4109L11.9613 0.720519C11.4419 0.184306 10.5998 0.184307 10.0804 0.720519C9.56101 1.25673 9.56101 2.12611 10.0804 2.66232L16.8079 9.60761H1.48942C0.731382 9.60761 0.116873 10.2221 0.116873 10.980undefined16873 11.7382 0.731384 12.3527 1.48942 12.3527H16.8647L10.0803 19.3568C9.56087 19.893 9.56087 20.7624 10.0803 21.2986C10.5997 21.8348 11.4418 21.8348 11.9612 21.2986L20.7507 12.2244C21.3956 11.5587 21.3956 10.4794 20.7507 9.81363L20.5148 9.57007Z" />
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
							<path fill-rule="evenodd" clip-rule="evenodd" d="M20.5148 9.57007C20.4735 9.51479 20.4283 9.4616 20.3792 9.4109L11.9613 0.720519C11.4419 0.184306 10.5998 0.184307 10.0804 0.720519C9.56101 1.25673 9.56101 2.12611 10.0804 2.66232L16.8079 9.60761H1.48942C0.731382 9.60761 0.116873 10.2221 0.116873 10.980undefined16873 11.7382 0.731384 12.3527 1.48942 12.3527H16.8647L10.0803 19.3568C9.56087 19.893 9.56087 20.7624 10.0803 21.2986C10.5997 21.8348 11.4418 21.8348 11.9612 21.2986L20.7507 12.2244C21.3956 11.5587 21.3956 10.4794 20.7507 9.81363L20.5148 9.57007Z" />
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
							<path fill-rule="evenodd" clip-rule="evenodd" d="M20.5148 9.57007C20.4735 9.51479 20.4283 9.4616 20.3792 9.4109L11.9613 0.720519C11.4419 0.184306 10.5998 0.184307 10.0804 0.720519C9.56101 1.25673 9.56101 2.12611 10.0804 2.66232L16.8079 9.60761H1.48942C0.731382 9.60761 0.116873 10.2221 0.116873 10.980undefined16873 11.7382 0.731384 12.3527 1.48942 12.3527H16.8647L10.0803 19.3568C9.56087 19.893 9.56087 20.7624 10.0803 21.2986C10.5997 21.8348 11.4418 21.8348 11.9612 21.2986L20.7507 12.2244C21.3956 11.5587 21.3956 10.4794 20.7507 9.81363L20.5148 9.57007Z" />
						</svg>
					</div> 
				</div>

			</div>
		</div>

		<div class="panel panel--petrol">
			<div class="inner">
				<div class="row">
					<div class="col col-4">
					
					</div>

					<div class="col col-8">
						<div class="glide">
							<div class="glide__track" data-glide-el="track">
								<ul class="glide__slides">
									<li class="glide__slide">
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
														<path fill-rule="evenodd" clip-rule="evenodd" d="M20.5148 9.57007C20.4735 9.51479 20.4283 9.4616 20.3792 9.4109L11.9613 0.720519C11.4419 0.184306 10.5998 0.184307 10.0804 0.720519C9.56101 1.25673 9.56101 2.12611 10.0804 2.66232L16.8079 9.60761H1.48942C0.731382 9.60761 0.116873 10.2221 0.116873 10.980undefined16873 11.7382 0.731384 12.3527 1.48942 12.3527H16.8647L10.0803 19.3568C9.56087 19.893 9.56087 20.7624 10.0803 21.2986C10.5997 21.8348 11.4418 21.8348 11.9612 21.2986L20.7507 12.2244C21.3956 11.5587 21.3956 10.4794 20.7507 9.81363L20.5148 9.57007Z" />
													</svg>
												</div> 
											</div>

										</div>
									</li>
									<li class="glide__slide">
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
														<path fill-rule="evenodd" clip-rule="evenodd" d="M20.5148 9.57007C20.4735 9.51479 20.4283 9.4616 20.3792 9.4109L11.9613 0.720519C11.4419 0.184306 10.5998 0.184307 10.0804 0.720519C9.56101 1.25673 9.56101 2.12611 10.0804 2.66232L16.8079 9.60761H1.48942C0.731382 9.60761 0.116873 10.2221 0.116873 10.980undefined16873 11.7382 0.731384 12.3527 1.48942 12.3527H16.8647L10.0803 19.3568C9.56087 19.893 9.56087 20.7624 10.0803 21.2986C10.5997 21.8348 11.4418 21.8348 11.9612 21.2986L20.7507 12.2244C21.3956 11.5587 21.3956 10.4794 20.7507 9.81363L20.5148 9.57007Z" />
													</svg>
												</div> 
											</div>

										</div>
									</li>
								</ul>
							</div>
							<div data-glide-el="controls">
								<button data-glide-dir="<">Start</button>
								<button data-glide-dir=">">End</button>
							</div>
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

	<script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>

	<script>
		new Glide('.glide').mount();
	</script>

<?php
get_footer();
