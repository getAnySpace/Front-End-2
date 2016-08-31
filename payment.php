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
    <script src="js/script.js"></script> <script src="js/browsers.js"></script>
    <link href="css/customSelect.css" rel="stylesheet">

    <!-- PLUGINS -->
    <link rel="stylesheet" type="text/css" href="plugins/datetimepicker-master/jquery.datetimepicker.css"/ >
    <script src="plugins/datetimepicker-master/build/jquery.datetimepicker.full.min.js"></script>
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
                <li class=""><a href="#">Learn More</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
        </div>
      <div class="container content container-fluid">
        
        <div class="row-fluid">
        
        <div class="col-md-12"> 
        <div class="col-md-4 col-md-offset-3 venue-detail">
          <div class="venue-block venue-description">
          	
          </div>
          <div class="venue-block billing-info">
            
          </div>
          <div class="venue-block venue-availability">
          	
          </div>
          <div class="venue-block venue-photos">
            
          </div>
          <div class="venue-block venue-rules">
            <div class="row rules">
              
            </div>
          </div>
          <div class="venue-block venue-policy">
          </div>
        </div>

		<div class="col-md-2 venue-box">
          <div class="venue-box-top">
              <p class="venue-price">$30</p>
              <p class="rate-unit">PER PERSON</p>
              <div style="clear: both;"></div>
          </div>
          <form method="get">
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
                <select>
                  <option disabled selected>START TIME</option>
                  <option>Meeting</option>
                  <option>Party</option>
                </select>
                <select>
                  <option disabled selected>END TIME</option>
                  <option>1-10</option>
                  <option>11-30</option>
                  <option>31-50</option>
                  <option>51-70</option>
                  <option>71-100</option>
                  <option>100+</option>
                </select>
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
              <button class="book-now">BOOK NOW</button>
              <button class="contact-venue">CONTACT VENUE</button>
            </div>
          </form>
        
        </div>     
		<footer class="landing-footer">
      <ul>
        <li><a href="#"><span class="social white facebook"></span></a></li>
        <li><a href="#"><span class="social white twitter"></span></a></li>
        <li><a href="#"><span class="social white instagram"></span></a></li>
        <li><a href="#"><span class="social white flickr"></span></a></li>
      </ul>
      <div class="footer-text">
        <hr>
        <p><span class="pull-left">&copy; 2016 AnySpace Inc.</span><span class="pull-right"><a href="#">Learn More</a> <a href="#">Share Your Space</a></span></p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/locale/af.js"></script>
	<script src="js/customSelect.js"></script>
    <script>
        jQuery('.datetimepicker').datetimepicker({
            minDate:'0',
            format:'m/d/y H:00 a',      //can change to "h:m" later, but will need add script to handle               making it default to on the hour				weird error where always goes to AM, unless in  24-hour time
            formatTime: 'h:00 a',        //can change to "h:m" later, but will need add script to handle               making it default to on the hour
            roundTime: 'ceil',
        });
    </script>

  </body>
</html>
