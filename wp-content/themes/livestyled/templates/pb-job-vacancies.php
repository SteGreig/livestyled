<article class="section section--scrollable section--<?php echo $section; ?> align--center theme--secondary" id="section-<?php echo $section; ?>">

    <h3 class="section__header">Open Roles</h3>

    <section class="media-blocks-wrap media-blocks-wrap--scrollable tabs flexbox hide-scrollbar scroll-touch drag-scroll">

        <?php $n=0; while(have_rows('vacancies')): the_row(); $n++; ?>

        <div class="media-block align--left anim-500 anim-d-<?php echo $n; ?>00" data-animate="fadeInUp">

            <h3 class="media-block__title"><?php the_sub_field('job_title'); ?></h3>

            <?php if(get_sub_field('salary')): ?>
            <p class="media-block__meta"><?php the_sub_field('salary'); ?></p>
            <?php endif; ?>

            
            <?php if(get_sub_field('description')): ?>
            <div class="media-block__desc">
                <?php the_sub_field('description'); ?>
            </div>
            <?php endif; ?>

            <?php if(get_sub_field('job_spec')): ?>
            <a target="_blank" class="cta cta--md cta--pink" href="<?php echo get_sub_field('job_spec')['url'] ?>">Job Spec</a>
            <?php endif; ?>

        </div>

        <?php endwhile; ?>

	</section>

</article>