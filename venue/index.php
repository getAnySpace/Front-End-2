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
					<h3>CANCELLATION POLICY &amp; SECURITY DEPOSIT</h3>
					<ul class="policy">
						<?php getPolicies(); ?>
					</ul>
				</div>
			</div>

			<div class="col-md-2 venue-box">
				<div>
					<div class="venue-box-top">
			              <p class="venue-price">$30</p>
			              <p class="rate-unit">PER PERSON</p>
			              <div style="clear: both;"></div>
			          </div>
			          <form method="get" action="../payment.php">
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
			</div>
		</div>
	</div>

</div>

<?php
include "footer.php";
?>