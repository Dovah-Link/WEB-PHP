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
	<carousel>
		
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  			<ol class="carousel-indicators">
    			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
    			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
  			</ol>

  			<div class="carousel-inner" role="listbox">
    			<div class="item active">
      				<img src="<?=base_url("public/img/slider/1.png")?>" id="slideun" alt="...">
      					<div class="carousel-caption">
        					
      					</div>
    				</div>
	
    			<div class="item">
      				<img src="<?=base_url("public/img/slider/2.png")?>" id="slidedeux" alt="...">
      					<div class="carousel-caption">
        					
      					</div>
    			</div>
		
    			<div class="item">
      				<img src="<?=base_url("public/img/slider/3.png")?>" id="slidetrois" alt="...">
      					<div class="carousel-caption">
        					
      					</div>
    			</div>
    			
			</div>
	
  			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    			<span class="sr-only">Previous</span>
  			</a>
  			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    			<span class="sr-only">Next</span>
  			</a>
		</div>
	</carousel>
	<vente>
		<div class="row text-center">
			</br>
				<p id="titre">
					<h2>MEILLEURES VENTES</h2>
				</p>
			</br>
		</div>

		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-4"><img class="fullwidth" src="<?=base_url("public/img/bestventes/1.jpg")?>"></div>
			<div class="col-md-4 col-sm-4 col-xs-4"><img class="fullwidth" src="<?=base_url("public/img/bestventes/2.jpg")?>"></div>	
			<div class="col-md-4 col-sm-4 col-xs-4"><img class="fullwidth" src="<?=base_url("public/img/bestventes/3.jpg")?>"></div>		
		</div>

		<div class="row">

			<div class="col-md-2 col-sm-2 col-xs-2">
				<img id="img1" src="<?=base_url("public/img/Logos/11.png")?>">
			</div>

			<div class="col-md-2 col-sm-2 col-xs-2">
				<img id="img2" src="<?=base_url("public/img/Logos/2.jpg")?>">
			</div>

			<div class="col-md-2 col-sm-2 col-xs-2">
				<img id="img3" src="<?=base_url("public/img/Logos/3.png")?>">
			</div>

			<div class="col-md-2 col-sm-2 col-xs-2">
				<img id="img4" src="<?=base_url("public/img/Logos/4.png")?>">
			</div>

			<div class="col-md-2 col-sm-2 col-xs-2">
				<img id="img5" src="<?=base_url("public/img/Logos/5.png")?>">
			</div>

			<div class="col-md-2 col-sm- col-xs-">
				<img id="img6" src="<?=base_url("public/img/Logos/6.png")?>">
			</div>

 		</div>
	</vente>
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



