
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
			$("#liste2").hide();
			$("#liste").show();

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
				$('#liste2').empty();
				$("#liste").hide();
				$("#liste2").show();
				var id = $(this).data("id");
				var donnees = "query=" + id;
				var apiURL = "http://localhost/AppMobileVILLAGEGREEN/script/detail.php";
				$.ajax
				({
	 				url: apiURL,
	 				data: donnees,
	 				success: function (resultat) 
	 				{
	 					AfficheResult2(resultat);
	 				},
	 				error: function (request,error) 
	 				{
	 					alert('Une erreur est survenue, vous devez saisir un texte');
	 				}
	 			});

				function AfficheResult2(data)
				{
					$("#catalogue").hide();
					$('#liste2').empty();
					var ligne = data[0];
					codeHTML = '<div data-id="'+id+'" class="detail">';
					codeHTML += '<h1 class="text-center">' + ligne.MarquesProduits + '</h1></br>';
					codeHTML += '<h4 class="text-center">' + ligne.NomProduits + '</h4></br>';
					codeHTML += '<img id="imageproduit" src="img/' + ligne.ImagesProduits + '"/>'
					codeHTML += '</div>';
					$('#liste2').append(codeHTML);

					$("#loupe").click(function()
					{
						console.log("yop");
						$("#liste2").hide();
						$("#catalogue").show();
						$("#input").val("");
						$("#liste1").show();
					});
					
						
						
				};	
				
			});
		}
});
