<div class="block block--boxed-image flexbox justify-content-center align-items-center theme--<?php echo $sectionImageTheme; ?>">

    <div class="box-sub-container flexbox justify-content-center">

        <?php if($sectionVideo): ?>
            <video autoplay muted class="rwd"><source src="<?php echo $sectionVideo['url'];?>" type="video/mp4"></video>
        <?php elseif($sectionImage): ?>
            <img loading="lazy" class="lazyload img--boxed" data-src="<?php echo $sectionImage['url'];?>" alt="<?php echo $sectionHeader; ?> illustration">
        <?php endif; ?>

    </div>

</div>