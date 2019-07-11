$(document).ready(function(){ 
	
	$(".afficher").load("View/back/afficherPersonne.php") ;
	
	$("#btnSave").click(function(){
		 
		// test champs rempli
		if($("#nom").val()!="" && $("#prenom").val()!="") {
			var anarana = $("#nom").val().trim() ;
			var fanapiny = $("#prenom").val().trim() ;


			var send = "nom="+anarana+"&prenom="+fanapiny ;

			$.ajax({
				type:"POST",
				url:"Controller/acceuil.php",
				data:send,
				
				success: function(data) {
					alert("Enregistrer") ;
				},
			});
		}

		else {
			alert("FENOY");
		}
		
	}) ; 
	


}) ; 