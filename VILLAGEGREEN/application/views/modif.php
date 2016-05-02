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
		foreach ($loger as $key => $value)
		{
			
?>
		<form id="form" method="post" action="<?=site_url("welcome/update")?>">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-4"></div>
				<div class="col-md-4 col-sm-4 col-xs-4">
					<div class="text-center input-group ">
  						<input type="text" class="form-control" name="NomClients" id="nom" placeholder="NOM" aria-describedby="basic-addon1" value="<?=$value->NomClients?>">
					</div>
					<div class="input-group ">
  						<input type="text" class="form-control" name="PrenomClients" id="prenom" placeholder="PRENOM" aria-describedby="basic-addon1" value="<?=$value->PrenomClients?>">
					</div>
					<div class="input-group ">
  						<input type="text" class="form-control" name="AdresseLivraisonClients" id="adrs" placeholder="ADRESSE" aria-describedby="basic-addon1" value="<?=$value->AdresseLivraisonClients?>">
					</div>
					<div class="input-group ">
  						<input type="text" class="form-control" name="CodePostalClients" id="cp" placeholder="CODE POSTAL" aria-describedby="basic-addon1" value="<?=$value->CodePostalClients?>">
					</div>
					<div class="input-group ">
  						<input type="text" class="form-control" name="VilleClients" id="ville" placeholder="VILLE" aria-describedby="basic-addon1" value="<?=$value->VilleClients?>">
					</div>
					<div class="input-group ">
  						<input type="text" class="form-control" name="PaysClients" id="pays" placeholder="PAYS" aria-describedby="basic-addon1" value="<?=$value->PaysClients?>">
					</div>

					<div class="input-group ">
  						<input type="text" class="form-control" name="MailClients" id="mail" placeholder="MAIL" aria-describedby="basic-addon1" value="<?=$value->MailClients?>">
					</div>
		
					<div class="btn-group">
					 	<button id="btntypes" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					 		<span id="#themes">Types de Client</span>
					 		<span class="caret"></span>
					  	</button>
					  	<ul class="dropdown-menu">
					  	  	<li><a href="#">Particulier</a></li>
					  	  	<li role="separator" class="divider"></li>
					  	    <li><a href="#">Professionnel</a></li>
					  	</ul>
					</div></br>
					<input class="btn btn-warning" type="submit" id="btnsubmit" value="Modifier">
					<input type="text" name="TypesClients" hidden />
					
				</div>
			<div class="col-md-4 col-sm-4 col-xs-4"></div>
			</div>
	</form>
<?php
	}
?>
	</article>
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
			content : "<form method='post' action ='<?= site_url("welcome/login") ?>' <div class='login'><p class='text-center'>Identifiant</p><input type='text' name='login' class='id'></div><div><p class='text-center'>Mot de passe</p><input type='password' name ='mdp' class='mdp'/></div><input class='btnLog' type='submit' value='Valider'/></form></br><a class='register' href='<?= site_url("welcome/inscription") ?>'>Inscription</a><div class='cli'><a href='<?= site_url("welcome/client") ?>'>Acces client</a></div>",
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
