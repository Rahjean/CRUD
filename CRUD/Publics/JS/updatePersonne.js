$(document).ready(function(){ 
	
	
	$("#updatePersonne").click(function(){
		 
		// test champs rempli
		if($("#nom").val()!="" && $("#prenom").val()!="") {
			
			var id = $("#id").val().trim() ; /**********ITO NO MAKA ANLAY ID ARY ANATY View/front/modofierPersonne.php*********/
			var anarana = $("#nom").val().trim() ;
			var fanapiny = $("#prenom").val().trim() ;
			var send = "id="+id+"&nom="+anarana+"&prenom="+fanapiny ;

			$.ajax({
				type:"POST",
				url:"Controller/updatePersonne.php",
				data:send,
				
				success: function(data) {
					window.location.href = 'index.php?action=crud';//redirect to
				},
			});
		}
		else {
			alert("FENOY");
		}
		
	}) ; 
}) ; 