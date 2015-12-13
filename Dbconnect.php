<?php
class Dbconnect {
	
	public $host="127.0.0.1";
	public $dbname="gsb2";
	public $user="root";
	public $pass='';
	public $dbh;
	
	public function __construct(){
		try {	
		// pour acceder avec $this a une variable qu'on a declaré dans les attributs de la classe, 
			$this->dbh = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass);
			echo "connexion ok";
		}
		catch(PDOException $e){
			print "Erreur connexion BDD: " . $e->getMessage() . "<br/>";
			die();	
		}	
	}
	
	public function closeConnexion(){
		
		$this->dbh=null;
		
	}
}
	// parametre vide appel le constructeur par defaut

	
?>