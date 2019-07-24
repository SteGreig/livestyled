<div class="block block--20-0 block--2-col">		
	<?php if( $sectionHeader ) : ?>
	<h1 class="section__header section__header--copy-image"><?php echo $sectionHeader; ?></h1>
	<?php endif; ?>

	<?php if( $sectionSubHeader ) : ?>
	<h2 class="section__sub-header section__sub-header--copy-image"><?php echo $sectionSubHeader; ?></h2>
	<?php endif; ?>

	<div class="section__copy section__copy--copy-image">
		<?php if( $sectionCopy ) : echo $sectionCopy; endif; ?>

		<?php 
			if( $sectionCtaRepeater ) :
				foreach( $sectionCtaRepeater as $cta ):
					$ctaText = $cta['ci_cta_text'];
					$ctaUrl = $cta['ci_cta_url'];
					$ctaStyle = $cta['ci_cta_style'];
					?>
				<a class="cta cta--<?php echo $sectionCtaSize;?> cta--<?php echo $ctaStyle; ?>" href="<?php echo $ctaUrl; ?>" <?php if($cta['ci_new_window']): ?> target="_blank" rel="noopener nofollow"<?php endif; ?>><?php echo $ctaText; ?></a>
				<?php
				endforeach;
			endif;
		?>
	</div>
</div>