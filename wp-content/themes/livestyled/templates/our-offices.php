<article class="section section--<?php echo $section; ?> align--center theme--alternative" id="section-<?php echo $section; ?>">
	
	<section class="container">

        <h2 class="section__header">Our Offices</h2>
        
        <div class="grid grid--2 offices">

            <?php while(have_rows('off_offices')): the_row(); ?>

                <div class="block block--margins copy-block--mob-stacked office">
                    
                    <?php if(get_sub_field('off_google_map_embed_code')): ?>
                    <div class="office__map-wrap">
                        <?php echo str_replace(" src", " class='lazyload' data-src", get_sub_field('off_google_map_embed_code')); ?>
                    </div>
                    <?php endif; ?>

                    <?php if(get_sub_field('off_city')): ?>
                    <p class="office__city"><?php the_sub_field('off_city'); ?></p>
                    <?php endif; ?>

                    <?php if(get_sub_field('off_address')): ?>
                    <p class="office__address"><?php the_sub_field('off_address'); ?></p>
                    <?php endif; ?>

                </div>

            <?php endwhile; ?>

        </div>

	</section>

</article>

<?php $section++; ?>