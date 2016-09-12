<?php
	include '../connect.php';
	//$con = null;
	$dataBase = new connect('localhost', 'root', 'password', 'anyspace');
	$dataBase->selectTable('space');
	$dataBase->json();
	
	function getName($id) {
		$db = $GLOBALS['dataBase'];
		
		$result = $db->selectAny('venue_id', 'space', 'id', $id);
		$a = $db->resultArray();
		
		$vid = $a[0]['venue_id'];
		
		$result = $db->selectAny('name', 'space', 'venue_id', $vid);
		$a = $db->resultArray();
		
		echo $a[0]['name'];
	}
	
	function getNeighbourhood($id) {
		$db = $GLOBALS['dataBase'];
		
		$result = $db->selectAny('venue_id', 'space', 'id', $id);
		$a = $db->resultArray();
		
		$vid = $a[0]['venue_id'];
		
		$result = $db->selectAny('neighbourhood', 'venue', 'id', $vid);
		$a = $db->resultArray();
		
		echo $a[0]['neighbourhood'];
	}
	
	function getAddress($id) {
		$db = $GLOBALS['dataBase'];
		
		$result = $db->selectAny('venue_id', 'space', 'id', $id);
		$a = $db->resultArray();
		
		$vid = $a[0]['venue_id'];
		
		$result = $db->selectAny('street`, `city`, `state`, `zip', 'venue', 'id', $vid);
		$a = $db->resultArray();
		
		echo $a[0]['street'] . ', ' . $a[0]['city'] . ', ' . $a[0]['state'] . ' ' . $a[0]['zip'];
	}
	
	function getAbout($id) {
		$db = $GLOBALS['dataBase'];
		
		$result = $db->selectAny('venue_id', 'space', 'id', $id);
		$a = $db->resultArray();
		
		$vid = $a[0]['venue_id'];
		
		$result = $db->selectAny('description', 'space', 'venue_id', $vid);
		$a = $db->resultArray();
		
		echo $a[0]['description'];
	}
	
	/**
	 * will need IF LENGTH > #, THEN MAKE 2 COLUMNS
	 * @return arrayed output of <li>'s with amenities
	 */
	function getAmenities($id) {
		$db = $GLOBALS['dataBase'];
		
		$result = $db->selectAny('venue_id', 'space', 'id', $id);
		$a = $db->resultArray();
		
		$vid = $a[0]['venue_id'];
		
		$result = $db->selectAny('amenity', 'amenities', 'place_id', $vid);
		$a = $db->resultArray();
		
		for ($i=0; $i < sizeof($a); $i++) {
			foreach ($a[$i] as $j => $k) {
				echo "<li>$k</li>";
			}
		}
	}
	
	function getAvailability($id) {
		$db = $GLOBALS['dataBase'];
		$result = $db->queryAny('SELECT `day_of_week`, `start`, `end` FROM `regular_hours` WHERE `place_id`=' . $id);
		$a = $db->resultArray();
		
		for ($i=0; $i < sizeof($a); $i++) {
			//foreach ($a[$i] as $j => $k) {
				$start = $a[$i]['start'];
				$end = $a[$i]['end'];
				echo "<li>" . $a[$i]['day_of_week'] . ": " . date("g:i a", strtotime(substr($start, 0, -2) . ":" . substr($start, -2))) . "-" . date("g:i a", strtotime(substr($end, 0, -2) . ":" . substr($end, -2))) . "</li>";
			//}
		}
	}
	
	/**
	 * @return arrayed output of <li>'s with <img>'s
	 */
	function getPhotos($id) {
		$db = $GLOBALS['dataBase'];
		$result = $db->selectAny('link', 'photos', 'place_id', $id);
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
		
		$result = $db->selectAny('venue_id', 'space', 'id', $id);
		$a = $db->resultArray();
		
		$vid = $a[0]['venue_id'];
		
		$result = $db->selectAny('policy', 'policies', 'venue_id', $vid);
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
		else return "http://localhost:8080/Front-End-2/img/anyspace-venue.jpg";
	}
	
	
	function getPrice($id) {
		$db = $GLOBALS['dataBase'];
		$result = $db->queryAny("SELECT `pp`, `ph` FROM `price` WHERE `place_id`=" . $id);
		$a = $db->resultArray();
		
		$x = '';
		$y = '';
		
		if (isset($a[0]['pp'])) {
			$x = $a[0]['pp'];
			$y = "Per Person";
		}
		if (isset($a[0]['ph'])) {
			$x = $a[0]['ph'];
			$y = "Per Hour";
		}

		echo 	'<p class="venue-price">$' . $x . '</p>
				<p class="rate-unit">' . $y . '</p>
				<input type="hidden" id="total-price"/>';
	}
	/*
	 * 	<p class="venue-price">$30</p>
		<p class="rate-unit">PER PERSON</p>
	 */
?>	