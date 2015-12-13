<?php

include_once('Dbconnect.php');
include_once('Session.php');


class User{
	public $db;
	public $data;
	
	public function __construct(){
		$this->db= new Dbconnect();
	}
	
	public function login($login,$pass){
		
		try {

			$query=("select * from utilisateur where login=:login");
			$stmt=$this->db->dbh->prepare($query);
			$stmt->bindParam(':login',$login);
			$stmt->execute();
			$row=$stmt->fetch();
			$count=$stmt->rowCount();
		
			if($count>0){
				if (password_verify($pass,$row['mdp'])){
					$this->data=Session::getInstance();
					$this->data->userSession=$row['id']; 
					//$_SESSION['userSession'] = $row['id'];
					return true;
				}else {					
					return false;			
				}
			}
		}
		catch (PDOException $e){
			
			echo $e->getMessage();
		}
		
	}
	
	public function isLoggedIn() {
		if (isset($this->data->userSession)) {
			return true;
		}
	}

}
?>