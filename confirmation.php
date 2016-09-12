<?php
	require 'lib/Stripe.php';
	
	if ($_POST) {
		Stripe::setApiKey("sk_test_n4nWwrFvbqG4nYo8RXfZgWXy");
		$error = '';
		$success = '';
		try {
			if (empty($_POST['zip'])) {
				throw new Exception("Fill out all required fields.");
			}
			if (!isset($_POST['stripeToken'])) {
				throw new Exception("The Stripe Token was not generated correctly");
			}
			Stripe_Charge::create(array("amount" => 30000,
										"currency" => "usd",
										"source" => $_POST['stripeToken'],
										"description" => "test"));
			$success = '<script>console.log("Your payment was successful");</script>';
			echo $success;
		}
		catch (Exception $e) {
			$error = '<script>console.log("Error: '.$e->getMessage().'")</script>';
			echo $error;
		}
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

		<title>Confirmation | AnySpace</title>
		<link rel="shortcut icon" href="img/icon.png">

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

		<!-- FONTS -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<link rel='stylesheet' href='fonts/glyphicons/css/glyphicons.css'>
		<link rel='stylesheet' href='fonts/social/css/social.css'>
		<script src='fonts/glyphicons/scripts/modernizr.js'></script>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

		<!-- Custom styles for this template -->
		<link href="css/carousel.css" rel="stylesheet">
		<link href="css/master.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
		<script src="js/script.js"></script>
		<script src="js/browsers.js"></script>
		<link href="css/customSelect.css" rel="stylesheet">

		<!-- PLUGINS -->
		<link rel="stylesheet" type="text/css" href="plugins/datetimepicker-master/jquery.datetimepicker.css"/ >
		<script src="plugins/datetimepicker-master/build/jquery.datetimepicker.full.min.js"></script>
		
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
	<body class="payment">
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
							<a class="navbar-brand" href="#"><img src = "img/anyspace-door-logo.svg" alt="AnySpace Door Logo"/></a>
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
			<div class="container content container-fluid">
					<div class="row-fluid">
						<div class="col-md-12">
							<div class="col-md-6 col-md-offset-3 venue-detail">
								<div class="venue-block venue-description venue-confirmation">
                                    <p class="print-invoice"><a  href="" onclick="window.print();">PRINT INVOICE</a></p>
									<h1>THANK YOU FOR YOUR PAYMENT.</h1>
                                    <p>We received your payment for your event at PUZZLE'S BAR. You will receive an email confirmation event within 24 hours. Lorem ipsum Lorem ipsum.</p>
								</div>
                                <div class="col-md-12 confirmation-details">
                                  <div class="col-md-6">
                                    <p style="font-weight: bold;">Billed To</p>
                                    <p>John Smith</p>
                                    <p>123 Anystreet Avenue</p>
                                    <p>Town, State ZIP CODE</p>
                                  </div>
                                  <div class="col-md-6">
                                    <p style="font-weight: bold;">Order Details</p>
                                    <p>Puzzle's Bar</p>
                                    <p>4:00pm-2:00am</p>
                                    <p>Guests: 45-55</p>
                                    <p>Food: Tier 420</p>
                                    <p>Drink: None</p>
                                    <p style="font-weight: bold;">Payment: $300.00</p>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <form id="confirmation">
                                    <div class="col-md-4">
                                      <input type="submit" value="Modify Request">
                                    </div> 
                                    <div class="col-md-4">
                                      <input type="submit" value="Cancel Request">
                                    </div>
                                    <div class="col-md-4">
                                      <input type="submit" value="Contact Host">
                                    </div> 
                                  </form>
                                </div>
							</div>
				<footer class="landing-footer">
					<ul>
						<li>
							<a href="#"><span class="social white facebook"></span></a>
						</li>
						<li>
							<a href="#"><span class="social white twitter"></span></a>
						</li>
						<li>
							<a href="#"><span class="social white instagram"></span></a>
						</li>
						<li>
							<a href="#"><span class="social white flickr"></span></a>
						</li>
					</ul>
					<div class="footer-text">
						<hr>
						<p>
							<span class="pull-left">&copy; 2016 AnySpace Inc.</span><span class="pull-right"><a href="#">Learn More</a> <a href="#">Share Your Space</a></span>
						</p>
					</div>
				</footer>

				<!-- Bootstrap core JavaScript
				================================================== -->
				<!-- Placed at the end of the document so the pages load faster -->
				<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
				<script>
					window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
				</script>
				<script src="/dist/js/bootstrap.min.js"></script>
				<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
				<script src="js/ie10-viewport-bug-workaround.js"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/locale/af.js"></script>
				<script src="js/customSelect.js"></script>
				<script>
					jQuery('.datetimepicker').datetimepicker({
						minDate : '0',
						format : 'm/d/y H:00 a', //can change to "h:m" later, but will need add script to handle               making it default to on the hour				weird error where always goes to AM, unless in  24-hour time
						formatTime : 'h:00 a', //can change to "h:m" later, but will need add script to handle               making it default to on the hour
						roundTime : 'ceil',
					});
				</script>

	</body>
</html>
