
$(document).ready(function() {
		$("#input").on("input",function(){
			var mot = encodeURI($("#input").val());
			var donnees = "query=" + mot;
			var apiURL = "http://localhost/AppMobileVILLAGEGREEN/script/liste.php";
			$.ajax({
	 			url: apiURL,
	 			data: donnees,
	 			success: function (resultat) {
	 				AfficheResult(resultat);
	 			},
	 			error: function (request,error) {
	 				alert('Une erreur est survenue, vous devez saisir un texte');
	 			}
	 		});
		}); 
		
	});
	var listeDesFilms = null;
	function AfficheResult(data){
		$('#liste').empty();
		console.log("ok");
		for (var i=0; i< data.length; i++) {
			var ligne = data[i];
			codeHTML = '<a id="'+ligne.IDProduits+'">';
			codeHTML += '<li class="list-group-item">';
			codeHTML += '<span class="badge">';
			codeHTML += '<span class="glyphicon glyphicon-menu-right">';
			codeHTML += '</span>';
			codeHTML += '</span>';
			codeHTML += '<h3>' + ligne.NomProduits + '</h3>';
			codeHTML += '<p>' + ligne.MarquesProduits + '</p>';
			codeHTML += '</li>';
			codeHTML += '</a>';
			$('#liste').append(codeHTML);
			console.log(""+ligne.IDProduits);
		}

}
