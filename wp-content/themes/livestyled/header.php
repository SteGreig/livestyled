<!DOCTYPE html>
<html lang="en" class="no-js" dir="ltr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="https://use.typekit.net/ocg4wmb.css">

	<style>
	.mob-nav,.section--gdpr{display:none;}
	</style>

	<?php wp_head(); ?>
</head>
<body>

	<a class="srt" href="#aria-main">Skip to main content</a>

	<?php
		if( !is_page(  array( 'privacy', 'privacy-policy', 'cookie-privacy' ) ) ) :
			get_template_part( 'templates/global-gdpr' );
		endif;
		//get_template_part( 'templates/global-header' );
	?>

	<header class="header flexbox align-items-center">
		<?php if(get_field('logo','option')): ?>
			<a class="site-logo" href="<?php echo get_site_url(); ?>">
				<img class="site-logo__img" src="<?php echo get_field('logo', 'option')['url']; ?>" alt="<?php echo get_bloginfo(); ?>">
			</a>
		<?php endif; ?>

		<nav class="desktop-nav">
			<?php
			// Primary menu for desktop
				wp_nav_menu([
					'menu' => 'Main Menu',
					'menu_class' => "main-menu",
					'container' => ''
				]);
			?>
		</nav>

		<a class="cta cta--ghost cta--red cta--sm header__contact-cta" href="<?php echo get_page_link(195); ?>">Contact Us</a>

		<button class="mob-nav-toggle">
			<?php icon('bars'); ?>
		</button>

		<nav class="mob-nav">
			<div class="scroll-container"><?php /* Main menu will be cloned into here to form the mobile nav */ ?></div>
		</nav>
	</header>

	<main class="global-main" id="aria-main">