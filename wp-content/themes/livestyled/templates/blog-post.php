
<li class="blog-post block p0 flexbox">

    <a href="<?php the_permalink(); ?>" class="blog-post__img-wrap">
        <?php
        if (has_post_thumbnail()):
            $imgURL = get_the_post_thumbnail_url(get_the_ID(), 'large');
        else:
            $imgURL = get_stylesheet_directory_uri()."/assets/img/post-img-fallback.jpg";
        endif;
        ?>
        <img class="blog-post__img lazyload" data-src="<?php echo $imgURL; ?>" alt="<?php the_title(); ?>" />
    </a>

    <div class="blog-post__copy flexbox">
        <h3 class="blog-post__title">
            <a class="blog-post__title-link" href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h3>
        <p class="blog-post__date"><?php the_time('M j, Y'); ?></p>
        <p class="blog-post__desc">
            <?php echo excerpt('25'); ?>
        </p>
        <a class="cta cta--red cta--md blog-post__cta" href="<?php the_permalink(); ?>">Read more</a>
    </div>

</li>
