<div class="block theme--<?php echo $sectionCopyTheme; ?> flexbox align-items-center">

    <div class="box-sub-container">

        <?php if( $sectionHeader ) : ?>
        <h1 class="section__header section__header--copy-image"><?php echo $sectionHeader; ?></h1>
        <?php endif; ?>

        <?php if( $sectionSubHeader ) : ?>
        <h2 class="section__sub-header section__sub-header--copy-image"><?php echo $sectionSubHeader; ?></h2>
        <?php endif; ?>

        <div class="section__copy">
            <?php if( $sectionCopy ) : echo $sectionCopy; endif; ?>

            <?php 
                if( $sectionCtaRepeater ) :
                    foreach( $sectionCtaRepeater as $cta ):
                        $ctaText = $cta['cib_cta_text'];
                        $ctaUrl = $cta['cib_cta_url'];
                        $ctaStyle = $cta['cib_cta_style'];
                        ?>
                    <a class="cta cta--<?php echo $sectionCtaSize;?> cta--<?php echo $ctaStyle; ?>" href="<?php echo $ctaUrl; ?>" <?php if($cta['cib_new_window']): ?> target="_blank" rel="noopener nofollow"<?php endif; ?>><?php echo $ctaText; ?></a>
                    <?php
                    endforeach;
                endif;
            ?>
        </div>
    
    </div>
</div>