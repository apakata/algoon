<!DOCTYPE html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Algoon</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			
		<link rel="stylesheet" href="packages/bootstrap/css/bootstrap.min.css">
		
		<link rel="stylesheet" href="packages/bootstrap/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="styles/main.css">

		<script src="scripts/modernizr-2.6.2-respond-1.1.0.min.js"></script>
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
							<div class="col-md-4">
								<a href="#">
								<span class="glyphicon glyphicon-search logo"></span>
								</a>
							</div>
							<div class="col-md-8 logo-title">
								<a href="#">
								<span class="text">Website Name </span>
								</a>
							</div>
						</div>

						<!-- Search Box -->
						<div class="row search">
							<div class="col-md-12">
								<form>
									<input class="form-control" type="text" placeholder="Search"/>
								</form>
							</div>
						</div>

						<!-- Sosmed -->
						<div class="row text-center sosmed">
							<div class="col-xs-4">
								<a href="#">
									<span class="glyphicon glyphicon-adjust item"></span>
								</a>
							</div>
							<div class="col-xs-4">
								<a href="#">
								<span class="glyphicon glyphicon-pause item"></span>
								</a>
							</div>
							<div class="col-xs-4">
								<a href="#">
								<span class="glyphicon glyphicon-resize-full item"></span>
								</a>
							</div>
						</div>

						<!-- Menu -->
						<div class="row menu">
							<div class="col-md-12">
								<ul class="nav nav-pills nav-stacked multi-level">
									<li class="active"><a href="#">Home</a></li>
									<li><a href="#">Box Office</a></li>
									<li><a href="#">Most Popular</a></li>
									<li class="dropdown-submenu">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#">
										Categories
										</a>
										<ul class="dropdown-menu" role="menu">
											<li class="dropdown-submenu">
												<a class="dropdown-toggle" data-toggle="dropdown" href="#">
												Movies 
												</a>
												<ul class="dropdown-menu" role="menu">
													<li class="dropdown-submenu">
														<a href="#" class="dropdown-toggle">By Quality</a>
														<ul class="dropdown-menu" role="menu">
															<li>
																<a href="#">BrRip</a>
															</li>
															<li>
																<a href="#">BrRip</a>
															</li>
															<li>
																<a href="#">BrRip</a>
															</li>
															<li>
																<a href="#">BrRip</a>
															</li>
															<li>
																<a href="#">BrRip</a>
															</li>
															<li>
																<a href="#">BrRip</a>
															</li>
															<li>
																<a href="#">BrRip</a>
															</li>
														</ul>
													</li>
													<li><a href="#">By Genre</a></li>
												</ul>
											</li>
											<li class=""><a href="#">Games</a></li>
											<li class=""><a href="#">Anime</a></li>
											<li class=""><a href="#">Manga</a></li>
											
										</ul>
									</li>
								</ul>
							</div>
						</div>	

						<!-- Footer -->
						<div class="row footer">
							<div class="col-md-12 text-center">
								Site Footer
							</div>
						</div>

					</div>

					<div class="col-xs-2 trigger">
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
		
		<div class="container-fluid movies">
			<div class="row">
				<?php for ($i=0; $i < 18; $i++) { ?>
				<div class="col-xs-6 col-sm-3 col-md-2 col-lg-2 item">
					<a href="#">
						<img src="images/box.png" class="img-responsive">
					</a>
				</div>
				<?php }?>
			</div>
		</div>

		<div class="paging">
			<ul class="pagination">
				<li class="disabled"><a href="#">Previous</a></li>
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">Next</a></li>
			</ul>
		</div>


		<script src="scripts/jquery-1.11.1.min.js"></script>
		<script>window.jQuery || document.write('<script src="scripts/jquery-1.11.1.min.js"><\/script>')</script>

		<script src="packages/bootstrap/js/bootstrap.min.js"></script>

		<script src="scripts/plugins.js"></script>
		<script src="scripts/main.js"></script>
	</body>
</html>
