<?php

class Database{
	
	private $host   = 'localhost';
	private $user   = 'root';
	private $pass   = '';
	private $dbname = 'news';
	
	private $error;
	private $dbh;
	private $stmt;
	
	public function __construct(){
		$dsn = 'mysql:host='. $this->host . ';dbname='. $this->dbname;
		$options = array(
			PDO::ATTR_PERSISTENT => true,
			PDO::ATTR_ERRMODE    => PDO::ERRMODE_EXCEPTION
			);
		try{
			$this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
		}catch(PDOException $e){
			$this->error = $e->getMessage();
		}	
	}
	public function query($query){
		$this->stmt = $this->dbh->prepare($query);
	}
	public function bind($param, $value, $type = null){
		if(is_null($type)){
			switch(true){
				case is_int($value) :
					$type = PDO::PARAM_INT;
					break;
				case is_bool($value) :
					$type = PDO::PARAM_BOOL;
					break;
				case is_null($value) :
					$type = PDO::PARAM_NULL;
					break;
				default;
				    $type = PDO::PARAM_STR;
					break;
			}
		}
		$this->stmt->bindValue($param, $value, $type);
	}
	public function execute(){
		return $this->stmt->execute();
	}
	public function resultset(){
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	public function totalcount(){
		$this->execute();
		return $this->stmt->rowCount(PDO::FETCH_ASSOC);
	}
	public function sing(){
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}
	public function title(){
		echo 'Admin Portal';
	}
	public function desc(){
		echo 'Repair Hub';
	}
	public function phone(){
		echo '+234 803 444 4444';
	}
	public function email(){
		echo'as.com';
	}
	public function shortadmin(){
		echo'Admin';
	}
	
}

?>