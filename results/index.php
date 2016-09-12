<?php
	$venue_id;
	
	if (isset($_GET['venue_id'])) {
		$venue_id = $_GET['venue_id'];
	}
	
	include 'functions.php';
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

    <title>Search Results | AnySpace</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
    <script src="../js/script.js"></script> <script src="../js/browsers.js"></script>

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
                <li class=""><a href="#">Learn More</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
        <div id="search">
            <form method="get">
                <input type="text" placeholder="Location" value="<?php if (isset($_GET['location'])) { echo $_GET['location'];} ?>"/>
                <input type="text" class="datetimepicker" placeholder="Start time" value="<?php if (isset($_GET['start'])) { echo $_GET['start'];} ?>"/>
                <input type="text" class ="datetimepicker" placeholder="End time" value="<?php if (isset($_GET['end'])) { echo $_GET['end'];} ?>"/>
                <select value="<?php if (isset($_GET['capacity'])) { echo $_GET['capacity'];} ?>">
                    <option disabled selected>Capacity</option>
                    <option>1-10</option>
                    <option>11-30</option>
                    <option>31-50</option>
                    <option>51-70</option>
                    <option>71-100</option>
                    <option>100+</option>
                </select>
                <input type="submit" value="Search"/>
            </form>
        </div>
      </div>

      <div class="container content container-fluid">
        <div class="row-fluid">
          <div class="col-md-12" id="search-refine"> 
            <form method="get">
              <div class="col-md-3 col-md-offset-3">
                <dl class="dropdown dropdown-amenities"> 
                    <dt>
                    <a href="#">
                      <span class="hida hida-amenities">AMENITIES</span>
                      <p class="multiSel-amenities multiSel"></p>
                    </a>
                    </dt>
                  
                    <dd>
                        <div class="mutliSelect-amenities multiSelect">
                            <ul>
                                <?php getAmenities(); ?>
                            </ul>
                        </div>
                    </dd>
                </dl>
              </div>
              <div class="col-md-3">
                <dl class="dropdown dropdown-style"> 
                    <dt>
                    <a href="#">
                      <span class="hida hida-style">STYLE</span>
                      <p class="multiSel-style multiSel"></p>
                    </a>
                    </dt>
                  
                    <dd>
                        <div class="multiSelect-style mutliSelect">
                            <ul>
                                <li><input type="checkbox" value="Modern" /> Modern</li>
                                <li><input type="checkbox" value="Vintage" /> Vintage</li>
                                <li><input type="checkbox" value="Luxury" /> Luxury</li>
                                <li><input type="checkbox" value="Luxury" /> Standard</li>
                            </ul>
                        </div>
                    </dd>
                </dl>
              </div>
              </form>
            </div>
            <div class="col-md-12 result-options">
              <div class="col-md-3 col-md-offset-3">
                <a class="result-list-type list-left" href="#">LIST</a><a class="result-list-type list-right list-inactive" href="#">MAP</a>  
              </div>
              <div class="col-md-3 sort-by">
                <form method="get">
                    <select>
                        <option disabled selected>SORT BY</option>
                        <option>Price (High to Low)</option>
                        <option>Price (Low to High)</option>
                        <option>Proximity</option>
                    </select>
                    <span class="result-count"><?php getNumber(); ?> RESULTS</span>
                </form>
              </div>
            </div>
            <?php getSearch(); ?>
          </div>
      </div>

    
     <footer>
     <ul>
       <li><a href="#"><span class="social white facebook"></span></a></li>
       <li><a href="#"><span class="social white twitter"></span></a></li>
       <li><a href="#"><span class="social white instagram"></span></a></li>
       <li><a href="#"><span class="social white flickr"></span></a></li>
     </ul>
     <div class="footer-text">
       <hr>
       <p><span class="pull-left">&copy; <?php echo date("Y"); ?> AnySpace Inc.</span><span class="pull-right"><a href="#">Learn More</a> <a href="#">Share Your Space</a></span></p>
     </div>
   </footer>
    </div>
    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    <script src='../js/multiselect.js'></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../js/ie10-viewport-bug-workaround.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/locale/af.js"></script>
	<link rel="stylesheet" type="text/css" href="../plugins/datetimepicker-master/jquery.datetimepicker.css"/ >
	<script src="../plugins/datetimepicker-master/build/jquery.datetimepicker.full.min.js"></script>
	<!--<script src="../js/customSelect.js"></script>-->
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
