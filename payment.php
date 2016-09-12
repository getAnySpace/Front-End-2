<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Payment | AnySpace</title>
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
									<a href="#" id="lm">Learn More</a>
								</li>
								<li>
									<a href="#" id="contact">Contact</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
			<div class="container content container-fluid">
				<form action="confirmation.php" method="POST" id="payment-form">
					<div class="row-fluid">

						<div class="col-md-12">
							<span class="payment-errors"></span>
							<div class="col-md-4 col-md-offset-3 venue-detail">
								<div class="venue-block venue-description">
									<h1>PUZZLE'S BAR</h1>
            						<h2>PAYMENT CONFIRMATION</h2>
								</div>
								<a id="bi" onclick='hide("#bi")'><h1>BILLING INFO</h1></a>
								<div class="venue-block billing-info">
									<select>
										<option>NEW ADDRESS</option>
										<option>Saved Address 1</option>
										<option>Saved Address 2</option>
									</select>
									<div class="clear">
										<label class="left">COMPANY NAME</label>
										<input type="text" class="right"/>
									</div>
									<div class="clear">
										<label class="left">FIRST NAME</label>
										<input type="text" class="right"/>
									</div>
									<div class="clear">
										<label class="left">LAST NAME</label>
										<input type="text" class="right"/>
									</div>
									<div class="clear">
										<label class="left">EMAIL</label>
										<input type="text" class="right"/>
									</div>
									<div class="clear">
										<label class="left">ADDRESS 1</label>
										<input type="text" class="right"/>
									</div>
									<div class="clear">
										<label class="left">ADDRESS 2</label>
										<input type="text" class="right"/>
									</div>
									<div class="clear">
										<label class="left">CITY</label>
										<input type="text" class="right"/>
									</div>
									<div class="clear">
										<label class="left">STATE</label>
										<div class="right">
											<select>
												<option>SELECT..</option>
												<option value="AL">Alabama</option>
												<option value="AK">Alaska</option>
												<option value="AZ">Arizona</option>
												<option value="AR">Arkansas</option>
												<option value="CA">California</option>
												<option value="CO">Colorado</option>
												<option value="CT">Connecticut</option>
												<option value="DE">Delaware</option>
												<option value="DC">District Of Columbia</option>
												<option value="FL">Florida</option>
												<option value="GA">Georgia</option>
												<option value="HI">Hawaii</option>
												<option value="ID">Idaho</option>
												<option value="IL">Illinois</option>
												<option value="IN">Indiana</option>
												<option value="IA">Iowa</option>
												<option value="KS">Kansas</option>
												<option value="KY">Kentucky</option>
												<option value="LA">Louisiana</option>
												<option value="ME">Maine</option>
												<option value="MD">Maryland</option>
												<option value="MA">Massachusetts</option>
												<option value="MI">Michigan</option>
												<option value="MN">Minnesota</option>
												<option value="MS">Mississippi</option>
												<option value="MO">Missouri</option>
												<option value="MT">Montana</option>
												<option value="NE">Nebraska</option>
												<option value="NV">Nevada</option>
												<option value="NH">New Hampshire</option>
												<option value="NJ">New Jersey</option>
												<option value="NM">New Mexico</option>
												<option value="NY">New York</option>
												<option value="NC">North Carolina</option>
												<option value="ND">North Dakota</option>
												<option value="OH">Ohio</option>
												<option value="OK">Oklahoma</option>
												<option value="OR">Oregon</option>
												<option value="PA">Pennsylvania</option>
												<option value="RI">Rhode Island</option>
												<option value="SC">South Carolina</option>
												<option value="SD">South Dakota</option>
												<option value="TN">Tennessee</option>
												<option value="TX">Texas</option>
												<option value="UT">Utah</option>
												<option value="VT">Vermont</option>
												<option value="VA">Virginia</option>
												<option value="WA">Washington</option>
												<option value="WV">West Virginia</option>
												<option value="WI">Wisconsin</option>
												<option value="WY">Wyoming</option>
											</select>
										</div>
									</div>
									<div class="clear">
										<label class="left">ZIP</label>
										<input type="text" class="right" data-stripe="address_zip"/>
									</div>
									<div class="clear">
										<label class="left">PHONE</label>
										<input type="text" class="right"/>
									</div>
									<div class="clear"></div>
								</div>
								<a id="pi" onclick='hide("#pi")'><h1>PAYMENT INFO</h1></a>
								<div class="venue-block payment-info">
									<div class="clear">
										<label class="left">CARD NUMBER</label>
										<input type="text" class="right" data-stripe="number" maxlength="16"/>
									</div>
									<div class="clear">
										<label class="left">EXPIRATION DATE (MM/YY)</label>
										<input type="text" class="right" data-stripe="exp" maxlength="5"/>
									</div>
									<div class="clear">
										<label class="left">CCV</label>
										<input type="text" class="right" data-stripe="cvc"/>
									</div>
									<div class="clear"></div>
								</div>
								<a id="vr" onclick='hide("#vr")'><h1>VENUE RULES</h1></a>
								<div class="venue-block payment-venue-rules">
									<div>
										<h3>Cancellation Policy</h3>
										<p>Must cancel 72 hours before the start of the event in order to recieve a full refund.</p>
									</div>
									<div>
										<h3>Rules</h3>
										<ul>
											<li><p>No one under the age of 21.</p></li>
											<li><p>Everyone must have a valid form of ID.</p></li>
											<li><p>No outside food or drink.</p></li>
											<li><p>No smoking.</p></li>
											<li><p>No pets.</p></li>
										</ul>
										<div>
											<input type="checkbox" />
											<label>I agree to the house rules andunderstand that my event will be cancelled immediately should anyone in my party violate any one of them.</label>
										</div>
										<div>
											<h3>Legal Disclaimer</h3>
											<textarea contenteditable="false" spellcheck="false" readonly>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</textarea>
										</div>
										<div>
											<input type="checkbox" />
											<label>I agree to the house rules andunderstand that my event will be cancelled immediately should anyone in my party violate any one of them.</label>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-2 venue-box">
								<div>
								<div class="venue-box-top">
									<p class="venue-price">
										$30
									</p>
									<p class="rate-unit">
										PER PERSON
									</p>
									<div style="clear: both;"></div>
								</div>
								<div class="venue-box-top">
									<p class="venue-price">
										$900 (30<span class="glyphicons glyphicons-user"></span>)
									</p>
									<p class="rate-unit">
										TOTAL
									</p>
									<div style="clear: both;"></div>
								</div>
								<div class="venue-options">
									<div>
										<select>
											<option disabled selected>PURPOSE</option>
											<option>Meeting</option>
											<option>Party</option>
										</select>
										<select>
											<option disabled selected>CAPACITY</option>
											<option>1-10</option>
											<option>11-30</option>
											<option>31-50</option>
											<option>51-70</option>
											<option>71-100</option>
											<option>100+</option>
										</select>
									</div>

									<div>
										<input type="text" class="datetimepicker" placeholder="Start time" value="">
			                			<input type="text" class="datetimepicker" placeholder="End time" value="">
									</div>

									<div>
										<select>
											<option disabled selected>FOOD</option>
											<option>Meeting</option>
											<option>Party</option>
										</select>
										<select>
											<option disabled selected>DRINK</option>
											<option>1-10</option>
											<option>11-30</option>
											<option>31-50</option>
											<option>51-70</option>
											<option>71-100</option>
											<option>100+</option>
										</select>
									</div>
								</div>
								<div class="venue-actions">
									<input type="submit" class="book-now submit" is="book-now" value="CONFIRM PAYMENT"/>
									<button class="contact-venue">
										CONTACT VENUE
									</button>
								</div>
								</div>
							</div>
				</form>
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
				
				<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
				<script type="text/javascript">
				  Stripe.setPublishableKey('pk_test_84NopSnEJqKnVMWaCvfX8G06');
				</script>
	</body>
</html>
