<?php
class db{
	private $servername = 'localhost';
	private $username = 'superUser';
	private $password = 'user123';
	private $dbname = 'db_teste';
	private $conn;
	private $stmt; 

	public function __construct()
	{
		$this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); 
	    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	public function query($query, $array)
	{
		$this->stmt = $this->conn->prepare($query);
		if(is_array($array)){ 
			$this->prepared($array);
		}else{
			$this->exe();
		}
	}

	public function prepared($stmt, $array)
	{
		foreach ($array as $key => $value) { 
    		$this->stmt->bindParam( $key , $value );
		}
		$this->exe();
	}

	public function exe()
	{
		$this->stmt->execute();
		if($this->stmt->fetchColumn() !== 0){
			return $this->stmt->fetchAll();
		}
	}

	public function __destruct()
	{
		$this->conn->close();
	}
}