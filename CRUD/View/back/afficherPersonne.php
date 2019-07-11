<?php 

	require_once("../../Model/acceuil.php") ;

	$e = new Personne() ;
	$req = $e-> afficherPersonne() ;

 ?>	
	

		<table>
		  <tr>
		    <th>Nom:</th>
		    <th>Prenom:</th>
		    <th>Action:</th>
		  </tr>
 <?php while($data=$req->fetch()): ?>
		  <tr>
		    <td><?php echo $data['nom']; ?></td>
		    <td><?php echo $data['prenom']; ?></td>
		    <td><a onclick="return confirm('voulez-vous vraiment effacer?')" href="index.php?effacer=<?php echo $data['id']; ?>">Effacer</a>

		    	<a href="index.php?modifier=<?php echo $data['id']; ?>">Modifier</a></td>
		  </tr>
  <?php endwhile; ?>
		</table>
	
	
	
