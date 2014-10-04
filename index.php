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
					<div class="col-md-10 content">
						<!-- Logo -->
						<div class="row header">
							<div class="col-md-4">
								<span class="glyphicon glyphicon-search logo"></span>
							</div>
							<div class="col-md-8">
								<span class="logo-title">Website Name </span>
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
							<div class="col-md-4">
								<span class="glyphicon glyphicon-adjust item"></span>
							</div>
							<div class="col-md-4">
								<span class="glyphicon glyphicon-pause item"></span>
							</div>
							<div class="col-md-4">
								<span class="glyphicon glyphicon-resize-full item"></span>
							</div>
						</div>

						<!-- Menu -->
						<div class="row menu">
							<div class="col-md-12">
								<ul class="nav nav-pills nav-stacked">
									<li class="active"><a href="#">Home</a></li>
									<li><a href="#">Profile</a></li>
									<li><a href="#">Messages</a></li>
									<li class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#">
										Dropdown <span class="caret"></span>
										</a>
										<ul class="dropdown-menu" role="menu">
											<li class="active"><a href="#">Home</a></li>
											<li class="dropdown">
												<a class="dropdown-toggle" data-toggle="dropdown" href="#">
												Dropdown <span class="caret"></span>
												</a>
												<ul class="dropdown-menu" role="menu">
													<li class="active"><a href="#">Home</a></li>
													<li><a href="#">Profile</a></li>
													<li><a href="#">Messages</a></li>
												</ul>
											</li>
											<li><a href="#">Profile</a></li>
											<li><a href="#">Messages</a></li>
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

					<div class="col-md-2 trigger">
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
					<img src="images/box.png" class="img-responsive">
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
