
$(document).ready(function() 
{
		$("#input").on("input", function()
		{
			var mot = encodeURI($("#input").val());
			console.log(mot);
			var donnees = "query=" + mot;
			var apiURL = "http://localhost/AppMobileVILLAGEGREEN/script/liste.php";
			$.ajax
			({
	 			url: apiURL,
	 			data: donnees,
	 			success: function (resultat) 
	 			{
	 				AfficheResult(resultat);
	 			},
	 			error: function (request,error) 
	 			{
	 				alert('Une erreur est survenue, vous devez saisir un texte');
	 			}
	 		});
		}); 

		function AfficheResult(data)
		{
			console.log("Affichage liste okay");
			$('#liste').empty();

			for (var i=0; i< data.length; i++) 
			{
				var ligne = data[i];
				codeHTML = '<div data-id="'+ligne.IDProduits+'" class="detail">';
				codeHTML += '<li class="list-group-item">';
				codeHTML += '<span class="badge">';
				codeHTML += '<span class="glyphicon glyphicon-menu-right">';
				codeHTML += '</span>';
				codeHTML += '</span>';
				codeHTML += '<h3>' + ligne.NomProduits + '</h3>';
				codeHTML += '<p>' + ligne.MarquesProduits + '</p>';
				codeHTML += '</li>';
				codeHTML += '</div>';
				$('#liste').append(codeHTML);
			}

			$('.detail').click(function()
			{
				$('#liste').empty();

				var id = $(this).data("id");


				$.get("http://localhost/AppMobileVILLAGEGREEN/script/detail.php","id=" + id, function () 
				{
					console.log(data)
					for (var i=0; i< data.length; i++) 
					{
						var ligne = data[i];
						codeHTML = '<div data-id="'+ligne.IDProduits+'" class="detail">';
						codeHTML += '<li class="list-group-item">';
						codeHTML += '<span class="badge">';
						codeHTML += '<span class="glyphicon glyphicon-menu-right">';
						codeHTML += '</span>';
						codeHTML += '</span>';
						codeHTML += '<h3>' + ligne.NomProduits + '</h3>';
						codeHTML += '<p>' + ligne.MarquesProduits + '</p>';
						codeHTML += '</li>';
						codeHTML += '</div>';
						$('#liste').append(codeHTML);
					}
					console.log(data.results);
				});	
				console.log("Affichage detail okay");
			});
		}
});
