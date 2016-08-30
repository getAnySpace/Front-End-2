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
	
	function getNeighbourhood() {
		$db = $GLOBALS['dataBase'];
		$result = $db->selectAny('neighbourhood', 'space', 'venue_id', 1);
		$a = $db->resultArray();
		
		echo $a[0]['name'];
	}
	
	function getAddress() {
		$db = $GLOBALS['dataBase'];
		$result = $db->selectAny('address', 'space', 'venue_id', 1);
		$a = $db->resultArray();
		
		echo $a[0]['name'];
	}
	
	function getAbout() {
		$db = $GLOBALS['dataBase'];
		$result = $db->selectAny('description', 'space', 'venue_id', 1);
		$a = $db->resultArray();
		
		echo $a[0]['name'];
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