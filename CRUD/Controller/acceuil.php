<?php 

	require('../Model/acceuil.php') ; 
	$e = new Personne() ; 

	// récupération des data
	$anarana = trim(htmlspecialchars($_POST['nom'])) ;
	$fanapiny = trim(htmlspecialchars($_POST['prenom'])) ;

	
	// enregistrement
	$e->setNom($anarana) ; 
	$e->setPrenom($fanapiny) ;
	$e->insertPersonne() ;
	
  ?>