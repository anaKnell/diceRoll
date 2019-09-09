<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto|Staatliches&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'bodyCSS' ); ?>>

	<header class="site__header">

		<div class="header-right">
			<?php

			wp_nav_menu(
				array( 'theme_location' => 'header-menu',
					'container' => 'div',
					'container_class' => 'header_menu_class') ); 
					?>

				</div>
				
				<!-- ajout de ma nouvelle widget area -->
			
				<?php if ( is_active_sidebar( 'new-widget-area' ) ) : ?>
					<div id="header-widget-area" class="nwa-header-widget widget-area" role="complementary">
						<?php dynamic_sidebar( 'new-widget-area' ); ?>
					</div>
				<?php endif; ?>
				<!-- fin nouvelle widget area -->
			</header> 

			<?php wp_body_open(); ?>