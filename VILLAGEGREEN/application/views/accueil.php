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

	<header id="head">
		<div class="row"  >
			<div id="menulogo" class="col-sm-4 col-xs-6 ">
					<img id="imglogomenu" src="<?=base_url("public/img/icones/map.png")?>">
			</div>

			<div id="logoVG" class="col-sm-4 hidden-xs">
					<img id="imglogoVG" src="<?=base_url("public/img/Logos/logoVG.png")?>">
			</div>

			<div id="client" class="col-sm-4 col-xs-6" >
					<p id="txtclient">ESPACE CLIENT</p>
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
			<div class="col-md-4 sanspadding"><img class="fullwidth" src="<?=base_url("public/img/bestventes/1.jpg")?>"></div>
			<div class="col-md-4 sanspadding"><img class="fullwidth" src="<?=base_url("public/img/bestventes/2.jpg")?>"></div>	
			<div class="col-md-4 sanspadding"><img class="fullwidth" src="<?=base_url("public/img/bestventes/3.jpg")?>"></div>		
		</div>

		<!-- <div class="row">
			<div class="col-md-2"><img src="<?=base_url("public/img/Logos/11.png")?>"></div>
 		</div> -->
	</vente>
	
</div>

</body>
</html>

<script src="<?=base_url("public/scriptJS/jquery.js")?>"></script>

<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?=base_url("public/scriptJS/bootstrap.min.js")?>"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 

