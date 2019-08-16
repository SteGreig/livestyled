<?php
/**
 * Stanard config
 */
	$sectionAlignment = get_sub_field( 'ci_section_alignment' );
	$sectionTheme = get_sub_field( 'ci_theme' );
/**
 * Image
 */
	$sectionImage = get_sub_field( 'ci_image' )['url'];
/**
 * Video
 */
	$sectionVideo = get_sub_field( 'ci_video' )['url'];
/**
 * Copy
 */	
	$sectionHeader = get_sub_field( 'ci_main_header' );
	$sectionSubHeader = get_sub_field( 'ci_sub_header' );
	$sectionCopy = get_sub_field( 'ci_copy' );
/**
 * CTAs
 */
	$sectionCtas = get_sub_field( 'ci_ctas' );
	$sectionCtaSize = $sectionCtas['ci_cta_size'];
	$sectionCtaRepeater = $sectionCtas['ci_ctas_repeater'];


// ------------------------------
// For main Blog page
// ------------------------------
if(is_home()) {
	$section = 1;
	$sectionAlignment = "right";
	$sectionTheme = "primary";
	
	$sectionImage = wp_get_attachment_url(1021);
	
	$sectionHeader = "Blog";
	$sectionCopy = "Our award-winning platform enables venues to become ‘smart’ by helping them recognise, understand and reward their customers digitally.";
}
// ------------------------------
?>

<article class="section section--copy section--copy-image section--<?php echo $section; ?> theme--<?php echo $sectionTheme; ?>" id="section-<?php echo $section; ?>">
		
	<section class="container flexbox">

		<div class="grid grid--2 flexbox flex-wrap align-items-center">
			<?php 
				if( $sectionAlignment === 'left' ):
					include( 'pb-copy-image--copy.php' );
					include( 'pb-copy-image--image.php' );
				else:
					include( 'pb-copy-image--image.php' );
					include( 'pb-copy-image--copy.php' );
				endif;
			?>
		</div>

		<?php if($section == 1): ?>
		<button class="scroll-arrow"><?php icon('angle-down'); ?></button>
		<?php endif; ?>
		
	</section>
	
</article>
