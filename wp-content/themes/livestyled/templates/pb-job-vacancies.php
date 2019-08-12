<article class="section section--vacancies section--<?php echo $section; ?> align--center theme--secondary" id="section-<?php echo $section; ?>">
	
	<section class="container">

		<h3 class="section__header">Open Roles</h3>

		<section class="vacancies-wrap tabs flexbox flex-wrap justify-content-center">

            <?php while(have_rows('vacancies')): the_row(); ?>

			<div class="vacancy align--left">

                <h3 class="vacancy__job-title"><?php the_sub_field('job_title'); ?></h3>

                <?php if(get_sub_field('salary')): ?>
                <p class="vacancy__salary"><?php the_sub_field('salary'); ?></p>
                <?php endif; ?>

                
                <?php if(get_sub_field('description')): ?>
                <div class="vacancy__desc">
                    <?php the_sub_field('description'); ?>
                </div>
                <?php endif; ?>

                <?php if(get_sub_field('job_spec')): ?>
                <a target="_blank" class="cta cta--md cta--red" href="<?php echo get_sub_field('job_spec')['url'] ?>">Job Spec</a>
                <?php endif; ?>

            </div>

            <?php endwhile; ?>


		</section>

	</section>

</article>