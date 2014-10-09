<!DOCTYPE html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php echo get_option('blogname'); ?></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			
		<?php 
		/* Always have wp_head() just before the closing </head>
		* tag of your theme, or you will break many plugins, which
		* generally use this hook to add elements to <head> such
		* as styles, scripts, and meta tags.
		*/
		wp_head(); ?> 

	</head>
	<body>
		<!--[if lt IE 7]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<nav class="sidemenu">
			
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-10 content">
						<!-- Logo -->
						<div class="row header">
							<div class="col-md-3">
								<a href="<?php echo get_option('home'); ?>">
								<img src="<?php echo get_option('algoon_logo'); ?>" class="img-responsive">
								</a>
							</div>
							<div class="col-md-9 logo-title">
								<a href="<?php echo get_option('home'); ?>">
								<span class="text"><?php echo get_option('blogname'); ?></span>
								</a>
							</div>
						</div>

						<!-- Search Box -->
						<div class="row search">
							<div class="col-md-12">
								<form>
									<input class="form-control" type="text" placeholder="Search Box">
								</form>
							</div>
						</div>

						<!-- Sosmed -->
						<div class="row text-center sosmed">
							<div class="col-xs-4">
								<a href="#">
									<img src="<?php echo get_option('algoon_sosmed_1'); ?>" class="img-responsive">
								</a>
							</div>
							<div class="col-xs-4">
								<a href="#">
									<img src="<?php echo get_option('algoon_sosmed_2'); ?>" class="img-responsive">
								</a>
							</div>
							<div class="col-xs-4">
								<a href="#">
									<img src="<?php echo get_option('algoon_sosmed_3'); ?>" class="img-responsive">
								</a>
							</div>
						</div>

						<!-- Menu -->
						<div class="row menu">
							<div class="col-md-12">
								<?php echo generate_navigation(); ?>
							</div>
						</div>	

						<!-- Footer -->
						<div class="row footer">
							<div class="col-md-12 text-center">
								<?php dynamic_sidebar( 'footer-sidebar' ); ?>
							</div>
						</div>

					</div>

					<div class="col-xs-2 pull-right trigger">
						<div class="sidemenu-header">
							<button type="button" class="sidemenu-toggle" id="menu">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
					</div>
				</div>
			</div>
		</nav>