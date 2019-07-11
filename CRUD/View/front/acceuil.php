<!DOCTYPE html>
<html lang="en">
<head>
  <title>Facelove</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
	table {
	  font-family: arial, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}

	td, th {
	  border: 1px solid #dddddd;
	  text-align: left;
	  padding: 8px;
	}

	tr:nth-child(even) {
	  background-color: #dddddd;
	}
</style>
</head>
<body>
<form>
		<label>Nom:</label><br>
		<input type="text" id="nom"><br>
		<label>Prenom:</label><br>
		<input type="text" id="prenom"><br><br>

		<input type="submit" value="save" id="btnSave">

</form>


<div class="afficher" >
  
</div>



<!-- script ajax -->
  <script src="Publics/LIB/jquery.js"></script>
  <script src="Publics/JS/acceuil.js"></script>

</body>
</html>