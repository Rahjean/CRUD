<?php 
	class connexionDB{
		private $bdd ; 
		public function getConnexion() {
			$this->bdd = new PDO("mysql:host=localhost;dbname=crud","root","") ; 
			return $this->bdd ; 
		}
	}


 ?>