<?php
	
	$sectionPartners = get_field( 'partners', 'option' );
	$count = count( $sectionPartners );
	if( $count === 4 || $count === 8 ):
		$grid = 4;
	elseif( $count === 3 || $count === 6 ):
		$grid = 3;
	else:
		$grid = 2;
	endif;
?>

<article class="section section--our-partners section--<?php echo $section; ?> align--center" id="section-<?php echo $section; ?>">
	
	<section class="container">

		<h3 class="section__header section__header--our-partners">Our Partners</h3>

		<section class="grid grid--<?php echo $grid;?> align-items-center">

			<?php while( has_sub_field('partners', 'option') ): ?>

				<?php $image = get_sub_field('logo'); ?>

				<div class="block">

					<img class="rwd lazyload grayscale our-partners__logo" data-src="<?php echo $image['url']; ?>" alt="<?php the_sub_field('name', 'option') ?>" />

				 </div>

			<?php endwhile; ?>

		</section>

	</section>

</article>