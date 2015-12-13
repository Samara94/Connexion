<?php

include_once('Dbconnect.php');


class User{
	public $db;
	
	public function __construct(){
		
		$this->db= new Dbconnect();
	
		return $this->db;	
	}
	
	public function login(){
		
	var_dump($this->db);
		
	}

}
?>