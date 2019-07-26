<div class="block">		
	<?php if( $sectionHeader ) : ?>
	<h1 class="section__header"><?php echo $sectionHeader; ?></h1>
	<?php endif; ?>

	<?php if( $sectionSubHeader ) : ?>
	<h2 class="section__sub-header"><?php echo $sectionSubHeader; ?></h2>
	<?php endif; ?>

	<div class="copy-form__description">
		<?php if( $sectionCopy ) : echo $sectionCopy; endif; ?>
	</div>

		<?php /*
		if( $sectionCtaRepeater ) :
			foreach( $sectionCtaRepeater as $cta ):
				$ctaText = $cta['cgf_cta_text'];
				$ctaUrl = $cta['cfg_cta_url'];
				if( $cta['cgf_new_window'] ):
				?>
			<a class="cta cta--<?php echo $sectionCtaSize;?>" href="<?php echo $ctaUrl; ?>" target="_blank" rel="noopener nofollow"><?php echo $ctaText; ?></a>
			<?php	else: ?>
			<a class="cta cta--<?php echo $sectionCtaSize;?>" href="<?php echo $ctaUrl; ?>"><?php echo $ctaText; ?></a>
			<?php endif;	
			endforeach;
		endif;
	*/?>
</div>