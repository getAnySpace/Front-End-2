<?php

/**
 * Copyright Patrick Bartman
 *
 * @author Patrick Bartman
 */

class connect
{
	function __construct($host, $user, $pass, $db)
	{
		$con = mysqli_connect($host, $user, $pass, $db);
		if (!$con)
		{
			die('Could not connect: ' . mysqli_error($con));
		}
			
		mysqli_select_db($con, $db);
		
		$this->con = $con;
	}
	
	function setId($newId) {
		$this->id = $newId;
	}
	
	function selectTable($table)
	{
		$sql="SELECT * FROM " . $table;
		$result = mysqli_query($this->con,$sql);
		
		$this->table = $table;
		$this->result = $result;
	}
	
	function getFullTable()
	{
		$fields = mysqli_fetch_fields($this->result);
		$arr = array(array());
		$i = 0;
		while($row = mysqli_fetch_object($this->result))
		{
			$arr[$i] = $row;
			$i++;
		}
		
		$this->fields = $fields;
		$this->arr = $arr;
	}
	
	function getSelectTable($id)
	{
		$id = mysqli_real_escape_string($this->con, $id);
		$sql="SELECT * FROM " . $this->table . " WHERE id='" . $id . "'";
		$result = mysqli_query($this->con,$sql);
		$row = mysqli_fetch_object($result);
		
		return $row;
	}
	
	function printFields()
	{
		echo "<table border='1'><tr>";
		$fields = mysqli_fetch_fields($this->result);
		for($a = 0; $a < mysqli_num_fields($this->result); $a++)
		{
			echo "<th>" . $fields[$a]->name . "</th>";
		}
		echo "</tr>";
		
		$this->fields = $fields;
		return $fields;
	}
	
	function printFullTable()
	{
		$fields = self::printFields();
		$arr = array(array());
		$i = 0;
		while($row = mysqli_fetch_object($this->result))
		{
			$arr[$i] = $row;
			echo "<tr>";
			for($a = 0; $a < count($fields); $a++)
			{
				$temp = $fields[$a]->name;
				echo "<td>" . $row->$temp . "</td>";
			}
			echo "</tr>";
			$i++;
		}
		echo "</table>";
		
		$this->arr = $arr;
	}
	
	function printSelectTable($id, $table)
	{
		$id = mysqli_real_escape_string($this->con, $id);
		$sql="SELECT * FROM " . $table . " WHERE id='" . $id . "'";
		$result = mysqli_query($this->con,$sql);
		$row = mysqli_fetch_object($result);
		
		if ($row != null)
		{
			$fields = self::printFields();
			echo "<tr>";
			for($a = 0; $a < count($fields); $a++)
			{
				$temp = $fields[$a]->name;
				echo "<td>" . $row->$temp . "</td>";
			}
			echo "</tr>";
			echo "</table>";
		}
		else echo "Data does not exist";
	}
	
	function changeStatus($id, $status)
	{
		$id = mysqli_real_escape_string($this->con, $id);
		mysqli_query($this->con, /*mysqli_escape_string($this->con,*/ "UPDATE " . $this->table . " SET status='" . $status . "' WHERE id='" . $id . "'")/*)*/;
		if (substr(mysqli_info($this->con), 14, 1) == "0")
		{
			echo "Data does not exist";
		}
	}
	
	function getCon() {
		return $this->con;
	}
	
	function getResults() {
		return $this->result;
		$fields = mysqli_fetch_fields($this->result);
		$arr = array(array());
		$i = 0;
		while($row = mysqli_fetch_object($this->result))
		{
			$arr[$i] = $row;
			$i++;
		}
		
		$this->fields = $fields;
		$this->arr = $arr;
		
		$r = new stdClass;
		$r->success = true;
		$r->table = $this->arr;
		
		return $r;
	}
	
	function nonJson() {
		self::selectTable($this->table);
		self::getFullTable();
		
		$r = new stdClass;
		$r->success = true;
		$r->table = $this->arr;
		
		return $r;
	}
	
	function json()
	{
		self::selectTable($this->table);
		self::getFullTable();
		
		$r = new stdClass;
		$r->success = true;
		$r->table = $this->arr;
		
		return json_encode($r);
	}
	
	function jsonSelect($id)
	{
		self::selectTable($this->table);
		$temp = self::getSelectTable($id);
		
		$r = new stdClass;
		$r->success = true;
		$r->orders = $temp;
		
		echo json_encode($r);
	}
	
	function queryAny($str) {
		$str = mysqli_real_escape_string($this->con, $str);
		$result = mysqli_query($this->con,$str);
		
		$this->result = $result;
		
		if($result === FALSE) {
			die (mysqli_error($this->con));
		}
		
		return $result;
	}
	
	function resultArray() {
		for ($i = 0; $arr[$i] = mysqli_fetch_assoc($this->result); $i++);
		array_pop($arr);
		
		return $arr;
	}
	
	function selectAny($flds, $from, $wheref, $wheree) {
		$flds = mysqli_real_escape_string($this->con, $flds);
		$from = mysqli_real_escape_string($this->con, $from);
		$wheref = mysqli_real_escape_string($this->con, $wheref);
		$wheree = mysqli_real_escape_string($this->con, $wheree);
		
		$sql = "SELECT `" . $flds . "` FROM `" . $from . "` WHERE `" . $wheref . "`=" . $wheree . "";
		//print_r($sql);
		
		$result = mysqli_query($this->con,$sql);
		
		$this->table = $from;
		$this->result = $result;
		
		return $result;
	}
	
	 /** Select Any w/ multiple wheres
	 * @param string $flds what fields are being selected
	 * @param string $from from sql parameter
	 * @param string $where where sql parameter in the form of ('id'='1' AND 'name'='fake')
	 */
	function selectAnyMult($flds, $from, $where) {
		$flds = mysqli_real_escape_string($this->con, $flds);
		$from = mysqli_real_escape_string($this->con, $from);
		$where = mysqli_real_escape_string($this->con, $where);
		
		$sql = "SELECT " . $flds . " FROM " . $from . " WHERE " . $where;
		
		$result = mysqli_query($this->con,$sql);
		
		if($result === FALSE) {
			die (mysqli_error($this->con));
		}
		
		$this->table = $from;
		$this->result = $result;
		
		/*while ($row = mysqli_fetch_array($result, MYSQL_NUM)) {
		    printf("ID: %s  Name: %s", $row[0], $row[1]);  
		}*/
		
		return $result;
	}
	
	function updateAny($tbl, $set, $wheref, $wheree) {
		$tbl = mysqli_real_escape_string($this->con, $tbl);
		$from = mysqli_real_escape_string($this->con, $from);
		$wheref = mysqli_real_escape_string($this->con, $wheref);
		$wheree = mysqli_real_escape_string($this->con, $wheree);
		
		$sql = "UPDATE " . $tbl . " SET " . $set . " WHERE '" . $wheref . "'='" . $wheree . "'";
		
		$result = mysqli_query($this->con,$sql);
		$this->result = $result;
		
		return $result;
	}
	
	 /** Update any w/ multiple wheres
	 * @param string $tbl table name
	 * @param string $set value to be set
	 * @param string $where the where sql parameter in the form of ('id'='1' AND 'name'='fake')
	 */
	function updateAnyMult($tbl, $set, $where) {
		$tbl = mysqli_real_escape_string($this->con, $tbl);
		$from = mysqli_real_escape_string($this->con, $from);
		$where = mysqli_real_escape_string($this->con, $where);
		
		$sql = "UPDATE " . $tbl . " SET " . $set . " WHERE " . $where;
		
		$result = mysqli_query($this->con,$sql);
		$this->result = $result;
		
		return $result;
	}
	
	function close()
	{
		mysqli_close($this->con);
	}
}
?>