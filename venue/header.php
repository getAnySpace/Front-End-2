<?php
	include 'functions.php';
	
	$venue_id;
	
	if (isset($_GET['venue_id'])) {
		$venue_id = $_GET['venue_id'];
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">

		<title><?php getName(); ?> | AnySpace</title>
		<link rel="shortcut icon" href="../img/icon.png">

		<!-- Bootstrap core CSS -->
		<link href="../css/bootstrap.min.css" rel="stylesheet">

		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<link href="../css/ie10-viewport-bug-workaround.css" rel="stylesheet">

		<!-- FONTS -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel='stylesheet' href='../fonts/glyphicons/css/glyphicons.css'>
		<link rel='stylesheet' href='../fonts/social/css/social.css'>
		<script src='../fonts/glyphicons/scripts/modernizr.js'></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Custom styles for this template -->
		<link href="../css/carousel.css" rel="stylesheet">
		<link href="../css/master.css" rel="stylesheet">
		<link href="../css/customSelect.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
		<script src="../js/script.js"></script>
		<script src="../js/browsers.js"></script>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-83550714-1', 'auto');
		  ga('send', 'pageview');
		
		</script>
	</head>
	<!-- NAVBAR
	================================================== -->
	<body class="venue-page">
		<?php echo '<style> .venue-cover { background-image: url("' . getBackground() . '"); } </style>'; ?>
		<div class="navbar-wrapper">
			<div class="container">
				<nav class="navbar navbar-inverse navbar-static-top">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="../index.html"><img src = "../img/anyspace-door-logo.svg" alt="AnySpace Door Logo"/></a>
						</div>
						<div id="navbar" class="navbar-collapse collapse">
							<ul class="nav navbar-nav navbar-right">
								<li class="">
									<a href="#">Learn More</a>
								</li>
								<li>
									<a href="#">Contact</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
