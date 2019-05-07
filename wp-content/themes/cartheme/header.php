<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous" />
    <?php wp_head(); ?>
</head>

<body>
  <div class="wrap-site">
    <!-- header menu -->
    <header class="site-header">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-static-top">
        <a class="navbar-brand" href="<?php get_home_url(); ?>"><img src="<?php echo esc_url( get_template_directory_uri()); ?>/img/logo.png" alt="Logo" class="logo" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">



      <?php
						// Display Main Navigation.
						wp_nav_menu( array(
							'theme_location' => 'primary',
							'container' => false,
							'menu_class' => 'menu-item primary-menu nav navbar-nav mr-auto',
							'echo' => true,
							)
						);
					?>

          <div class="navbar-text ">
            <i class="fas fa-mobile-alt "></i>
            <?php dynamic_sidebar('header-widget'); ?>
          </div>
        </div>
      </nav>
    </header>
    <!-- content sites  services-->
    <div class="site-content">