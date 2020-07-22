<?php 
class DB{
	public $conn;
	protected $servername = "localhost";
	protected $hostname = "root";
	protected $password = "";
	protected $dbname = "db_test";

	function __construct(){
		$this->conn = mysqli_connect($this->servername, $this->hostname, $this->password, $this->dbname);
		// $mysqli = mysqli_select_db($this->conn, $this->dbname);
		mysqli_query($this->conn, "SET NAMES 'utf8'");
		if (!$this->conn) {
			echo "Failed to connect to MySQL: " . mysqli_connect_errno();
			exit();
		}
	}	
}
 ?>