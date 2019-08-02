
<li id="section--2 post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if (has_post_thumbnail()): ?>
        <div class="img-wrap">
            <img class="lazyload" data-src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
        </div>
    <?php endif; ?>
    <div class="txt-wrap">
        <h3><?php the_title(); ?></h3>
        <p><?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></p>
        <div class="copy">
            <?php if($showExcerpt == "yes") { echo excerpt('30'); } ?>
            <a class="btn btn-blue" href="<?php the_permalink(); ?>">Read More</a>
        </div>
    </div>
</li>
