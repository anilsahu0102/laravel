<html lang="en">
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
			@section('title')
			Admin Panel
			@show
		</title>
		<meta name="keywords" content="your, awesome, keywords, here" />
		<meta name="author" content="Jon Doe" />
		<meta name="description" content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei." />
		<meta http-equiv="cache-control" content="max-age=0" />
		<meta http-equiv="cache-control" content="no-cache" />
		<meta http-equiv="cache-control" content="no-store" />
		<meta http-equiv="cache-control" content="must-revalidate" />
		<meta http-equiv="expires" content="0" />
		<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
		<meta http-equiv="pragma" content="no-cache" />
		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</head>

	<body class="bg-white">
		<!-- Container -->
		<div class="container">
			<div class="body-container">
				<!-- Navbar -->
				<div class="navbar hidden-xs white-bg">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="container-fluid header-bg">
						<div class="row user-row" id="row">
							<div class="pull-left">
								<h1 class="h1-title">Laravel 4</h1>
							</div>
						</div>
						<div class="row">
							<div class="navbar navbar-inverse">
								<div class="collapse navbar-collapse navbar-collapse-desktop navbar-ex2-collapse" id="collaspe">
									<ul class="nav navbar-nav">
										<li class="dropdown">
											<a href="#" class="dropdown-toggle next-slide">
												HOME
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>	
				</div>
				<!-- ./ navbar -->

				<!-- Header -->
				<div class="sub-container">
					<!-- Content -->
					@yield('content')
					<!--/content -->
				</div>
			</div>
		
			<!-- Footer -->
			<footer id="footer" class="hidden-print">
				<div class="container-fluid footer">
					<p class="text-left">Copyright &copy; {{date('Y')}} <!--FTI Groups - All Rights Reserved--></p>
				</div>
			</footer>
			
		</div>
		<!-- Container-->
	</body>
</html>