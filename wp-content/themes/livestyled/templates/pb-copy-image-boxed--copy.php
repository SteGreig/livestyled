<div class="block theme--<?php echo $sectionCopyTheme; ?> flexbox justify-content-center align-items-center anim-500 anim-d-300 anim-ease-out" data-animate="slideIn<?php echo ucfirst($sectionAlignment); ?>">

    <div class="box-sub-container">

        <?php if( $sectionHeaderIcon ) : ?>
        <img class="section__header-icon lazyload anim-500 anim-d-1000" data-animate="fadeInUp" data-src="<?php echo $sectionHeaderIcon['url']; ?>" alt="<?php echo $sectionHeader; ?>">
        <?php endif; ?>

        <?php if( $sectionHeader ) : ?>
        <h1 class="section__header section__header--copy-image anim-500 anim-d-1200" data-animate="fadeInUp"><?php echo $sectionHeader; ?></h1>
        <?php endif; ?>

        <?php if( $sectionSubHeader ) : ?>
        <h2 class="section__sub-header section__sub-header--copy-image anim-500 anim-d-1200" data-animate="fadeInUp"><?php echo $sectionSubHeader; ?></h2>
        <?php endif; ?>

        <div class="section__copy anim-500 anim-d-1400" data-animate="fadeInUp">
            <?php if( $sectionCopy ) : echo $sectionCopy; endif; ?>

            <?php 
                if( $sectionCtaRepeater ) :
                    foreach( $sectionCtaRepeater as $cta ):
                        $ctaText = $cta['cib_cta_text'];
                        $ctaLink = $cta['cib_cta_link'];
                        $ctaStyle = $cta['cib_cta_style'];
                        ?>
                        <a class="cta cta--<?php echo $sectionCtaSize;?> cta--<?php echo $ctaStyle; ?>" href="<?php echo $ctaLink['url']; ?>" target="<?php echo esc_attr($ctaLink['target'] ? $ctaLink['target'] : '_self'); ?>"><?php echo $ctaLink['title']; ?></a>
                    <?php
                    endforeach;
                endif;
            ?>
        </div>
    
    </div>
</div>