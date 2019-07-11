<?php 
	require_once("connexionDB.php") ; 
	
	class Personne{
		private $id, $nom, $prenom ; 

		public function __construct() {
			$c = new connexionDB() ; 
			$this->bdd = $c->getConnexion() ;

		}
		
		// setters
		public function setId($nom) {
			$this->id = strtoupper($nom) ; 
		}

		public function setNom($nom) {
			$this->nom = strtoupper($nom) ; 
		}
		public function setPrenom($nom) {
			$this->prenom = strtoupper($nom) ; 
		}


		//get
		public function getId($nom) {
			return $this->id ; 
		}
		public function getNom() {
			return $this->nom ; 
		}
		public function getPrenom() {
			return $this->prenom ; 
		}

		
		// insertion 
		public function insertPersonne() {
			$req = $this->bdd->prepare("INSERT INTO data(nom,prenom) VALUES (?,?)") ; /********rehefa inseret dia PREPARE ********/
			$req->execute(array($this->nom,$this->prenom)) ; 
		}

		//select
		public function afficherPersonne() {
		  	$req = $this->bdd->query("SELECT * FROM data") ; /******rehefa afficher dia QUERY ********/
		  	return $req; 
		}

		//effacerPersonne
		public function effacerPersonne() { 
			$id = $_GET['effacer'] ;
		  	$this->bdd->query("DELETE FROM data WHERE id=$id") ; /***********rehefa effacer dia QUERY *******/
		}

		//modifierPersonne
		public function modifierPersonne() {
			$id = $_GET['modifier'] ;
		    $req = $this->bdd->query("SELECT * FROM data WHERE id=$id") ; /********rehefa modifier dia query *********/
		    return $req ;
		}
 
		//updatePersonne
		public function updatePersonne() {
			$req = $this->bdd->prepare("UPDATE data SET nom=?, prenom=? WHERE id=?") ; /********rehefa update dia PREPARE *********/
			$req->execute(array($this->nom,$this->prenom,$this->id)) ; 
		} 
	}
 ?>