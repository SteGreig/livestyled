<?php
/**
 * Stanard config
 */	
	$bannerHeight = get_sub_field( 'bfb_banner_height' );
	$bannerAlignment = get_sub_field( 'bfb_banner_alignment' );
/**
 * Image setup
 */
	if( get_sub_field( 'bfb_background_images' ) ):
		$bannerImages = get_sub_field( 'bfb_background_images' );
		if( $bannerImages['bfb_landscape'] ):
			$bannerImagesActive = true;
			$bannerLandscapeUrl = $bannerImages['bfb_landscape']['sizes']['image-max-16x9'];
			$bannerPortraitUrl = $bannerImages['bfb_portrait']['sizes']['image-max-9x16'];
		endif; 
	else:
		$bannerImagesActive = false;
	endif; 
/**
 * Copy
 */	
	$bannerHeader = get_sub_field( 'bfb_main_header' );
	$bannerCopy = get_sub_field( 'bfb_sub_copy' );
/**
 * CTAs
 */
	$bannerCtas = get_sub_field( 'bfb_ctas' );
	$bannerCtaSize = $bannerCtas['bfb_cta_size'];
	$bannerCtaRepeater = $bannerCtas['bta_ctas_repeater'];



// -----------------------------------------------
// For single Blog posts and single Case Studies
// -----------------------------------------------
if(is_single()) {
	$section = 1;
	$bannerHeight = 100;
	$bannerAlignment = center;

	$bannerImagesActive = true;
	$thumb_id = get_post_thumbnail_id();
	$bannerLandscapeUrl = wp_get_attachment_image_src($thumb_id, 'image-max-16x9', true)[0];
	$bannerPortraitUrl = wp_get_attachment_image_src($thumb_id, 'image-max-9x16', true)[0];

	$bannerHeader = get_the_title();
}
// -----------------------------------------------
?>


<?php if( $bannerImagesActive ): ?>
<style>
	.banner--<?php echo $section;?> {
		background: url( '<?php echo $bannerLandscapeUrl;?>' ) no-repeat center center;
	}
	
	@media screen and (orientation: portrait) {
		.banner--<?php echo $section;?> {
			background: url( '<?php echo $bannerPortraitUrl;?>' ) no-repeat center top;
		}
	}

	@media screen and (orientation: landscape) {
		.banner--<?php echo $section;?> {
			background: url( '<?php echo $bannerLandscapeUrl;?>' ) no-repeat center center;
		}
	}

	@media screen and (min-width: 768px) (orientation: portrait) {
		.banner--<?php echo $section;?> {
			background: url( '<?php echo $bannerPortraitUrl;?>' ) no-repeat center top;
		}
	}

	@media screen and (min-width: 769px) {
		.banner--<?php echo $section;?> {
			background: url( '<?php echo $bannerLandscapeUrl;?>' ) no-repeat center center;
		}
	}

	.banner--<?php echo $section;?> {
		background-size: cover;
	}
</style>
<?php endif; ?>

<article class="banner banner--<?php echo $bannerHeight; ?> banner--<?php echo $section; ?> align--<?php echo $bannerAlignment; ?>" id="section-<?php echo $section; ?>">
	
	<section class="overlay overlay--<?php echo $bannerAlignment; ?> <?php if(is_single() && !$thumb_id): echo "overlay--primary"; endif; ?>">

		<div class="<?php if(is_single()): echo "container--blog-hero"; endif; ?>"">

			<?php if( $bannerHeader ) : ?>
			<h1 class="section__header anim-750" data-animate="fadeInUp-disabled"><?php echo $bannerHeader; ?></h1>
			<?php endif; ?>

			<?php if(is_singular('post')): ?>
            <p class="blog-hero__date anim-1000 anim-d-300" data-animate="fadeInUp-disabled"><?php the_time('M j, Y'); ?></p>
            <?php endif; ?>

			<?php if( $bannerCopy ) : echo $bannerCopy;  endif; ?>

			<?php 
				if( $bannerCtaRepeater ) :
					foreach( $bannerCtaRepeater as $cta ):
						$ctaLink = $cta['bfb_cta_link'];
						?>
						<a class="cta cta--<?php echo $bannerCtaSize;?> cta--<?php echo $ctaStyle; ?>" href="<?php echo $ctaLink['url']; ?>" target="<?php echo esc_attr($ctaLink['target'] ? $ctaLink['target'] : '_self'); ?>"><?php echo $ctaLink['title']; ?></a>
					<?php
					endforeach;
				endif;
			?>

			<?php if( $bannerHeight == '100' && $section == 1 ): ?>
			<button class="scroll-arrow"><?php icon('angle-down'); ?></button>
			<?php endif; ?>

		</div>

	</section>

</article>

<?php $bannerImagesActive = false; ?>
