
<article class="section section--our-clients section--<?php echo $section; ?> align--center theme--primary-tint" id="section-<?php echo $section; ?>">

	<h3 class="section__header section__header--our-clients">Our Clients</h3>

	<section class="our-clients__logos grid flexbox align-items-center drag-scroll hide-scrollbar scroll-touch anim-500" data-animate="fadeInUp-disabled">

		<?php while( has_sub_field('clients', 'option') ): ?>

			<?php $image = get_sub_field('logo'); ?>

			<div class="our-clients__logo-block block flexbox align-items-center">

				<img class="rwd lazyload our-clients__logo" data-src="<?php echo $image['url']; ?>" alt="<?php the_sub_field('name', 'option') ?>" />

				</div>

		<?php endwhile; ?>

	</section>

</article>