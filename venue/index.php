<?php
	require "../connect.php";
	$con = new connect('localhost', 'root', 'password', 'cs425');
?>	

<?php
include "header.php";
?>

<div class="container content container-fluid">

	<div class="venue-cover"></div>

	<div class="row-fluid">

		<div class="col-md-12">
			<div class="col-md-4 col-md-offset-3 venue-detail">
				<div class="venue-block venue-description">
					<h1>PUZZLE'S BAR</h1>
					<h2>BRIDGEPORT | 2940 S Bonfield St, Chicago, IL 60608</h2>
					<h3>ABOUT THIS VENUE</h3>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elite. Vestibulum fringilla ornare risus non maximus. Vivamus ut venenatis dui.Sed cursus lacus venenatis dictum ullamcorper. Duis pharetra urna vitae scelerisque tempus. Phasellus aliquam, nisi et faucibus consectetur, arcu justo efficitur ante, quis posuere nibh augue vel ante. Sed feugiat pellentesque turpis eu hendrerit. Suspendisse finibus metus ut nisi vestibulum placerat. Donec eget elementum quam. Morbi varius velit quam, quis convallis justo scelerisque non.
					</p>
				</div>
				<div class="venue-block venue-amenities">
					<h3>AMENITIES</h3>
					<div class="row amenities">
						<div class="col-md-6 ">
							<ul>
								<li>
									Street Parking
								</li>
								<li>
									BYOB
								</li>
								<li>
									Outside Access
								</li>
								<li>
									Sound System
								</li>
								<li>
									Handicap Access
								</li>
							</ul>
						</div>
						<div class="col-md-6">
							<ul>
								<li>
									Accessibility
								</li>
								<li>
									WiFi
								</li>
								<li>
									Projection
								</li>
								<li>
									More
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="venue-block venue-availability">
					<h3>AVAILABILITY</h3>
					<ul class="availability">
						<li>
							Monday
						</li>
						<li>
							Tuesday
						</li>
						<li>
							Wednesday
						</li>
						<li>
							Thursday
						</li>
						<li>
							Friday
						</li>
						<li>
							Saturday
						</li>
						<li>
							Sunday
						</li>
					</ul>
				</div>
				<div class="venue-block venue-photos">
					<h3>PHOTOS</h3>
					<ul>
						<li><img src="https://placehold.it/120x120">
						</li>
						<li><img src="https://placehold.it/120x120">
						</li>
						<li><img src="https://placehold.it/120x120">
						</li>
						<li><img src="https://placehold.it/120x120">
						</li>
						<li><img src="https://placehold.it/120x120">
						</li>
						<li><img src="https://placehold.it/120x120">
						</li>
						<li><img src="https://placehold.it/120x120">
						</li>
						<li><img src="https://placehold.it/120x120">
						</li>
						<ul>
							<p>
								Google Maps code
							</p>
				</div>
				<div class="venue-block venue-rules">
					<h3>VENUE RULES</h3>
					<div class="row rules">
						<div class="col-md-6">
							<ul>
								<li>
									No Smoking
								</li>
								<li>
									No Pets
								</li>
								<li>
									&lt;21
								</li>
							</ul>
						</div>
						<div class="col-md-6">
							<ul>
								<li>
									No Smoking
								</li>
								<li>
									No Pets
								</li>
								<li>
									&lt;21
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="venue-block venue-policy">
					<h3>CANCELLATION POLICY & SECURITY DEPOSIT</h3>
					<ul class="policy">
						<li>
							Full refund if cancelled 1 week prior.
						</li>
						<li>
							50% refund if cancelled 3 days prior.
						</li>
						<li>
							No security deposit required
						</li>
					</ul>
				</div>
			</div>

			<div class="col-md-2 venue-box">
				<div>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elite. Vestibulum fringilla ornare risus non maximus. Vivamus ut venenatis dui.Sed cursus lacus venenatis dictum ullamcorper. Duis pharetra urna               vitae scelerisque tempus. Phasellus aliquam, nisi et faucibus consectetur, arcu justo efficitur ante, quis posuere nibh augue vel ante. Sed feugiat pellentesque turpis eu hendrerit. Suspendisse finibus            metus ut nisi vestibulum placerat. Donec eget elementum quam. Morbi varius velit quam, quis convallis justo scelerisque non.
					</p>
				</div>
			</div>
		</div>
	</div>

</div>

<?php
	include "footer.php";
?>