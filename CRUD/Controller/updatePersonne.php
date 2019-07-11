<?php 

	require('../Model/acceuil.php') ; 
	$e = new Personne() ; 

	// récupération des data
	$anarana = trim(htmlspecialchars($_POST['nom'])) ;
	$fanapiny = trim(htmlspecialchars($_POST['prenom'])) ;
	$id = trim(htmlspecialchars($_POST['id'])) ;

	
	// enregistrement
	$e->setNom($anarana) ; 
	$e->setPrenom($fanapiny) ;
	$e->setId($id) ;
	$e->updatePersonne();
 ?>