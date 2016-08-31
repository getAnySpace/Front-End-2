<?php
	include "header.php";
?>

<div class="container content container-fluid">

	<div class="venue-cover"></div>

	<div class="row-fluid">

		<div class="col-md-12">
			<div class="col-md-4 col-md-offset-3 venue-detail">
				<div class="venue-block venue-description">
					<h1><?php getName(); ?></h1>
					<h2><?php getNeighbourhood(); ?> | <?php getAddress(); ?></h2>
					<h3>ABOUT THIS VENUE</h3>
					<p>
						<?php getAbout(); ?>
					</p>
				</div>
				<div class="venue-block venue-amenities">
					<h3>AMENITIES</h3>
					<div class="row amenities">
						<div class="col-md-6 ">
							<ul>
								<?php getAmenities(); ?>
							</ul>
						</div>
						<div class="col-md-6">
							<ul>
								<?php getAmenities(); ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="venue-block venue-availability">
					<h3>AVAILABILITY</h3>
					<ul class="availability">
						<?php getAvailability(); ?>
					</ul>
				</div>
				<div class="venue-block venue-photos">
					<h3>PHOTOS</h3>
					<ul>
						<?php getPhotos(); ?>
					<ul>
					<p>
						<img src="https://maps.googleapis.com/maps/api/staticmap?center=<?php urlencode(getAddress()); ?> 
            			&zoom=13
            			&size=600x300
            			&maptype=roadmap
						&markers=color:purple%7Clabel:AS%7C<?php urlencode(getAddress()); ?>
            			&key=AIzaSyCmeN8Mu9qlrwSCNLGUdjw5R0Gex6tr9Qg"/>
					</p>
				</div>
				<div class="venue-block venue-rules">
					<h3>VENUE RULES</h3>
					<div class="row rules">
						<div class="col-md-6">
							<ul>
								<?php getRules(); ?>
							</ul>
						</div>
						<div class="col-md-6">
							<ul>
								<?php getRules(); ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="venue-block venue-policy">
					<h3>CANCELLATION POLICY & SECURITY DEPOSIT</h3>
					<ul class="policy">
						<?php getPolicies(); ?>
					</ul>
				</div>
			</div>

			<div class="col-md-2 venue-box">
				<div>
					<select>
						<option>Select an Option</option>
						<option>one</option>
						<option>two</option>
					</select>
					<p>		<!--TODO: fill-->
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