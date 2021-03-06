<!DOCTYPE html> 
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="wrapper">

	<header id="header">
	
		<div id="header-inner">
			<div id="header-inner-inner">
				<div id="header-inner-inner-inner">
				
					<div id="header-top" class="container-inner">

						<?php if ( get_header_image() == '' ) : ?>
							<div class="group pad">
								<?php echo curver_site_title(); ?>
								<?php if ( display_header_text() == true ): ?>
									<p class="site-description"><?php bloginfo( 'description' ); ?></p>
								<?php endif; ?>
								
								<?php if ( get_theme_mod( 'header-social', 'on' ) == 'on' ): ?>
									<?php curver_social_links() ; ?>
								<?php endif; ?>
							</div>
						<?php endif; ?>
						
						<?php if ( get_header_image() ) : ?>
							<div class="site-header">
								<a href="<?php echo esc_url( home_url('/') ); ?>" rel="home">
									<img class="site-image" src="<?php header_image(); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
								</a>
							</div>
						<?php endif; ?>

					</div><!--/#header-top-->
		
				</div><!--/#header-inner-inner-inner-->

				<div id="header-middle" class="container-inner">
					
					<?php if ( has_nav_menu('mobile') ): ?>
						<nav class="nav-container group" id="nav-mobile">
							<div class="nav-toggle"><i class="fa fa-bars"></i></div>
							<div class="nav-text"><!-- put your mobile menu text here --></div>
							<div class="nav-wrap container"><?php wp_nav_menu(array('theme_location'=>'mobile','menu_class'=>'nav container-inner group','container'=>'','menu_id' => '','fallback_cb'=> false)); ?></div>				
							
							<?php if ( get_theme_mod( 'header-search', 'on' ) == 'on' ): ?>
								<div class="toggle-search"><i class="fa fa-search"></i></div>
								<div class="search-expand">
									<div class="search-expand-inner">
										<?php get_search_form(); ?>
									</div>
								</div>
							<?php endif; ?>
								
						</nav><!--/#nav-mobile-->
					<?php endif; ?>
				
					<?php if ( has_nav_menu('header') ): ?>
						<nav class="nav-container group" id="nav-header">
							<div class="nav-toggle"><i class="fa fa-bars"></i></div>
							<div class="nav-text"><!-- put your mobile menu text here --></div>
							<div class="nav-wrap container"><?php wp_nav_menu(array('theme_location'=>'header','menu_class'=>'nav container-inner group','container'=>'','menu_id' => '','fallback_cb'=> false)); ?></div>				
							
							<?php if ( get_theme_mod( 'header-search', 'on' ) == 'on' ): ?>
								<div class="toggle-search"><i class="fa fa-search"></i></div>
								<div class="search-expand">
									<div class="search-expand-inner">
										<?php get_search_form(); ?>
									</div>
								</div>
							<?php endif; ?>
							
						</nav><!--/#nav-header-->
					<?php endif; ?>
					
				</div><!--/#header-middle-->

			</div><!--/#header-inner-inner-->
		
			<div id="header-bottom" class="container-inner">
				<?php if ( get_theme_mod('profile-image') || get_theme_mod('profile-name') || get_theme_mod('profile-description') ): ?>
					<div id="profile" class="pad group">
						<div id="profile-inner">
							<?php if ( get_theme_mod('profile-image') ): ?>
								<div id="profile-image"><img src="<?php echo get_theme_mod('profile-image'); ?>" alt="" /></div>
							<?php endif; ?>
							<?php if ( get_theme_mod('profile-name') ): ?>
								<div id="profile-name"><?php echo get_theme_mod('profile-name'); ?></div>
							<?php endif; ?>
							<?php if ( get_theme_mod('profile-description') ): ?>
								<div id="profile-description"><?php echo get_theme_mod('profile-description'); ?></div>
							<?php endif; ?>
						</div>
					</div>
				<?php endif; ?>
			</div><!--/#header-bottom-->
		
		</div><!--/#header-inner-->
		
	</header><!--/#header-->

	<div class="container" id="page">
		<div class="container-inner">			
			<div class="main">
				<div class="main-inner group">
