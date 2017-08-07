<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="favicon.ico">
		<title>Home</title>
		<!-- CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link href="css/carousel.css" rel="stylesheet">
	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    <?php
	    	require_once ("includes/simplecms-config.php");
	    	require_once ("includes/connectDB.php");
	    ?>
	</head>
                                                                                             
	<body>
		<div id="signupModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal Content -->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span></button>
						<h4 class="modal-title">Create an Account.</h4>
					</div>
					<div class="modal-body">
						<div class="main-login main-center">
							<form class="form-horizontal" method="post" action="#">
								
								<div class="form-group">
									<label for="name" class="cols-sm-2 control-label">Username</label>
									<div class="cols-sm-10">
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
											<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="email" class="cols-sm-2 control-label">Your Email</label>
									<div class="cols-sm-10">
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
											<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="password" class="cols-sm-2 control-label">Password</label>
									<div class="cols-sm-10">
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
											<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
									<div class="cols-sm-10">
										<div class="input-group">
											<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
											<input type="password" class="form-control" name="confirm" id="confirm"  placeholder="Confirm your Password"/>
										</div>
									</div>
								</div>

								<div class="form-group ">
									<button type="button" class="btn btn-primary btn-medium btn-block login-button">Complete Registration</button>

								</div>
								<div class="login-register">
						            <a href="#" data-toggle="modal" data-target="#loginModal">Login <span class="glyphicon glyphicon-log-in"></span></a>
						         </div>
							</form>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Return</button>
					</div>
				</div>
			</div>
		</div>

		<div id="loginModal" class="modal fade" role="dialog">
			<div class="modal-dialog">
				<!-- Modal Content -->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span></button>
						<h4 class="modal-title">Login to account.</h4>
					</div>
					<div class="modal-body">
						<div class="main-login main-center">
							<form class="form-signin">
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
										<input type="email" class="form-control" name="email" id="email"  placeholder="Email address" required autofocus/>
									</div>
								</div>
								<div class="cols-sm-10">
									<div class="input-group">
										<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
										<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password" required/>
									</div>
								</div>
								<div class="checkbox">
									<label>
										<input type="checkbox" value="remember me"> Remember me
									</label>
								</div>
								<button class="btn btn-medium btn-primary btn-block" type="submit">Sign In</button>
							</form>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Return</button>
					</div>
				</div>
			</div>
		</div>

		<div class="navbar-wrapper">
			<div class="container">
			<!-- NAVBAR and LINKS -->
				<nav class="navbar navbar-inverse navbar-static-top">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
								<span class="sr-only">Toggle Navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="#">GM Screen</a>
						</div>
						<div id="navbar" class="navbar-collapse collapse">
							<ul class="nav navbar-nav navbar-left">
								<li class="active"><a href="home.html"><span class="glyphicon glyphicon-home"></span></a></li>
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Features <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li class="dropdown-header">Paizo's Pathfinder</li>
										<li><a href="xp.html">Experience Distribution</a></li>
										<li><a href="npc.html">Character Creation</a></li>
										<li><a href="items.html">Loot Generator</a></li>
										<li><a href="spells.html">Spell Sanctum</a></li>
										<li><a href="#">Campaign Guides</a></li>
										<li role="seperator" class="divider"></li>
										<li class="dropdown-header">D&D 3.5 TBA</li>
										<li role="seperator" class="divider"></li>
										<li class="dropdown-header">Classic World of Darkness</li>
										<li role="seperator" class="divider"></li>
										<li class="dropdown-header">Star Wars - Saga Edition</li>
									</ul>								
								<li><a href="#">Community</a></li>
								<li><a href="about.html">About</a><li>
			      			</ul>
			      			<ul class="nav navbar-nav navbar-right">
			      				<li><a href="#" data-toggle="modal" data-target="#signupModal">Sign Up <span class="glyphicon glyphicon-user"></span></a></li>
			      				<li><a href="#" data-toggle="modal" data-target="#loginModal">Login <span class="glyphicon glyphicon-log-in"></span></a></li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>

		<!-- CAROUSEL 
		<div id="myCarousel" class="carousel slide container" data-ride="carousel" style="overflow:hidden">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
				<li data-target="#myCarousel" data-slide-to="4"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="img/carousel/01.jpg" alt="Empyrea">
				</div>

				<div class="item">
					<img src="img/carousel/02.jpg" alt="Empyrea2">
				</div>

				<div class="item">
					<img src="img/carousel/03.jpg" alt="Empyrea3">
				</div>

				<div class="item">
					<img src="img/carousel/04.jpg" alt="Empyrea4">
				</div>

				<div class="item">
					<img src="img/carousel/05.jpg" alt="Empyrea5">
				</div>
			</div>

			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		-->


		<!-- JUMBOTRON -->
		<div class="container">
			<div class="jumbotron">
				<h1 align="center">Advance GM Screen</h1>
				<hr class="m-y-2">
				<p>Welcome. If you're tabletop RPG player, GM, or a fellow enthusiast then here are the tools to make your game easier.</p>
				<p>The GM screen is in early development, but support for several game formats and systems is in the works.</p>
					<a class="btn btn-primary" href="#" role="button" data-toggle="modal" data-target="#signupModal">Sign Up</a>
					<a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#Modal">Login</a>
			</div>
		</div>

		<footer>
			<br><br><br>
			<div id="footer" class="container">
				<p class="pull-right"><a href="#">Back to top</a></p>
				<p>&copy; 2016 GM Screen, LLC &middot;</p>
			</div>
		</footer>

		<!-- Page Scripts, Post-LOAD -->
	  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.js"></script>
	</body>
</html>