<?php
// ================================================================================
// Used for hero section on single Blog posts and single Case Studies
// ================================================================================

$thumb_id = get_post_thumbnail_id();

$bannerLandscapeUrl = wp_get_attachment_image_src($thumb_id, 'image-max-16x9', true)[0];
$bannerPortraitUrl = wp_get_attachment_image_src($thumb_id, 'image-max-9x16', true)[0];
?>

<style>
	.banner--1 {
		background: url( '<?php echo $bannerLandscapeUrl;?>' ) no-repeat center center;
	}
	
	@media screen and (orientation: portrait) {
		.banner--1 {
			background: url( '<?php echo $bannerPortraitUrl;?>' ) no-repeat center top;
		}
	}

	@media screen and (orientation: landscape) {
		.banner--1 {
			background: url( '<?php echo $bannerLandscapeUrl;?>' ) no-repeat center center;
		}
	}

	@media screen and (min-width: 768px) (orientation: portrait) {
		.banner--1 {
			background: url( '<?php echo $bannerPortraitUrl;?>' ) no-repeat center top;
		}
	}

	@media screen and (min-width: 769px) {
		.banner--1 {
			background: url( '<?php echo $bannerLandscapeUrl;?>' ) no-repeat center center;
		}
	}

	.banner--1 {
		background-size: cover;
	}
</style>

<article class="banner banner--100 banner--1 align--center section section--1" id="section-1">
	
	<section class="overlay overlay--center <?php if(!$thumb_id): echo "overlay--primary"; endif; ?>">

		<div class="container--blog-hero">

            <h1 class="section__header"><?php the_title(); ?></h1>

            <?php if(is_singular('post')): ?>
            <p class="blog-hero__date"><?php the_time('M j, Y'); ?></p>
            <?php endif; ?>

            <a class="banner__scroll" href="#section--2">
                <span></span>
            </a>

        </div>

	</section>

</article>