<div class="block block--2-col flexbox justify-content-center align-items-center">

    <?php if($sectionVideo): ?>
        <video autoplay muted class="rwd"><source src="<?php echo $sectionVideo['url'];?>" type="video/mp4"></video>
    <?php elseif($sectionImage): ?>
        <img loading="lazy" class="lazyload" data-src="<?php echo $sectionImage['url'];?>" alt="<?php echo $sectionHeader; ?> illustration">
    <?php endif; ?>

</div>