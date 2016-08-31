<?php
	include '../connect.php';
	//$con = null;
	$dataBase = new connect('localhost', 'root', 'password', 'anyspace');
	$dataBase->selectTable('space');
	$dataBase->json();
	
	function getName() {
		$db = $GLOBALS['dataBase'];
		$result = $db->selectAny('name', 'space', 'venue_id', 1);
		$a = $db->resultArray();
		
		echo $a[0]['name'];
	}
	
	function getNeighbourhood() {		//TODO: add column to database or use google api
		/*$db = $GLOBALS['dataBase'];
		$result = $db->selectAny('neighbourhood', 'space', 'venue_id', 1);
		$a = $db->resultArray();
		
		echo $a[0]['name'];*/
		
		//"https://maps.googleapis.com/maps/api/geocode/json?address=" . urlencode(getAddress()) . "&key=AIzaSyCmeN8Mu9qlrwSCNLGUdjw5R0Gex6tr9Qg")
		
		echo "*NEIGHBOURHOOD*";
	}
	
	function getAddress() {
		$db = $GLOBALS['dataBase'];
		$result = $db->selectAny('street`, `city`, `state`, `zip', 'venue', 'id', 1);
		$a = $db->resultArray();
		
		echo $a[0]['street'] . ', ' . $a[0]['city'] . ', ' . $a[0]['state'] . ' ' . $a[0]['zip'];
	}
	
	function getCity() {
		$db = $GLOBALS['dataBase'];
		$result = $db->selectAny('city', 'venue', 'id', 1);
		$a = $db->resultArray();
		
		echo $a[0]['city'];
	}
	
	function getAbout() {
		$db = $GLOBALS['dataBase'];
		$result = $db->selectAny('description', 'space', 'venue_id', 1);
		$a = $db->resultArray();
		
		echo $a[0]['description'];
	}
	
	function getVenueType() {
		$db = $GLOBALS['dataBase'];
		$result = $db->selectAny('type', 'space', 'venue_id', 1);
		$a = $db->resultArray();
		
		echo $a[0]['type'];
	}
	
	/**
	 * will need IF LENGTH > #, THEN MAKE 2 COLUMNS
	 * @return arrayed output of <li>'s with amenities
	 */
	function getAmenities() {
		$db = $GLOBALS['dataBase'];
		$result = $db->selectAny('amenity', 'amenities', 'place_id', 1);
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
	function getPhotos() {
		$db = $GLOBALS['dataBase'];
		$result = $db->selectAny('link', 'photos', 'place_id', 1);
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
	function getRules() {
		$db = $GLOBALS['dataBase'];
		$result = $db->selectAny('rule', 'rules', 'place_id', 1);
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
	function getPolicies() {
		$db = $GLOBALS['dataBase'];
		$result = $db->selectAny('policy', 'policies', 'venue_id', 1);
		$a = $db->resultArray();
		
		for ($i=0; $i < sizeof($a); $i++) {
			foreach ($a[$i] as $j => $k) {
				echo "<li>$k</li>";
			}
		}
	}
	
	
	function getBackground() {
		$db = $GLOBALS['dataBase'];
		$result = $db->selectAnyMult('link', 'photos', '`place_id`=1 AND `default_pic`=1');
		$a = $db->resultArray();
		
		return $a[0]['link'];
	}
	
?>	