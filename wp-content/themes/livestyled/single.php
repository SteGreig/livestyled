<?php get_header(); ?>

<?php
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

            <p class="blog-hero__date"><?php the_time('M j, Y'); ?></p>

            <a class="banner__scroll" href="#section--2">
                <span></span>
            </a>

        </div>

	</section>

</article>


<article class="section section--copy" id="section--2">

    <section class="container container--900">
    
        <div class="section__copy section__copy--blog">
            <?php
            if( have_posts() ):
                while( have_posts() ): the_post();
                    the_content();
                endwhile;
            endif; ?>
        </div>

    </section>

</article>


<?php if (get_the_author_meta('description')): ?>
<article class="section section--author theme--alternative">
    <section>

        <div class="container container--900 flexbox flex-wrap clearfix">

            <div class="author__img">
                <?php echo get_avatar(get_the_author_meta('user_email'), '270');?>
            </div>

            <div class="author__bio">
                <p>Written by</p>
                <h3 class="author__name">
                    <?php esc_html(the_author_meta('display_name')); ?>
                    <?php
                    $author_id = get_the_author_meta('ID');
                    if(get_field('job_title','user_'.$author_id)): echo "<span class='author__job-title'>".get_field('job_title','user_'.$author_id)."</span>"; endif; ?>
                </h3>
                <p class="author__description"><?php esc_textarea(the_author_meta('description')); ?></p>
            </div>

        </div>

    </section>
</article>
<?php endif; ?>

<?php

include( 'templates/pb-request-demo-form.php' );

get_footer();