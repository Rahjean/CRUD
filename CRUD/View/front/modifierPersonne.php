<?php require_once("Model/acceuil.php");

	$e = new Personne() ;

	if($data=$e->modifierPersonne()->fetch()) {
	   $id = $data['id'] ;
	   $nom = $data['nom'] ;
	   $prenom =  $data['prenom'] ;
	}		  
 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<!-- alaina ho atao anaty input value ilay id anlay ho atao update-->
	<input type="hidden" id="id" value="<?php echo $id ; ?>" name="">

	<h3>EDIT</h3>
	<h3>id : <?php echo $id ; ?></h3>

	<label>nom:</label><br>
	<input type="text" id="nom" value="<?php echo $nom ; ?>"><br>

	<label>prenom:</label><br>
	<input type="text" id="prenom" value="<?php echo $prenom ; ?>" ><br><br>

	<input type="submit" id="updatePersonne">




		<!-- script ajax -->
	  <script src="Publics/LIB/jquery.js"></script>
	  <script src="Publics/JS/updatePersonne.js"></script>
</body>
</html>