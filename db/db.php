<?php
namespace db;

use \PDO;

class db{
	private $servername = 'localhost';
	private $username = 'root';
	private $password = '';
	private $dbname = 'challenge';
	private $conn;
	private $stmt; 

	public function __construct()
	{	
 
		$this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password); 
	    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	public function query(String $query, $array = array())
	{
		$stmt = $this->conn->prepare($query); 
			foreach ($array as $key => $value) {   
				// $stmt->bindParam( $key , $value );
				$this->setParams( $stmt, $key , $value );
			} 
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	public function setParams($stmt, $key , $value )
	{
	 	$stmt->bindParam( $key , $value ); 
	} 
 
}
