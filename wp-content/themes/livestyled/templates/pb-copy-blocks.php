<?php
/**
 * Stanard config
 */	
	$sectionAlignment = get_sub_field( 'cb_alignment' );
	$sectionTheme = get_sub_field( 'cb_theme' );
	$sectionMobLayout = get_sub_field( 'cb_mobile_layout' );
/**
 * Copy
 */	
	$sectionHeader = get_sub_field( 'cb_main_header' );
	$sectionHeaderCase = get_sub_field( 'cb_header_case' );
	$sectionSubHeader = get_sub_field( 'cb_sub_header' );
	$sectionCopy = get_sub_field( 'cb_copy' );
/**
 * Section Blocks
*/
	$sectionBlocks = get_sub_field( 'cb_blocks' );
	$count = count( $sectionBlocks );
	if( $count === 5 ):
		$grid = 5;
	elseif( $count === 4 || $count === 8 ):
		$grid = 4;
	elseif( $count === 3 || $count === 6 ):
		$grid = 3;
	else:
		$grid = 2;
	endif;
?>

<article class="section section--copy section--copy-blocks section--<?php echo $section; ?> theme--<?php echo $sectionTheme; ?> align--<?php echo $sectionAlignment; ?> <?php if( !$sectionHeader && $sectionAlignment == "full-wdith" ): echo "p0"; endif; ?> copy-blocks--mob-<?php echo $sectionMobLayout; ?>" id="section-<?php echo $section; ?>">
	
	<?php if( $sectionAlignment != "full-width" ) : ?>
	<section class="container">
	<?php endif; ?>
		
		<?php if( $sectionHeader ) : ?>
		<h1 class="section__header section__header--<?php echo $sectionHeaderCase; ?>"><?php echo $sectionHeader; ?></h1>
		<?php endif; ?>

		<?php if( $sectionSubHeader ) : ?>
		<h2 class="section__sub-header"><?php echo $sectionSubHeader; ?></h2>
		<?php endif; ?>

		<?php if( $sectionCopy ) :  echo $sectionCopy;  endif; ?>

		<section class="grid grid--<?php echo $grid; ?> grid--mob-<?php echo $sectionMobLayout; ?> <?php if($sectionMobLayout != "side-by-side"): echo "justify-content-center"; endif; ?> hide-scrollbar">
		<?php
			foreach( $sectionBlocks as $block ) :
				$blockAlignment = $block['cb_block_alignment'];
				$blockTheme = $block['cb_block_background'];
				$blockImageArray = $block['cb_block_image'];
				$blockImageUrl = $blockImageArray['sizes']['medium'];
				$blockHeader = $block['cb_block_header'];
				$blockCopy = $block['cb_block_content'];
				$blockCta = $block['cb_cta'];
				$blockCtaLink = $blockCta['cb_cta_link'];
				$blockCtaStyle = $blockCta['cb_cta_style'];
		?>
				<article class="block copy-block flexbox copy-block--mob-<?php echo $sectionMobLayout; ?> theme--<?php echo $blockTheme; ?> align--<?php echo $blockAlignment; ?> <?php if($blockTheme != "none" && $sectionAlignment != "full-width"): echo "copy-block--boxed block--margins no-hover"; endif; ?> <?php if($sectionAlignment == 'center'): echo "align-items-center"; elseif($sectionAlignment == 'full-width'): echo "copy-block--full align-items-center"; endif; ?> <?php if(!$blockCtaLink): echo "no-hover"; endif; ?>">

					<?php if($blockImageUrl): ?>
					<div class="copy-block__img-wrap flexbox align-items-center">
						<img class="rwd lazyload" data-src="<?php echo $blockImageUrl;?>" alt="">
					</div>
					<?php endif; ?>
						
					<?php if( $blockHeader ) : ?>
					<h3 class="copy-block__title"><?php echo $blockHeader; ?></h3>
					<?php endif; ?>

					<?php if( $blockCopy ): echo $blockCopy; endif; ?>
					
					<?php if($blockCtaLink): ?>
					<a class="cta cta--md cta--<?php echo $blockCtaStyle; ?>"  href="<?php echo $blockCtaLink['url']; ?>" target="<?php echo esc_attr($blockCtaLink['target'] ? $blockCtaLink['target'] : '_self'); ?>"><?php echo $blockCtaLink['title']; ?></a>
					<?php endif; ?>

				</article>

		<?php endforeach; ?>
		</section>

	<?php if( $sectionAlignment != "full-width" ) : ?>
	</section>
	<?php endif; ?>

</article>
