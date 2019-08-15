<?php
get_header();
get_template_part( 'templates/global', 'social-icons' );
?>

<article class="section section--copy section--copy-image section--1 theme--primary" id="section-1">
		
	<section class="container flexbox">

		<div class="grid grid--2 flexbox flex-wrap align-items-center">
			
			<div class="block block--2-col flexbox justify-content-center">
				<img loading="lazy" class="lazyload" data-src="<?php echo wp_get_attachment_url(1021); ?>" alt="illustration">
			</div>

			<div class="block block--20-0 block--2-col">
				<h1 class="section__header section__header--copy-image">Blog</h1>

				<div class="section__copy section__copy--copy-image">
					<p>Our award-winning platform enables venues to become ‘smart’ by helping them recognise, understand and reward their customers digitally.</p>
					<a class="cta cta--md cta--white" href="<?php echo get_page_link(195); ?>">Request a demo</a>
				</div>
			</div>

		</div>

		<button class="scroll-arrow"><?php icon('angle-down'); ?></button>
		
	</section>
	
</article>


<article class="section theme--secondary" id="section-2">
		
	<section class="container flexbox">

		<?php
		if( have_posts() ): ?>
			<ul class="post-list flexbox flex-wrap">
			<?php while( have_posts() ): the_post();
				get_template_part( 'templates/blog-post' );
			endwhile; ?>
			</ul>
		<?php endif; ?>

	</section>

	<section class="container flexbox justify-content-center">
		<?php if(function_exists('wp_paginate')) {
			wp_paginate();
		} ?>
	</section>

</article>


<?php
include( 'templates/pb-request-demo-form.php' );

get_footer();