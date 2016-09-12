<?php
include "header.php";
?>

<div class="container content container-fluid">

	<div class="venue-cover"></div>

	<div class="row-fluid">

		<div class="col-md-12">
			<div class="col-md-4 col-md-offset-3 venue-detail">
				<div class="venue-block venue-description">
					<h1><?php getName($venue_id); ?></h1>
					<h2><?php getNeighbourhood($venue_id); ?> | <?php getAddress($venue_id); ?></h2>
					<h3>ABOUT THIS VENUE</h3>
					<p>
						<?php getAbout($venue_id); ?>
					</p>
				</div>
				<div class="venue-block venue-amenities">
					<h3>AMENITIES</h3>
					<div class="row amenities">
						<div class="col-md-6 ">
							<ul>
								<?php getAmenities($venue_id); ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="venue-block venue-availability">
					<h3>AVAILABILITY</h3>
					<ul class="availability">
						<?php getAvailability($venue_id); ?>
					</ul>
				</div>
				<div class="venue-block venue-photos">
					<h3>PHOTOS</h3>
					<ul>
						<?php getPhotos($venue_id); ?>
					<ul>
					<p>
						<img src="https://maps.googleapis.com/maps/api/staticmap?center=<?php urlencode(getAddress($venue_id)); ?> 
            			&zoom=13
            			&size=600x300
            			&maptype=roadmap
						&markers=color:purple%7Clabel:AS%7C<?php urlencode(getAddress($venue_id)); ?>
            			&key=AIzaSyCmeN8Mu9qlrwSCNLGUdjw5R0Gex6tr9Qg"/>
					</p>
				</div>
				<div class="venue-block venue-rules">
					<h3>VENUE RULES</h3>
					<div class="row rules">
						<div class="col-md-6">
							<ul>
								<?php getRules($venue_id); ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="venue-block venue-policy">
					<h3>CANCELLATION POLICY &amp; SECURITY DEPOSIT</h3>
					<ul class="policy">
						<?php getPolicies($venue_id); ?>
					</ul>
				</div>
			</div>

			<div class="col-md-2 venue-box">
				<div>
					<form method="get" action="../payment.php">
					<div class="venue-box-top">
			              <?php getPrice($venue_id); ?>
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
			                  <?php getCapacity($venue_id); ?>
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
			              <button class="book-now">BOOK NOW</button>
			              <button class="contact-venue">CONTACT VENUE</button>
            			</div>
          			</form>
				</div>
			</div>
		</div>
	</div>

</div>

<?php
include "footer.php";
?>