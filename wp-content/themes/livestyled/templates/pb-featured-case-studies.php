<article class="section section--fcs section--<?php echo $section; ?> align--center theme--secondary" id="section-<?php echo $section; ?>">
	
	<section class="container">

        <h2 class="section__header">Case Studies</h2>
        
            <section class="tabs fcs-tabs flexbox align-items-center">

			<?php // Tabs
			// ----------------------------------------- ?>
			<ul class="tabs-nav fcs-tabs__nav tabs-auto-rotate flexbox justify-content-center">
            <?php $n=0; while( has_sub_field('fcs_featured_case_studies') ): $n++; ?>
            
                <li class="fcs-tabs__nav-item">0<?php echo $n; ?></li>

			<?php endwhile; ?>
			</ul>


			<?php // Content Panels
			// ----------------------------------------- ?>
			<div class="fcs-tabs__panels tabs-auto-rotate w100">
			<?php while( has_sub_field('fcs_featured_case_studies') ): ?>
                
                <div class="tabs-panel fcs-tabs__panel">
                    <?php
                    $post_object = get_sub_field('fcs_case_study');
                    // override $post
                    $post = $post_object;
                    setup_postdata( $post ); 
                    ?>

                    <div class="fcs-tabs__img-wrap">
                        <img class="fcs-tabs__img" src="<?php echo get_field('phone_image')['url']; ?>" alt="<?php the_title(); ?> app in phone display">
                    </div>

                    <div class="fcs-tabs__text-wrap">

                        <h3 class="fcs-tabs__title"><?php the_title(); ?></h3>

                        <p class="fcs-tabs__excerpt"><?php the_excerpt(); ?></p>

                        <?php if(have_rows('key_stats')): ?>
                        <div class="fcs-tabs__stats">
                        <?php while(has_sub_field('key_stats')): ?>
                            <div class="fcs-tabs__stat">
                                <p class="fcs-tabs__stat-number"><?php the_sub_field('number'); ?></p>
                                <p class="fcs-tabs__stat-text"><?php the_sub_field('stat_text'); ?></p>
                            </div>
                        <?php endwhile; ?>
                        </div>
                        <?php endif; ?>

                        <a class="cta cta--md cta-red fcs-tabs__cta" href="<?php the_permalink(); ?>">View more</a>

                    </div>

                    <a class="cta cta--md cta-red fcs-tabs__cta" href="<?php the_permalink(); ?>">View more</a>

                    <?php wp_reset_postdata(); ?>
                </div>
            
			<?php endwhile; ?>
			</div>


		</section>

	</section>

</article>