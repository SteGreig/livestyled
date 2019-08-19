<?php
get_header();
get_template_part( 'templates/global', 'social-icons' );
get_template_part( 'templates/pb-copy-image' );
?>

<article class="section theme--secondary" id="section-2">
		
	<section class="container flexbox">

		<?php
		if( have_posts() ): ?>
			<ul class="post-list flexbox flex-wrap">
			<?php while( have_posts() ): the_post();
				get_template_part( 'templates/post-blog' );
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