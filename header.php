<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo('name'); ?></title>
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Oswald|Raleway" rel="stylesheet">
<meta name="viewport" content="initial-scale=1">
<meta name="author" content="Knoppys.co.uk" >
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8">
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="expires" content="0">

<?php wp_enqueue_script('jquery'); ?>
<?php wp_head(); ?>
</head>
<body <?php echo body_class(); ?>>
<header class="home-naviagtion" style="z-index: 100;position:relative;">
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">
			    <div class="row">			    	
			    	<div class="col-xs-6 col-sm-12 logo">
			    		<a href="<?php echo get_site_url(); ?>" class="" href="#">
			    			<img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" title="The Llangollen Brewery" alt="The Llangollen Brewery Logo">
			    		</a>
			    		<div class="social">
			    		<p style="color:#fff;text-decoration:underline">Find Us On</p>
			    			<i class="fa fa-facebook"></i>
			    			<i class="fa fa-twitter"></i>
			    		</div>
			    	</div>
			    	<div class="col-xs-6 col-sm-12 main-navigation">
			    		<div class="navbar-header">
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					      <p>Menu</p>
					      </button>
					    </div>				    	 
		 				<?php
					        wp_nav_menu( array(
					            'menu'              => 'primary',
					            'theme_location'    => 'primary',
					            'depth'             => 2,
					            'container'         => 'div',
					            'container_class'   => 'collapse navbar-collapse',
					    		'container_id'      => 'bs-example-navbar-collapse-1',
					            'menu_class'        => 'nav navbar-nav',
					            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
					            'walker'            => new wp_bootstrap_navwalker())
					        );
					    ?>
			    	</div>
		    </div>
	  </div>
	</nav>
	
</header>


