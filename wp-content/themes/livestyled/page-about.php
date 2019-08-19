<?php
/*
Template Name: About
*/

get_header();
get_template_part( 'templates/global', 'social-icons' );

// Hero section via Page Builder
get_template_part( 'templates/global', 'sections' );


// Content Sections
$n=1; while(have_rows('content_sections')): the_row(); $n++; ?>

    <article class="section section--copy section--copy-only section--<?php echo $n; ?> align--header-left <?php if($n % 2 == 0){ echo "theme--secondary"; } else { echo "theme--alternative"; } ?>" id="section-<?php echo $n; ?>">

        <section class="container container--1150 grid grid--2">

            <div class="block block--2-col">
                <h1 class="section__header section__header--copy-only section__header--normal-case"><?php the_sub_field('cs_heading'); ?></h1>
                <img src="<?php echo get_sub_field('cs_image_1')['sizes']['large']; ?>" alt="">
            </div>

            <div class="block block--2-col section__copy">
                <?php the_sub_field('cs_content'); ?>
                <img src="<?php echo get_sub_field('cs_image_2')['sizes']['large']; ?>" alt="">
            </div>

        </section>

    </article>

<?php endwhile; ?>


<?php
include( 'templates/pb-request-demo-form.php' );

get_footer();