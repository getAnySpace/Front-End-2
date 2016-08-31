<footer>
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
			<span class="pull-left">&copy; <?php echo date("Y"); ?> AnySpace Inc.</span><span class="pull-right"><a href="#">Learn More</a> <a href="#">Share Your Space</a></span>
		</p>
	</div>
</footer>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
<script>window.jQuery || document.write('<script src="../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../js/ie10-viewport-bug-workaround.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.14.1/locale/af.js"></script>

<script src="../js/customSelect.js"></script>
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
