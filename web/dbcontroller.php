<?php 		// Adapted from "https://phppot.com/php/simple-php-shopping-cart/"
class DBController {
	private $host = "silva.computing.dundee.ac.uk";
	private $user = "19ac3u05";
	private $password = "abc123";
	private $database = "19ac3d05";
	private $conn;
    
	function __construct() {
		$this->conn = $this->connectDB();
	}
	
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
	
	function runQuery($query) {
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;	
	}
}
?>