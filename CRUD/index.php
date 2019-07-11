<?php 

	
	const CONTROL = "Controller/" ;
	const MODELS = "Model/" ;
	const FRONT = "View/front/" ;
	const BACK = "View/back/" ;

	if (isset($_GET['action'])) {
				
	}

	if (isset($_GET['effacer'])) {
		include(CONTROL . "effacerPersonne.php") ;
	}

	if (isset($_GET['modifier'])) {
		include(FRONT . "modifierPersonne.php") ;
	}

	
	else {
		include(FRONT . "acceuil.php") ;
	}

 ?>