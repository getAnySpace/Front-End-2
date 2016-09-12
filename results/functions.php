<?php
	include '../connect.php';
	//$con = null;
	$dataBase = new connect('localhost', 'root', 'password', 'anyspace');
	$dataBase->selectTable('space');
	$dataBase->json();
	
	function getName($id) {
		$db = $GLOBALS['dataBase'];
		$result = $db->selectAny('name', 'space', 'id', $id);
		$a = $db->resultArray();
		
		return $a[0]['name'];
	}
	
	function getNeighbourhood($id) {
		$db = $GLOBALS['dataBase'];
		$result = $db->selectAny('neighbourhood', 'venue', 'id', $id);
		$a = $db->resultArray();
		
		if (isset($a[0]['neighbourhood'])) {
			return $a[0]['neighbourhood'];
		}
	}
	
	function getAddress($id) {
		$db = $GLOBALS['dataBase'];
		$result = $db->selectAny('street`, `city`, `state`, `zip', 'venue', 'id', $id);
		$a = $db->resultArray();
		
		return $a[0]['street'] . ', ' . $a[0]['city'] . ', ' . $a[0]['state'] . ' ' . $a[0]['zip'];
	}
	
	function getCity($id) {
		$db = $GLOBALS['dataBase'];
		
		$result = $db->selectAny('venue_id', 'space', 'id', $id);
		$a = $db->resultArray();
		
		$vid = $a[0]['venue_id'];
		
		$result = $db->selectAny('city', 'venue', 'id', $vid);
		$a = $db->resultArray();
		
		return $a[0]['city'];
	}
	
	function getAbout($id) {
		$db = $GLOBALS['dataBase'];
		
		$result = $db->selectAny('venue_id', 'space', 'id', $id);
		$a = $db->resultArray();
		
		$vid = $a[0]['venue_id'];
		
		$result = $db->selectAny('description', 'space', 'venue_id', $vid);
		$a = $db->resultArray();
		
		return $a[0]['description'];
	}
	
	function getVenueType($id) {
		$db = $GLOBALS['dataBase'];
		
		$result = $db->selectAny('type', 'space', 'id', $id);
		$a = $db->resultArray();
		
		return $a[0]['type'];
	}
	
	/**
	 * will need IF LENGTH > #, THEN MAKE 2 COLUMNS
	 * @return arrayed output of <li>'s with amenities
	 */
	function getAmenities() {
		$db = $GLOBALS['dataBase'];
		//$result = $db->selectAny('amenity', 'amenities', 'place_id', $id);
		$result = $db->queryAny('SELECT DISTINCT `amenity` FROM `amenities`');
		$a = $db->resultArray();
		
		for ($i=0; $i < sizeof($a); $i++) {
			foreach ($a[$i] as $j => $k) {
				echo '<li><input type="checkbox" value="' . $k . '" /> ' . $k . '</li>';
			}
		}
	}
	
	function getAvailability() {
		/*$db = $GLOBALS['dataBase'];
		$result = $db->selectAny('amenity', 'amenities', 'place_id', 1);
		$a = $db->resultArray();
		
		for ($i=0; $i < sizeof($a); $i++) {
			foreach ($a[$i] as $j => $k) {
				echo "<li>$k</li>";
			}
		}*/
	}
	
	/**
	 * @return arrayed output of <li>'s with <img>'s
	 */
	function getPhotos($id) {
		$db = $GLOBALS['dataBase'];
		$result = $db->queryAny('link', 'photos', 'place_id', $id);
		$a = $db->resultArray();
		
		for ($i=0; $i < sizeof($a); $i++) {
			foreach ($a[$i] as $j => $k) {
				echo "<li><img src=\"$k\"/></li>";
			}
		}
	}
	
	/**
	 * will need IF LENGTH > #, THEN MAKE 2 COLUMNS
	 * @return arrayed output of <li>'s with rules
	 */
	function getRules($id) {
		$db = $GLOBALS['dataBase'];
		$result = $db->selectAny('rule', 'rules', 'place_id', $id);
		$a = $db->resultArray();
		
		for ($i=0; $i < sizeof($a); $i++) {
			foreach ($a[$i] as $j => $k) {
				echo "<li>$k</li>";
			}
		}
	}
	
	/**
	 * will need IF LENGTH > #, THEN MAKE 2 COLUMNS
	 * @return arrayed output of <li>'s with policies
	 */
	function getPolicies($id) {
		$db = $GLOBALS['dataBase'];
		$result = $db->selectAny('policy', 'policies', 'venue_id', $id);
		$a = $db->resultArray();
		
		for ($i=0; $i < sizeof($a); $i++) {
			foreach ($a[$i] as $j => $k) {
				echo "<li>$k</li>";
			}
		}
	}
	
	
	function getBackground($id) {
		$db = $GLOBALS['dataBase'];
		$result = $db->selectAnyMult('link', 'photos', '`place_id`=' . $id . ' AND `default_pic`=1');
		$a = $db->resultArray();
		
		if (isset($a[0]['link'])) {
			return $a[0]['link'];
		}
		else {
			return "http://localhost:8080/Front-End-2/img/anyspace-venue.jpg";
		}
	}
	
	
	function getSearch() {
		$db = $GLOBALS['dataBase'];
		$result = $db->queryAny('SELECT `id` FROM `space`');
		$a = $db->resultArray();
		
		for ($i=0; $i < sizeof($a); $i++) {
			foreach ($a[$i] as $j => $k) {
				echo '
				<div class="col-md-12 result-item">
					<div class="col-md-2 col-md-offset-3">
						<a href="../venue/?venue_id=' . $k .'">
							<img src="' . getBackground($k) . '"/>
						</a>
					</div>    
					<div class="col-md-4">
						<a href="../venue/?venue_id=' . $k .'">
							<h1>' . getName($k) . '</h1>
							<h2>' . getCity($k) . ' | ' . getVenueType($k) . '</h2>
							<p>' . getAbout($k) . '</p>
							<h2>' . getNeighbourhood($k) . '</h2>
						</a>
					</div>
				</div>
				';
			}
		}
	}

	function mapAllAddress() {
		$db = $GLOBALS['dataBase'];
		$result = $db->queryAny('SELECT `name`, `neighbourhood`, `description`, `street`, `city`, `state`, `zip` FROM `venue`');
		$a = $db->resultArray();
		
		for ($i = sizeof($a) - 1; $i >= 0; $i--) {
			$content = 	"<p>" . $a[$i]['name'] . "</p>";
			echo "geocodeAddress('" . $a[$i]['street'] . ', ' . $a[$i]['city'] . ' ' . $a[$i]['state'] . ', ' . $a[$i]['zip'] . "', \"" . $content . "\");";
		}
	} 
	
	function getNumber() {
		$db = $GLOBALS['dataBase'];
		$result = $db->queryAny('SELECT `id` FROM `space`');
		$a = $db->resultArray();
		
		echo sizeof($a);
	}
?>	