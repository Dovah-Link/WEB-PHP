<!DOCTYPE html>
<html>
<head>
	<title>VILLAGEGREEN</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?=base_url("public/css/bootstrap/bootstrap.css")?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url("public/css/style.css")?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url("public/img/Logos/logoVG.png")?>">
</head>
<body>
<div class="container">
	<header class="head">
		<div class="row"  >
			<div class="menulogo col-sm-4 col-xs-6 ">
				<a href="#" tabindex="0" class="infobulle2 infobulle-complexe" data-toggle="popover" role="button">
					<img class="imglogomenu" src="<?=base_url("public/img/icones/map.png")?>">
				</a>
			</div>

			<div class="logoVG col-sm-4 hidden-xs">
				<img class="imglogoVG" src="<?=base_url("public/img/Logos/logoVG.png")?>">
			</div>

			<div class="col-sm-4 col-xs-6" >
				<p class="client pull-right">
						<a href="#" tabindex="0" class="infobulle infobulle-complexe" data-toggle="popover" role="button">
							ESPACE CLIENT
						</a>
					<img class="shop"src="<?=base_url("public/img/icones/shop.png")?>">
					<img class="fr hidden-xs"src="<?=base_url("public/img/icones/fr.png")?>">
				</p>
			</div>		
		</div>
	</header>

	<article>
		<?php 
			foreach ($listeCli as $key => $value)
				{
					echo "<div class='list-group-item'><a class='$value->NomClients' href='#'>$value->NomClients</a></div>";
				}
		?>
	</article>

	</br>

	<div class="row text-center"><h1>MODIFICATION</h1></div></br></br>

	<div class="row">

		<div class="col-md-4 col-sm-4 col-xs-4">
			
		</div>

		<div class="col-md-4 col-sm-4 col-xs-4">
			<form method="post" action="<?=site_url("welcome/update")?>">
				<input type="text" class="form-control " placeholder="nom"  name="NomClients"></br>
				<input type="text" class="form-control " placeholder="prenom"  name="PrenomClients"></br>
				<input type="text" class="form-control " placeholder="adresse" name="AdresseLivraisonClients"></br>
				<input type="text" class="form-control " placeholder="mail" name="MailClients"></br>
				<input type="text" class="form-control " placeholder="ville" name="VilleClients"></br>
			</form>
		</div>

		<div class="col-md-4 col-sm-4 col-xs-4">
			
		</div>
	</div>

	<div class="gris"></div>
</body>
</html>

<script src="<?=base_url("public/scriptJS/jquery.js")?>"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?=base_url("public/scriptJS/bootstrap.js")?>"></script>
<script src="<?=base_url("public/scriptJS/script.js")?>"></script>



<script>
	
$(document).ready(function ()
{
	$(function () 
	{
		$(".infobulle").popover
		({		
			html : true,
			content : "<div class='login'><p class='text-center'>Identifiant</p><input type='text' class='id'></div><div class='mdp'><p class='text-center'>Mot de passe</p><input type='text' class='mdp'></div><input class='btnLog' type='button' value='Valider'/></br><a class='register' href='<?= site_url("welcome/inscription") ?>'>Inscription<a href='<?= site_url("welcome/client") ?>' hidden class='cli'>Acces client</p></a>",
			placement : "bottom",
		});
		$(".infobulle2").popover
		({		
			html : true,
			content : "<?php foreach ($catalogue as $key => $value){echo "<div class='list-group'><button type='button' class='list-group-item'>$value->LibelleRubrique</button></div>";}?>",
			placement : "bottom",
		});

	});
});

</script>