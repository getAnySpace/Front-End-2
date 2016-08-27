<?php
	include '../connect.php';
	//$con = null;
	$dataBase = new connect('localhost', 'root', 'password', 'anyspace');
	$dataBase->selectTable('space');
	
	function getName() {			//TODO: wtf...
		$db = $GLOBALS['dataBase'];
		$result = $db->selectAny('name', 'space', 'venue_id', 1);
		print_r ($result);
		//$db->resultArray();
		
		while ($row = $result->fetch_assoc()) {
        echo $row['name']."<br>";
    }
		
	}
	
	function getNeighbourhood() {
		
	}
	
	function getAddress() {
		
	}
	
	function getAbout() {
		
	}
	
	/**
	 * will need IF LENGTH > #, THEN MAKE 2 COLUMNS
	 * @return arrayed output of <li>'s with amenities
	 */
	function getAmenities() {
		
	}
	
	function getAvailability() {
		
	}
	
	/**
	 * @return arrayed output of <li>'s with <img>'s
	 */
	function getPhotos() {
		
	}
	
	/**
	 * will need IF LENGTH > #, THEN MAKE 2 COLUMNS
	 * @return arrayed output of <li>'s with rules
	 */
	function getRules() {
		
	}
	
	/**
	 * will need IF LENGTH > #, THEN MAKE 2 COLUMNS
	 * @return arrayed output of <li>'s with policies
	 */
	function getPolicies() {
		
	}

?>	