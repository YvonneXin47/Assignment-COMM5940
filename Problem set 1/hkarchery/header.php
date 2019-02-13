<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>HK Archery</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Hong Kong archery; archery;" name="keywords">
  <meta content="HK Archery is an archery website designed for the local archery amateurs and also for promoting the archery culture among the public." name="description">

  <!-- Favicons -->
  <link href="<?php bloginfo('template_url'); ?>/img/favicon.png" rel="icon">
  <link href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php bloginfo('template_url'); ?>/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php bloginfo('template_url'); ?>/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/lib/venobox/venobox.css" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php bloginfo('template_url'); ?>/css/style.css" rel="stylesheet">

  <!-- Leaflet CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.4/leaflet.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.4/leaflet.js"></script>
  <script src="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/leaflet.markercluster.js"></script>

</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="" title=""></a>
      </div>

    <nav class="navbar navbar-expand-md" id="nav-menu-container" role="navigation">
  	<div class="container">
	
		<?php
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'bs-example-navbar-collapse-1',
			'menu_class'        => 'nav navbar-nav',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?>

	</div>
</nav>
		<!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->