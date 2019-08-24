<div class="block block--2-col <?php if ($sectionVideo){echo "block--video"; }?> flexbox justify-content-center align-items-center anim-500 anim-d-200" data-animate="fadeInUp">

    <?php if($sectionVideo): ?>
        <video autoplay muted class="rwd"><source src="<?php echo $sectionVideo;?>" type="video/mp4"></video>
    <?php elseif($sectionImage): ?>
        <img loading="lazy" class="lazyload" data-src="<?php echo $sectionImage;?>" alt="<?php echo $sectionHeader; ?> illustration">
    <?php endif; ?>

</div>